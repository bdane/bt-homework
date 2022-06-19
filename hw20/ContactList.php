<?php

class ContactList extends Contact
{
    protected $contacts = [];

    public function addContact(object $contact)
    {
        $this->contacts[] = [$contact];
    }

    public function listAllContacts()
    {
        if (count($this->contacts) != 0) {
            foreach ($this->contacts as $oneContact) {
                //var_dump($oneContact);
                foreach ($oneContact as $value) {
                    //var_dump($value);
                    echo "<br>";
                    foreach ($value as $deepValue) {
                        //var_dump($deepValue);
                        echo $deepValue . "<br>";
                    }
                }
            }
        } else {
            echo "Contacts list is empty.<br>";
        }
    }
}
