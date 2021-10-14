<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "À propos de votre portfolio"
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "info@carolineloubier.ca";
    $headers = "De: ".$mailFrom;
    $txt = "Vous avez reçu un courriel de ".$name."."\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}