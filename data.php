<?php

    $to = "XXXXXXXXXXX"; // Email Address
    $subject = "Feedback - " . date("YmdHis");
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $msg = $_POST['user_msg'];

    $message =  "Name: " . $name . "\n\nFrom: " . $email . "\n\nMessage: " . $msg;
    $message = wordwrap($message, 70);

    if(mail($to, $subject, $message)) {
        echo "Success";
    }
    else {
        echo "Failure";
    }

?>
