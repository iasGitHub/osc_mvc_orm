<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="departments")
 */
    class Department 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idDep;
        /** @ORM\Column(type="string") **/
        private $departName;
        
        /**
         * @ORM\ManyToOne(targetEntity="Region", inversedBy="departments")
         * @ORM\JoinColumn(name="region_id", referencedColumnName="idReg")
        */
        private $region;

        /**
         * @ORM\OneToMany(targetEntity="Commune", mappedBy="department")
        */
        private $communes;
        
        public function __construct()
        {
                $this->communes = new ArrayCollection();
        }

        /**
         * Get the value of idDis
         */ 
        public function getIdDis()
        {
                return $this->idDis;
        }

        /**
         * Set the value of idDis
         *
         * @return  self
         */ 
        public function setIdDis($idDis)
        {
                $this->idDis = $idDis;
                return $this;
        }

        /**
         * Get the value of districtName
         */ 
        public function getDistrictName()
        {
                return $this->districtName;
        }

        /**
         * Set the value of districtName
         *
         * @return  self
         */ 
        public function setDistrictName($districtName)
        {
                $this->districtName = $districtName;
                return $this;
        }


        /**
         * Get the value of idDep
         */ 
        public function getIdDep()
        {
                return $this->idDep;
        }

        /**
         * Set the value of idDep
         *
         * @return  self
         */ 
        public function setIdDep($idDep)
        {
                $this->idDep = $idDep;
                return $this;
        }

        /**
         * Get the value of departName
         */ 
        public function getDepartName()
        {
                return $this->departName;
        }

        /**
         * Set the value of departName
         *
         * @return  self
         */ 
        public function setDepartName($departName)
        {
                $this->departName = $departName;
                return $this;
        }
    }
    

?>