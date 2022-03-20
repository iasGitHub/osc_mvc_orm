<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


        /**
         * @ORM\Entity
         * @ORM\Table(name="communes")
         */
    class Commune
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idCo;
        /** @ORM\Column(type="string") **/
        private $communeName;
        
        /**
         * @ORM\ManyToOne(targetEntity="Department", inversedBy="communes")
         * @ORM\JoinColumn(name="department_id", referencedColumnName="idDep")
         */
        private $department;

        /**
         * @ORM\OneToMany(targetEntity="District", mappedBy="commune")
        */
        private $districts;
        

        public function __construct()
        {
             $this->districts = new ArrayCollection();
        }

        /**
         * Get the value of idCo
         */ 
        public function getIdCo()
        {
                return $this->idCo;
        }

        /**
         * Set the value of idCo
         *
         * @return  self
         */ 
        public function setIdCo($idCo)
        {
                $this->idCo = $idCo;
                return $this;
        }

        /**
         * Get the value of communeName
         */ 
        public function getCommuneName()
        {
                return $this->communeName;
        }

        /**
         * Set the value of communeName
         *
         * @return  self
         */ 
        public function setCommuneName($communeName)
        {
                $this->communeName = $communeName;
                return $this;
        }
    }
    

?>


