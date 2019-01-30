<?php

namespace Blogs\Controllers;

class BaseController {

    private $controllerName;

    private $actionName;

    private $controllerFileLocation;

    private $variables;

    private $views;

    public function __construct() {
        $this->controllerName = $GLOBALS['controllerName'];
        $this->actionName = $GLOBALS['actionname'];
        $this->controllerFileLocation = $GLOBALS['controllerFileLocation'];

        $this->variables = array();
        $this->views = array();
    }

    public function getControllerName() {
        return $this->controllerName;
    }

    public function getActionname() {
        return $this->actionName;
    }

    public function getControllerFileLocation() {
        return $this->controllerFileLocation;
    }
    
    public function setVar($placeholder, $value) {
        $this->variables[$placeholder] = $value;
    }

    public function setVars($variables = array()) {

        if (!is_array($variables)) {
            
            throw new \Exception('Variable must ba an array.');

        }

        $this->variables = $variables;
    }


}