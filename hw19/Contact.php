<?php

class Contact
{
    protected $phone;
    protected $email;


    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function searchTerm($term = "")
    {
        if (str_contains($this->phone, $term)) {
            echo $this->phone . " contains ['" . $term . "']!<br>";
        } elseif (str_contains($this->email, $term)) {
            echo $this->email . " contains ['" . $term . "']!<br>";
        } else {
            echo "Ni jedan objekat ne sadrzi term. ['" . $term . "'].<br>";
        }
    }
}
