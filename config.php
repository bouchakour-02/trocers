<?php
class Client
{
    private ?int $Name = null;
    private ?string $email = null;
    private ?string $password_registration = null;
    private ?string $password_confirmation = null;
    private ?string $Conditions = null;

    public function __construct($name, $email, $pass, $confirm, $condit)
    {
        $this->Name = $name;
        $this->email = $email;
        $this->password_registration = $pass;
        $this->password_confirmation = $confirm;
        $this->Conditions = $condit;
    }

    /**
     * Get the value of firstName
     */
    public function getName()
    {
        return $this->Name;
    }

 /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }


    /**
     * Get the value of lastName
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getPassw()
    {
        return $this->password_registration;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setgetPassw($password_registration)
    {
        $this->password_registration = $password_registration;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getConfirm()
    {
        return $this->password_confirmation;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setConfirm($password_confirmation)
    {
        $this->password_confirmation = $password_confirmation;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getCondit()
    {
        return $this->Conditions;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setCondit($Conditions)
    {
        $this->Conditions = $Conditions;

        return $this;
    }
}