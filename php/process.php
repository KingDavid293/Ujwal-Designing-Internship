


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

<?php
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

?>


<?php
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
