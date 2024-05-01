<!-- <?php

$name = $_POST('name');
$email = $_POST('email');
$message = $_POST('message');

// $mailheader = "From:".$name."<".$email.">\r\n

// $recipient = "ask00000000001@gmail.com";

// mail($recipient, $subject, $message, $mailheaders);
// or die("Error!");

// echo"message send";

$conn = new mysqli("localhost", "root","",'contact_form');
if($conn->connect_error){
    die('Connection Failed : '.conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO contact(name, email, message) VALUES(?,?,?)");
    $stmt->bind_param("sss", $name ,$email,$message);  // s - string, i - integer, d - double, b - blob
    $result = $stmt->execute();
    echo "Thank you for contacting us...";
    $stmt->close();
    $conn->close();
}
?> -->

<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "sutharatul421@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@Portfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>