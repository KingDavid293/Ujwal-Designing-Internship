


<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$EmailTo = "arundavid3x3x3@gmail.com";
$Subject = "New Message Received";

// prepare email body text

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, $email);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "test";
}
?>
