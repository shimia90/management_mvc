<?php
class Session {
    /**
     * 
     */
    public static function init() {
        session_start();
    }
    
    /**
     * 
     * @param unknown $key
     * @param unknown $value
     */
    public static function set($key, $value) {
        $_SERVER[$key] = $value;
    }
    
    /**
     * 
     * @param unknown $key
     * @return unknown
     */
    public static function get($key) {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    
    public static function destroy() {
        session_destroy();
    }
}