<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
         * @ORM\Table(name="users")
         */
    class User 
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $idUser;
        /** @ORM\Column(type="string") **/
        private $firstName;
        /** @ORM\Column(type="string") **/
        private $lastName;
        /** @ORM\Column(type="string") **/
        private $civility;
        /** @ORM\Column(type="string") **/
        private $email;
        /** @ORM\Column(type="string") **/
        private $password;
        /** @ORM\Column(type="string") **/
        private $phone;
        /** @ORM\Column(type="string") **/
        private $job;
        
        /**
         * @ORM\OneToMany(targetEntity="Enterprise", mappedBy="user")
        */
        private $enterprises;
        
        public function __construct()
        {
            $this->enterprises = new ArrayCollection();
        }

        /**
         * Get the value of idUser
         */ 
        public function getIdUser()
        {
                return $this->idUser;
        }

        /**
         * Set the value of idUser
         *
         * @return  self
         */ 
        public function setIdUser($idUser)
        {
                $this->idUser = $idUser;
                return $this;
        }

        /**
         * Get the value of firstName
         */ 
        public function getFirstName()
        {
                return $this->firstName;
        }

        /**
         * Set the value of firstName
         *
         * @return  self
         */ 
        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;
                return $this;
        }

        /**
         * Get the value of lastName
         */ 
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */ 
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;
                return $this;
        }

        /**
         * Get the value of civility
         */ 
        public function getCivility()
        {
                return $this->civility;
        }

        /**
         * Set the value of civility
         *
         * @return  self
         */ 
        public function setCivility($civility)
        {
                $this->civility = $civility;
                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;
                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;
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
         * Get the value of job
         */ 
        public function getJob()
        {
                return $this->job;
        }

        /**
         * Set the value of job
         *
         * @return  self
         */ 
        public function setJob($job)
        {
                $this->job = $job;
                return $this;
        }
    }
    

?>