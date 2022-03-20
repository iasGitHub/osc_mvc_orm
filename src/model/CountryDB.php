<?php
namespace src\model;
use libs\system\Model;

class CountryDB extends Model
{
    public function __construct()
    {
        parent::__construct();
        //echo "ok";
    }
  
    public function findAll(){
      
       
      return $this->entityManager->createQuery("SELECT c FROM Country c")->getResult();
        
    }
}
