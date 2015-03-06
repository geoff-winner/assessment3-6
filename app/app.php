<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    session_start();

    if(empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app= new Silex\Application();

    $app->register(new Silex\Provider\TwigserviceProvider(), array (
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('contactlist.twig', array('contacts' => Contacts::getAll()));

    });

    $app->post('/create_contact', function() use ($app) {
      $contact = new Contacts($_POST['contact']);
      $contact->save();
      return $app['twig']->render('create_contact.twig', array('newcontact' => Contacts::getAll()));

    });

    $app->post('/delete_contacts', function() use ($app) {
      Contacts::deleteALL();
      return $app['twig']->render('delete_contacts.twig');

    });

    return $app;
?>
