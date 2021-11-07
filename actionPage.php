<?php


if(isset($_POST['submit']))
{
    $name = $_POST['name']; 
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "brianphan17@yahoo.com";
    $headers = "From: ".emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message; 

    mail($mailTo, $subject, $txt, $headers); 
    


}