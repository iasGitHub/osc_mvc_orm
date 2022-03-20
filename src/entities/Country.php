<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="countrys")
 */
    class Country 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idCoun;
        /** @ORM\Column(type="string") **/
        private $countryName; 
          
        /**
         * One Country has many Region. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Region", mappedBy="country")
        */
        private $regions;

        public function __construct()
        {
                $this->regions = new ArrayCollection();
        }


        /**
         * Get the value of idCoun
         */ 
        public function getIdCoun()
        {
                return $this->idCoun;
        }

        /**
         * Set the value of idCoun
         *
         * @return  self
         */ 
        public function setIdCoun($idCoun)
        {
                $this->idCoun = $idCoun;
                return $this;
        }

        /**
         * Get the value of countryName
         */ 
        public function getCountryName()
        {
                return $this->countryName;
        }

        /**
         * Set the value of countryName
         *
         * @return  self
         */ 
        public function setCountryName($countryName)
        {
                $this->countryName = $countryName;
                return $this;
        }
    }
    

?>