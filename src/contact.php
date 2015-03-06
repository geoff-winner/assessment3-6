<?php
  class Contacts
  {
      private $contact;

      function __construct($contact)
    {
        $this->contact = $contact;
    }
      function setContact($contact)
    {
        $this->contact = (string) $contact;
    }
      function getContact()
    {
        $this->contact;
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
