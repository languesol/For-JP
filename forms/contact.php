<?php

if (isset($_POST['submit'])) {
  $name = $_Post ['name'];
  $subject =_Post ['subject'];
  $mailFrom = $_Post ['mail'];
  $message = $_Post ['Message'];
}


  $mailTo = "hi@jeanpierremurray.com";
  $headers ="From: ". $mailFrom;
  $txt = "You have received an email from ". $name. ".\n\n". $message;

  mail($mailTo, $subject, $txt, $headers);
  header ("Location: index.html?mailsend");
}