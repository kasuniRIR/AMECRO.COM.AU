<?php
    
    $name = "";
    $email = "";
    $phone = "";
    $message = "";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
    
    // Create the email and send the message
    $to =  'thisara@reachitright.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Your Have Email From AMECRO";
    $email_body = "<h1>$name Send You an Email</h1>\n\n" . "Here are the details!!\n\nName: $name \n\nEmail: $email\n\nPhone: $phone\n\nMessage: $message";
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
    // Create email headers
    $headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
    mail($to, $email_subject, $email_body, $headers);
}
?>