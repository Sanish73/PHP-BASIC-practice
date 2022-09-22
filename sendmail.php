



<!-- //         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $subject = "This is subject";
//         $message = $_POST['message'];


//         $mailheader = "From: " . $name . "<" . $email . ">\r\n";
//         $recipient = "thapasanish73@gmail.com";

//         mail($recipient, $subject, $message, $mailheader) or die('Error!');
//         echo "
// <!DOCTYPE html>
// <html>
// <head>
 
  
  
//     <title>Document</title>
// </head>
// <body>
//     <h1>Welcom sanish</h1>
// </body>
// </html>"; -->
        



<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html> -->



<!-- sir -->

<?php

$to = "thapasamundra73@gmail.com";
$subject = "hessooo";
$message = "this is message";

if(mail($to ,$subject ,$message)){
    echo "sent";

}else{
    echo "not sent";
}

?>