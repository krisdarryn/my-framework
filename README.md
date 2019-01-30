# my-framework
A PHP application, creating a simple MVC-Framework, where routing is base on the Contrller name and method name.

# Note: in-progress
Directory Structure:
* app 
    * assets
        *  images
        *  libraries
            *   scripts
            *   styles
        *  scripts
        *  styles
    *  config
        *  Bootsrap.php
        *  config.ini
    *  controllers
    *  libraries
    *  models
    *  public
    *  views
    
Where:
- assets - lits of all styles, scripts and images
- config - where the application configuration resides
    - config.ini - is where you set you database credentials
- controllers - where all application controllers resides
- libraries - where all utilities and helper classes resides
- models - where all application models resides
- public - where all external documents e.g. upload iamges, pdf and etc. resides
- views - where all the html templates resides

# Set up
1. Download Docker (version used: 18.09.1)
2. Pull the source code
3. cd path/to/blogs/
4. open your fav command line
5. run: docker-compose build
6. run: docker-compose up -d
7. after successfully creating the containers, access the application with this address: localhost:5000

# Steps in creating a web pages
1. Create a controller e.g. `MySampleController.php` inside apps/controllers/ (please check the existing controllers for the structure)
2. Inside MySampleController.php create an action method e.g. `public function indexAction() {}` (please check the existing controllers for the structure)
3. Your controller can be access in the browser with the url format: `localhost:5000/<my-sample>/<index>`


