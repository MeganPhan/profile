<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Message from Your Website";
    $email_body = "From:  $name.\n".
                    "Email: $email.\n".
                        "Message: $message.\n";

    $email_to = "kimhoang7994@gmail.com";
    $header = "From: $name \r\n";
    $header = "Reply-To: $email \r\n";

    mail($email_to, $email_subject, $email_body, $header);
    header("Location: contact.html");
