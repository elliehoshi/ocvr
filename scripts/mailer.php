<?php

function mailer() {
  $name = $_POST["name"];
  $body = $_POST["body"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  $to      = 'parks.kendrick@gmail.com';
  $subject = "Sponsor Request from " . $name ;
  $message = "Sponsor Message: \r" . $body . "\rPhone Number: " . $phone;
  $header = "To: Mary <mary@example.com>\r\n";
  $header.= "From: info@smogfightingpaint.com\r\n"; 
  $header.= "MIME-Version: 1.0\r\n"; 
  $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
  $header.= "X-Priority: 1\r\n"; 
  $header.= 'X-Mailer: PHP/' . phpversion();
  $header.= "Reply-To: " . $email . "\r\n";

  mail($to, $subject, $message, $header, "-finfo@smogfightingpaint.com");
}


?>