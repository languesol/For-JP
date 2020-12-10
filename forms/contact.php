<?php

if (isset ($_POST['Send message'])) {
  $name = $_Post ['Your name'];
  $email = $_Post ['Your email'];
  $subject = $_Post ['subject'];
  $message = $_Post ['Message'];


  $mailTo = "hi@jeanpierreùurray.com"
  $headers ="From: ". $mailFrom;
  $txt = "You have received an email from ". $name. ".\n\n". $message;

  mail($mailTo, $subject, $txt, $headers);
  header ("Location: index.php?mailsend");
}