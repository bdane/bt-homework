<?php

class CustomerContact extends Contact
{
    protected $firstName;
    protected $lastName;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setFullName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function publicMe()
    {
        echo "First Name: " . $this->firstName . "<br>" . "Last Name: " . $this->lastName . "<br>";
        parent::publicMe();
    }
}
