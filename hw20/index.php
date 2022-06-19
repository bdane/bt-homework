<?php

include 'Contact.php';
include 'ContactList.php';
include 'CustomerContact.php';
include 'BusinessContact.php';

//$contact1 = new Contact();
//$contact2 = new Contact();
//$contact3 = new Contact();

$kontaktLista = new ContactList();

$costumer1 = new CustomerContact();
$costumer2 = new CustomerContact();

$business1 = new BusinessContact();
$business2 = new BusinessContact();

/* $contact1->setPhone('0631234567');
$contact1->setEmail('contact1@contact1.com');

$contact2->setPhone('0641234567');
$contact2->setEmail('contact2@contact2.com');

$contact3->setPhone('0651234567');
$contact3->setEmail('contact3@contact3.com'); */

$costumer1->setPhone('0637654321');
$costumer1->setEmail('costumer1@costumer1.com');
$costumer1->setFullName('Petar', 'Petrovic');

/* echo $contact1->searchTerm('danilo.strahinovic');
echo $contact1->searchTerm('1.com');
echo $contact2->searchTerm('641'); */

/* $kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);
$kontaktLista->addContact($contact3); */

$kontaktLista->addContact($costumer1);

//var_dump($contact1);

//var_dump($contact1 instanceof Contact);

$kontaktLista->listAllContacts();

//var_dump($kontaktLista);
