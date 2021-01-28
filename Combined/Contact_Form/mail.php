<?php

    require 'mailer/PHPMailerAutoload.php';
    require 'mailer/credential.php';
    $mail = new PHPMailer;
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    header('Content-Type: application/json');
    if ($name === ''){
    print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
    exit();
    }
    if ($email === ''){
    print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
    exit();
    } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
    exit();
    }
    }
    if ($subject === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
    }
    if ($message === ''){
    print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
    exit();
    }


    

$content="<strong>From:</strong> $name <br><strong>Email:</strong> $email <br><strong>Message:</strong><p style='white-space:pre-wrap;'>$message </p>";


//SMTP Settings
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "";                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Email Settings
$mail->setFrom($email, $name);
$mail->addAddress("");     // Add a recipient
// $mail->header();
$mail->addCustomHeader('GOO', '$name');
$mail->addReplyTo($email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $content;

if(!$mail->send()) {
    // echo "Message could not be sent. <br><br>" . $mail->ErrorInfo;
    print json_encode(array('message' => 'Email not sent!', 'code' => 0));

} else {
//    echo "Email Sent.";
   print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
}
?>