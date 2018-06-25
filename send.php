<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = '****************@*****.com';

    $email_subject = "Contact Form";

    $email_body = "$name.\n".
        "$email.\n".
        "$message.\n";

    $to = "****************@*****.com";

    $headers = "From: $email \r\n";

    $header .= "Reply-To: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact");

    $submit = $_POST['submit'];

    if(isset($submit)) {
        echo "Successful!";
    }
?>
