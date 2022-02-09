<?php
class User
{
    private $id;
    private $Firstname;
    private $Lastname;
    private $Username;
    private $Email;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    // public function setId($id)
    // {
    //     $this->id = $id;

    //     return $this;
    // }

    /**
     * Get the value of Firstname
     */ 
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * Set the value of Firstname
     *
     * @return  self
     */ 
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    /**
     * Get the value of Lastname
     */ 
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @return  self
     */ 
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    /**
     * Get the value of Username
     */ 
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Set the value of Username
     *
     * @return  self
     */ 
    public function setUsername($Username)
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }
}