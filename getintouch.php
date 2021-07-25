<?php

// run only when the submit button is clicked

if(isset($_POST['submit'])){
    // Use trim to remove the white spaces in input fields
    $userName = trim($_POST["name"]);
    $userEmail = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $userMessage = trim($_POST["message"]);

    $myEmail = "lukhanyo@example.com";  // example.com must not be a gmail acount
    $emailFrom = "From: " . $email;
    $message = "You have received an email from ". $userName. ". \n\n". $userMessage; 

    mail($myEmail, $subject, $userMessage, $emailFrom);
    header("Location: contactlukhanyo.php?sentSuccesfully");
}

?>