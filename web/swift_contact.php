<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('rdvmedecin98@gmail.com')
  ->setPassword('RdvMedecin7899')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
$x = [$_POST['message']];
// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['rdvmedecin98@gmail.com' => implode(" ",[$_POST['name']])])
  ->setTo([$_POST['email']])
  ->setBody(implode(" ", $x))
  ;

// Send the message
$result = $mailer->send($message);