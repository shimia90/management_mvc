<?php 
    require_once 'define.php';
    /**
     * Autoload Class files in libs directory
     */
    function __autoload($className) {
        require_once LIBRARY_PATH . "{$className}.php";
    }
    $bootstrap = new Bootstrap();
    $bootstrap->init();
?>