<?php
    class Autoload
    {
        static function register()
        {
            spl_autoload_register(array(__CLASS__, "autoload"));
        }
        static function autoload($class)
        {
            //echo $class;
            require_once "src/model/".$class.".php";
        }
    }
    Autoloader::register();
?>