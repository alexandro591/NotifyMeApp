<?php
    header("Access-Control-Allow-Origin: *");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body>
    <h1><div id="message">... Sending notification...</div></h1>
</body>
</html>

<script>
    let email="";
    let app="";
    let notification="";
    (new URL(window.location.href)).searchParams.forEach((x, y) =>{
        x=x.toString()
        if(y==="email"){
            email=x;
        }
        if(y==="app"){
            app=x;
        }
        if(y==="notification"){
            notification=x;
        }
        if(email!==""&&app!==""&&notification!==""){
            
            body=notification
            body="XXX"+email+"XXX"+" "+"YYY"+app+"YYY"+" "+"ZZZ"+body+"ZZZ";
            body=body.replace(/ /gi,"***").replace(/\n/gi,"---");
            Email.send({
                SecureToken : "c651c67f-ae22-43c5-8d31-710a7c4bb6a9",
                To : 'notifymelocalhost@gmail.com',
                From : "notifymelocalhost@gmail.com",
                Subject : "Notification from NotifyMeApp",
                Body : body
                }).then(
                message =>{
                    console.log(message);
                    document.getElementById("message").innerHTML = message;
                });
            }
            
    });
</script>