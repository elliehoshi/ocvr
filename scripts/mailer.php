<?php

  $name = $_POST["name"];
  $body = $_POST["body"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  $to      = 'parks.kendrick@gmail.com';
  $subject = "Sponsor Request from " . $name ;
  $message = "Sponsor Message: \r" . $body . "\rPhone Number: " . $phone;
  $header = "To: Meesh <michel@orangecountyvr.com>, Dylan <dylan@orangecountyvr.com>\r\n";
  $header.= "From: SponsorPage <info@smogfightingpaint.com>\r\n"; 
  $header.= "MIME-Version: 1.0\r\n"; 
  $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
  $header.= "X-Priority: 1\r\n"; 
  $header.= 'X-Mailer: PHP/' . phpversion();
  $header.= "Reply-To: " . $email . "\r\n";

  mail($to, $subject, $message, $header);
  // mail($to, $subject, $message, "From: Info <info@smogfightingpaint.com>");
  header( "Location: http://smogfightingpaint.com/kendrick/sponsors/index.html" );
  // die('here');
  exit();



?>