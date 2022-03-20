<?php
namespace libs\system;

    // Controller de base
    class Controller
    {
        protected $view;
        public function __construct()
        {
            $this->view = new View();
        }
    }
?>