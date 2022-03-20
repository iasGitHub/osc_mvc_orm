<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="domains")
 */
    class Domain 
    {
       /**
        * @ORM\Id
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue(strategy="AUTO")
        */
       private $idDom;
       /** @ORM\Column(type="string") **/
       private $name;

       /**
         * @ORM\OneToMany(targetEntity="Enterprise", mappedBy="domain")
        */
        private $enterprises;

       public function __construct()
       {
              $enterprises = new ArrayCollection();
       }

       /**
        * Get the value of idD
        */ 
       public function getIdDom()
       {
              return $this->idDom;
       }

       /**
        * Set the value of idD
        *
        * @return  self
        */ 
       public function setIdDom($idDom)
       {
              $this->idDom = $idDom;
              return $this;
       }

       /**
        * Get the value of name
        */ 
       public function getName()
       {
              return $this->name;
       }

       /**
        * Set the value of name
        *
        * @return  self
        */ 
       public function setName($name)
       {
              $this->name = $name;
              return $this;
       }
    }
    

?>