<?php
  class Contacts
  {
      private $contact;

      function __construct($contact)
    {
        $this->contact = $contact;
    }
      function setContact($new_contact)
    {
        $this->contact = (string) $new_contact;
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
