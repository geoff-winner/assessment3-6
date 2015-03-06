<?php //all variables have get/set functions and are working. properties of contact class set to private.
  class Contacts
  {
      private $contact;
      private $number;
      private $address;
      private $image;

      function __construct($contact, $con_number, $con_address, $con_image)
    {
        $this->contact = $contact;
        $this->number = $con_number;
        $this->address = $con_address;
        $this->image = $con_image;
    }
      function setContact()
    {
        $this->contact = (string) $contact;
    }
      function setNumber()
    {
        $this->number = (string) $number;
    }
      function setAddress()
    {
        $this->address = (string) $address;
    }
      function setImage()
    {
        $this->image = (string) $image;
    }
      function getContact()
    {
        return $this->contact;
    }
      function getNumber()
    {
        return $this->number;
    }
      function getAddress()
    {
        return $this->address;
    }
      function getImage()
    {
        return $this->image;
    }
      function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }
      static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }
      static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }

  }


?>
