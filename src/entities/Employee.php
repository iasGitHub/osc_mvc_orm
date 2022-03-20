<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="employees")
 */
    class Employee 
    {
       /**
        * @ORM\Id
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue(strategy="AUTO")
        */
       private $idEmp;
       /** @ORM\Column(type="string") **/
       private $firstName;
       /** @ORM\Column(type="string") **/
       private $lastName;
       /** @ORM\Column(type="string") **/
       private $email;
       /** @ORM\Column(type="string") **/
       private $phone;
       /** @ORM\Column(type="string") **/
       private $job;
       
       /**
         * Many Employee have one Enterprise. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Enterprise", inversedBy="employees")
         * @ORM\JoinColumn(name="enterprise_id", referencedColumnName="idEnt")
         */
        private $enterprise;

       public function __construct()
       {
           
       }

       /**
        * Get the value of idEmp
        */ 
       public function getIdEmp()
       {
              return $this->idEmp;
       }

       /**
        * Set the value of idEmp
        *
        * @return  self
        */ 
       public function setIdEmp($idEmp)
       {
              $this->idEmp = $idEmp;
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