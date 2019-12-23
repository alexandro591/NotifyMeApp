<?php
    header("Access-Control-Allow-Origin: *");
    require_once "Mail.php";
    $email=$_GET['email'];
    $app=$_GET['app'];
    $notification=$_GET['notification'];
    $from = "<notifymelocalhost@gmail.com>";
    $to = "<notifymelocalhost@gmail.com>";
    $subject = "Notification from NotifyMeApp";
    $body="XXX". $email. "XXX". " ". "YYY". $app. "YYY". " ". "ZZZ". $notification. "ZZZ";
    $body=str_replace(" ","***",$body);
    $body=str_replace("\n","---",$body);
    $host = "smtp.gmail.com";
    $username = "notifymelocalhost@gmail.com";
    $password = "elhuevo591";
    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password));
    $mail = $smtp->send($to, $headers, $body);
    if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
    } else {
        echo("<p>Notification successfully sent!</p>");
    }
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>
