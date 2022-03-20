<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="regions")
 */
    class Region 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idReg;
        /** @ORM\Column(type="string") **/
        private $regName;
         
         /**
         * @ORM\ManyToOne(targetEntity="Country", inversedBy="regions")
         * @ORM\JoinColumn(name="country_id", referencedColumnName="idCoun")
         */
        private $country;

        /**
         * One Region has many Department. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Department", mappedBy="region")
        */
        private $departments;
        
        public function __construct()
        {
                $this->departments = new ArrayCollection();
        }

        /**
         * Get the value of idReg
         */ 
        public function getIdReg()
        {
                return $this->idReg;
        }

        /**
         * Set the value of idReg
         *
         * @return  self
         */ 
        public function setIdReg($idReg)
        {
                $this->idReg = $idReg;
                return $this;
        }

        /**
         * Get the value of regName
         */ 
        public function getRegName()
        {
                return $this->regName;
        }

        /**
         * Set the value of regName
         *
         * @return  self
         */ 
        public function setRegName($regName)
        {
                $this->regName = $regName;
                return $this;
        }
    }
    

?>