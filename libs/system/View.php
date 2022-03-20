<?php
namespace libs\system;

    class View
    {
        public function __construct(){
            
        }
        public function load(){
            // Permet de compter le nombre de param de la func
            $num = func_num_args();
            // Permet de récupérer les valeurs des paramètres
            $args = func_get_args();
            switch ($num) {
                case 1:
                    $url = 'http://localhost/MVC_ORM/';
                    $file="src/view/".$args[0].".php";
                    
                    if (file_exists($file)) {

                    require_once $file;
                    }else {
                        die($file." n'existe pas comme vue");
                    }
                    break;
                case 2:
                        $file="src/view/".$args[0].".php";
                    if (file_exists($file)) {
                        $data=$args[1];
                        $url = 'http://localhost/MVC_ORM/';
                    require_once $file;
                    }else {
                        die($file." n'existe pas comme vue");
                    }
                        break;
            
            }
        }
    }

?>