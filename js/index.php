<?php
if(isset($_POST['submit'])){
    $to = "azizsanpui91@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['Email'];
    $subject= $_POST['Messege'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>