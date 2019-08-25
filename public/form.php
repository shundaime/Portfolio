<?php
session_start();

require_once __DIR__ . '/../env.php';
require_once __DIR__ . '/../vendor/autoload.php';

use ReCaptcha\ReCaptcha;

// Data submit in form
$name = htmlspecialchars(trim($_POST['name']));
$mail = htmlspecialchars(trim($_POST['email']));
$message_txt = htmlspecialchars(nl2br(trim($_POST['content'])));

if (isset($_POST['send'])) { // Form submit
    if ( ! empty($name) && ! empty($mail) && ! empty($message_txt) && ! empty($_POST['g-recaptcha-response'])) {

        // HTML structure
        $message_html = "<html><head></head><body><p>$message_txt</p><p>$name</p><p></p>Mail : $mail</body></html>";

        // Subject
        $sujet = "Nouveau message de $name";

        // Create the Transport
        $transport = Swift_SmtpTransport::newInstance('SSL0.OVH.NET', '465', 'ssl');
        $transport->setUsername(MAIL);
        $transport->setPassword(MAIL_PASSWORD);

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message($sujet))
            ->setFrom(MAIL)
            ->setReplyTo($_POST['email'])
            ->setTo([FINAL_MAIL])
            ->setBody($message_html, 'text/html');

        // Send the message
        $result = $mailer->send($message);
        $_SESSION["message_sent"] = true;

        // Redirect
        header("Location: /#contact");
    } else {
        $_SESSION["message_sent"] = false;
        header("Location: /#response");
    };
};

// Captcha
$secret = SECRET_KEY;
if(isset($_POST['g-recaptcha-response'])) {
    $recaptcha = new ReCaptcha($secret);
    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    if ($resp->isSuccess()) {
        $_SESSION["valid_captcha"] = true;
    } else {
        $_SESSION["valid_captcha"] = false;
    }
};