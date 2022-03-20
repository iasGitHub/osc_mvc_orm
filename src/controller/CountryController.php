<?php
namespace src\Controller;
use libs\system\Controller;

class CountryController extends Controller
{
    public function add()
    {
        return $this->view->load("country/add");
    }

    public function getAll()
    {
        $country = array("country_user", "countryadmin");
        return $this->view->load("country/getAll");
    }
} 

?>