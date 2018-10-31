<?php
    $name = $_POST['email'];
    $vistor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'owenkramer01@live.nl';

    $email_subject = "New Form Submission";

    $email_body = "Username: $name.\n".
                "user email: $visitor_email.\n".
                "User message: $message.\n";

        $to = "owenkramer01@live.nl";

         $headers = "from: $email_from \r\n";

         $headers .= "reply-to: $vistor_email \r\n";

         mail($to,email_subject,$email_body,$headers);

         header("location: indexC.html");

?>