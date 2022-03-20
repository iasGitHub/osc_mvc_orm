<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
         * @ORM\Table(name="enterprises")
         */
    class Enterprise 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idEnt;
        /** @ORM\Column(type="string") **/
        private $entName;
        /** @ORM\Column(type="string") **/
        private $coordonnees;
        /** @ORM\Column(type="string") **/
        private $phone;
        /** @ORM\Column(type="string") **/
        private $headOffice;
        /** @ORM\Column(type="string") **/
        private $creationDate;
        /** @ORM\Column(type="string") **/
        private $legalStatus;
        /** @ORM\Column(type="string") **/
        private $commRegister;
        /** @ORM\Column(type="string") **/
        private $ninea;
        /** @ORM\Column(type="string") **/
        private $webAddress;
        /** @ORM\Column(type="string") **/
        private $trainingDevice;
        /** @ORM\Column(type="boolean") **/
        private $qsp;
        /** @ORM\Column(type="boolean") **/
        private $organChart;
        
         /**
         * Many Enterprise have one District. This is the owning side.
         * @ORM\ManyToOne(targetEntity="District", inversedBy="enterprises")
         * @ORM\JoinColumn(name="district_id", referencedColumnName="idDis")
         */
        private $district;

        /**
         * @ORM\OneToMany(targetEntity="Employee", mappedBy="enterprise")
        */
        private $employees;

        /**
         * Many Enterprise have one Domain. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Domain", inversedBy="enterprises")
         * @ORM\JoinColumn(name="domain_id", referencedColumnName="idDom")
         */
        private $domain;

        /**
         * Many Enterprise have one User. This is the owning side.
         * @ORM\ManyToOne(targetEntity="User", inversedBy="enterprises")
         * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
         */
        private $user;
        
        public function __construct()
        {
                $this->employees = new ArrayCollection();
        }

        /**District
         * Get the value of idEnt
         */ 
        public function getIdEnt()
        {
                return $this->idEnt;
        }

        /**
         * Set the value of idEnt
         *
         * @return  self
         */ 
        public function setIdEnt($idEnt)
        {
                $this->idEnt = $idEnt;
                return $this;
        }

        /**
         * Get the value of entName
         */ 
        public function getEntName()
        {
                return $this->entName;
        }

        /**
         * Set the value of entName
         *
         * @return  self
         */ 
        public function setEntName($entName)
        {
                $this->entName = $entName;
                return $this;
        }

        /**
         * Get the value of coordonnees
         */ 
        public function getCoordonnees()
        {
                return $this->coordonnees;
        }

        /**
         * Set the value of coordonnees
         *
         * @return  self
         */ 
        public function setCoordonnees($coordonnees)
        {
                $this->coordonnees = $coordonnees;
                return $this;
        }

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;
                return $this;
        }

        /**
         * Get the value of headOffice
         */ 
        public function getHeadOffice()
        {
                return $this->headOffice;
        }

        /**
         * Set the value of headOffice
         *
         * @return  self
         */ 
        public function setHeadOffice($headOffice)
        {
                $this->headOffice = $headOffice;
                return $this;
        }

        /**
         * Get the value of creationDate
         */ 
        public function getCreationDate()
        {
                return $this->creationDate;
        }

        /**
         * Set the value of creationDate
         *
         * @return  self
         */ 
        public function setCreationDate($creationDate)
        {
                $this->creationDate = $creationDate;
                return $this;
        }

        /**
         * Get the value of legalStatus
         */ 
        public function getLegalStatus()
        {
                return $this->legalStatus;
        }

        /**
         * Set the value of legalStatus
         *
         * @return  self
         */ 
        public function setLegalStatus($legalStatus)
        {
                $this->legalStatus = $legalStatus;
                return $this;
        }

        /**
         * Get the value of commRegister
         */ 
        public function getCommRegister()
        {
                return $this->commRegister;
        }

        /**
         * Set the value of commRegister
         *
         * @return  self
         */ 
        public function setCommRegister($commRegister)
        {
                $this->commRegister = $commRegister;
                return $this;
        }

        /**
         * Get the value of ninea
         */ 
        public function getNinea()
        {
                return $this->ninea;
        }

        /**
         * Set the value of ninea
         *
         * @return  self
         */ 
        public function setNinea($ninea)
        {
                $this->ninea = $ninea;
                return $this;
        }

        /**
         * Get the value of webAddress
         */ 
        public function getWebAddress()
        {
                return $this->webAddress;
        }

        /**
         * Set the value of webAddress
         *
         * @return  self
         */ 
        public function setWebAddress($webAddress)
        {
                $this->webAddress = $webAddress;
                return $this;
        }

        /**
         * Get the value of trainingDevice
         */ 
        public function getTrainingDevice()
        {
                return $this->trainingDevice;
        }

        /**
         * Set the value of trainingDevice
         *
         * @return  self
         */ 
        public function setTrainingDevice($trainingDevice)
        {
                $this->trainingDevice = $trainingDevice;
                return $this;
        }

        /**
         * Get the value of organChart
         */ 
        public function getOrganChart()
        {
                return $this->organChart;
        }

        /**
         * Set the value of organChart
         *
         * @return  self
         */ 
        public function setOrganChart($organChart)
        {
                $this->organChart = $organChart;
                return $this;
        }
    }
    

?>