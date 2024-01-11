<?php

require 'config/function.php';
require_once 'vendor/autoload.php';

$host = "smtp.gmail.com";
$port = "465";
$sslOrTls = "ssl"; // ssl-465 | tsl-587
$setUsername = "";
$setPassword = "";

$emailAddress = "jeremias241086@gmail.com";
$emailTo = "jeremias241086@gmail.com";
$subject = "Tienes una nueva consulta!";

if (isset($_POST['contactSubmit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $bodyContent = '<div>
        <h4>Name : ' . $name . '</h4>
        <h4>Telefono : ' . $phone . '</h4>
        <h4>Email : ' . $email . '</h4>
        <h4>Servicio : ' . $service . '</h4>
        <h4>Mensaje : ' . $message . '</h4>
        </div>';

    try {

        // Create the Transport
        $transport = (new Swift_SmtpTransport($host, $port, $sslOrTls))
            ->setUsername($setUsername)
            ->setPassword($setPassword);

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message($subject))
            ->setFrom([$emailAddress => 'Test User'])
            ->setTo([$emailTo])
            ->setBody($bodyContent, 'text/html');

        // Send the message
        $result = $mailer->send($message);
        if ($result) {
            redirect('contact-us.php', 'Muchas gracias! Pronto nos pondremos en contacto con usted.');
        } else {
            redirect('contact-us.php', 'Algo salio mal.');
        }

    } catch (\Exception $e) {
        redirect('contact-us.php', 'Algo salio mal: '.$e->getMessage());
        
    }
}
