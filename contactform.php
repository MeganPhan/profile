<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "hoang.phan@tcu.edu";
    $header = "From: ".$email;
    $txt = "You have received a message from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $header);
    header("Location: index.php?mailsend");

}