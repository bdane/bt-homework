<?php

class BusinessContact extends Contact
{
    protected $address;
    protected $companyName;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function publicMe()
    {
        echo "Address: " . $this->address . "<br>" . "Company Name: " . $this->companyName . "<br>";
        parent::publicMe();
    }
}
