<?php

namespace Blogs\Init;

use ReflectionClass;

class Bootstrap {

    private $controllerName;

    private $actionName;

    private $controllerFileLocation;

    private $parameters;

    private $controllerInstace;

    /**
     * Application Initialization
     * Set global variables
     * Set routing
     * Load libraries
     * Load Models
     * 
     * @return void
     */
    public function __construct() {
        $this->loadModels();
        $this->loadLibraries();
        $this->initConfig();
    }
    
    /**
     * Run the application
     * 
     * @return void
     */
    public function run() {
        $this->initRoute();
        $this->invokeViews();
    }

    /**
     * Parse config.ini file 
     * Stores variables in PHP $GLOBALS
     * 
     * @return void
     * @throws Exception
     */ 
    private function initConfig() {
        $configValues = parse_ini_file('config.ini');

        if ( isset($configValues['db']) && 
            ( isset($configValues['db']['host']) && !empty($configValues['db']['host']) ) &&
            ( isset($configValues['db']['dbname']) && !empty($configValues['db']['dbname']) ) &&
            ( isset($configValues['db']['username']) && !empty($configValues['db']['username'] )) &&
            ( isset($configValues['db']['password']) && !empty($configValues['db']['password'] ))
        ) {

            $GLOBALS['db_host'] = $configValues['db']['host'];
            $GLOBALS['dbname'] = $configValues['db']['dbname'];
            $GLOBALS['username'] = $configValues['db']['username'];
            $GLOBALS['password'] = $configValues['db']['password'];

        } else {

            throw new \Exception('Please set values for DB config. File location: app/config/config.ini.');

        }


        if ( isset($configValues['defaultTimeZone']) ) {

            date_default_timezone_set($configValues['defaultTimeZone']);
            $GLOBALS['db_host'] = $configValues['defaultTimeZone'];

        } else {

            throw new \Exception('Please set values for default timezone. File location: app/config/config.ini.');

        }

        

    }

    /**
     * Set Routing
     * Loads specific controller, action and apply parameters
     * 
     * Parse the url as our route
     * 
     * Index 0 - Controller
     * Index 1 - Action
     * Index 2 and so on - Action Paramaters
     * 
     * @return void
     * @throws Exception
     */
    private function initRoute() {
        $route = isset($_GET['_url']) ? array_values(array_filter(explode('/', $_GET['_url']))) : array();

        // Set controller
        if (isset($route[0])) {
            $controllerName = str_replace( ' ', '', ucwords( str_replace('-', ' ', $route[0]) ) )  . 'Controller';
            unset($route[0]);
        } else {
            $controllerName = 'IndexController';
        }

        // Set Action
        if (isset($route[1])) {
            $actionName = lcfirst( str_replace( ' ', '', ucwords( str_replace('-', ' ', $route[1]) ) ) ) . 'Action';
            unset($route[1]);
        } else {
            $actionName = 'indexAction';
        }

        // Set action parameter(s)
        // Remaining values in route variable are the list of parameters
        // Since after getting the controller and action name we unset their value
        $this->parameters = $route;
        
        $controllerFileLocation = __DIR__ . '/../controllers/' . $controllerName . '.php';

        // Set global variables
        $this->controllerName = $controllerName;
        $GLOBALS['controllerName'] = $this->controllerName;

        $this->actionName = $actionName;
        $GLOBALS['actionname'] = $this->actionName;

        $this->controllerFileLocation = $controllerFileLocation;
        $GLOBALS['controllerFileLocation'] = $this->controllerFileLocation;

        // Load base controller
        require __DIR__ . '/../controllers/BaseController.php';

        if (file_exists($controllerFileLocation)) {
          
            // Redirect to calling controller
            $this->invokeController();

        } else {

            // Set global variables
            $this->controllerName = 'NotFoundController';
            $GLOBALS['controllerName'] = $this->controllerName;

            $this->actionName = 'indexAction';
            $GLOBALS['actionname'] = $this->actionName;

            $this->controllerFileLocation = __DIR__ . '/../controllers/NotFoundController.php';
            $GLOBALS['controllerFileLocation'] = $this->controllerFileLocation;

            // Redirect to NotFoundController
            $this->invokeController();
            
        }

    }

    /**
     * Invoke Controller::Action dynamically with its corresponding parameters
     * This is the starting point of the application
     * 
     * @return void
     * @throws Exception
     */
    private function invokeController() {

        require $this->controllerFileLocation;

        $controllerFullName = 'Blogs\Controllers\\' . $this->controllerName;
        $this->controllerInstance = new $controllerFullName();

        // Check if action exist in controller
        if (!method_exists($this->controllerInstance, $this->actionName)) {
            
            throw new \Exception("Action: {$this->actionName} doesn't exist in Controller: {$this->controllerName}.");

        }

        // Check if number of parameters in the url match with the number of parameters in action method
        $a = new ReflectionClass($controllerFullName);
        $noOfReqParamters = $a->getMethod($this->actionName)->getNumberOfRequiredParameters();

        if ( count($this->parameters) < $noOfReqParamters ) {

            throw new \Exception("Action: {$this->actionName} requires {$noOfReqParamters} number of parammeters.");

        }
        
        \call_user_func_array(array($this->controllerInstance, $this->actionName), $this->parameters);

    }

    /**
     * Render the controller view
     * 
     * @return void
     */
    private function invokeViews() {

        // Load controller variables in to the view        
        \extract($this->controllerInstance->getVars());

        // Load the view file
        if ( !empty($this->controllerInstance->getView()) && file_exists( __DIR__ . '/../views/' . $this->controllerInstance->getView() . '.php' ) ) {
            
            require __DIR__ . '/../views/' . $this->controllerInstance->getView() . '.php';

        }

    }

    /**
     * Import all library files
     * 
     * @return void
     */
    private function loadLibraries() {

        foreach( glob(__DIR__ . '/../libraries/*.php') as $file ) {
            require $file;
        }

    }

    /**
     * Import all model files
     * 
     * @return void
     */
    private function loadModels() {
        
        // First Load BaseModel 
        require __DIR__ . '/../models/BaseModel.php';
        
        foreach( glob(__DIR__ . '/../models/*.php') as $file ) {
            
            if (strpos($file, 'BaseModel.php')  !== false) {
                continue;
            }

            require $file;
        }
        
    }

}

