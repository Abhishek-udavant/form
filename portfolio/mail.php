<?php

$name = $_POST['$name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Form:".$name."<".$email.">\r\n";
$recipient = "abhishekudawant94@gamil.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400;500&family=REM:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<h1> Thank you for connecting me. I will get back to you as soon as possible</h1 >
<p class="back"> Go back to the <a href="index.htnl"> Homepage</a>.</p>

    
</body>
</html>';

?>