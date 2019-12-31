<?php
    $name = $_POST['name'];
    $cell = $_POST['cell'];
    $visitor_email = $_POST['email'];

    $email_from = 'creambaja@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Name: $name.\n",
                    "User Email: $visitor_email.\n",
                        "User Cell: $cell.\n";

    $to = "joshbird5@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


    ?>