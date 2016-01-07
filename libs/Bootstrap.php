<?php
class Bootstrap {
    
    /**
     * 
     */
    public function __construct() {
        $controllerURL      =       (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
        $actionURL          =       (isset($_GET['action'])) ? $_GET['action'] : 'index';
        $controllerName     =       ucfirst($controllerURL);
        $file               =       CONTROLLER_PATH . $controllerName . '.php';
        if(file_exists($file)) {
            require_once $file;
            $controller     =       new $controllerName;
            if(method_exists($controller, $actionURL) == true) {
                
            } else {
                
            }
        } else {
            
        }
    }
    
    /**
     * 
     */
    public function error() {
        require_once CONTROLLER_PATH . 'error.php';
        $error              =       new Error();
        $error->index();
    }
}