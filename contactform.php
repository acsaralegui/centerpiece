<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $company = $_Post['company']
  $message = $_Post['message'];

  $email_from = 'aaron.saralegui@gmail.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n".
                  "User  Name Email: $visitor_email.\n".
                    "User Message: $message.\n";

  $ to = "easilysmart@gmail.com";

  $headers = "From: $ email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.hmtl");




  ?>