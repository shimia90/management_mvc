<?php
    require_once 'index.php';
    function __autoload($className) {
        require_once LIBRARY_PATH . "{$className}.php";
    }