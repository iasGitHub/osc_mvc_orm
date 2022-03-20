<?php


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;



/**
 * @ORM\Entity
 * @ORM\Table(name="districts")
 */
    class District 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idDis;
        /** @ORM\Column(type="string") */
        private $districtName;
        

        /*
         * @ManyToOne(targetEntity="Commune", inversedBy="districts")
         * @JoinColumn(name="commune_id", referencedColumnName="idCo")
         */
        private $commune;

        /**
         * @ORM\OneToMany(targetEntity="Enterprise", mappedBy="district")
        */
        private $enterprises;

        public function __construct()
        {
                $this->enterprises = new ArrayCollection();
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

    }
    

?>