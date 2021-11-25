<?php
//from emails should be created from your domain server
//to email could be any

if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
	$userEmail = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$fromEmail = "no-reply@idenbrid.com";
	$toEmail = "to@idenbrid.com";
	
    $headers = "From: ContactUs: ".$userName." <".$fromEmail.">" . "\r\n"
                . "CC: office@idenbrid.com";
    $body = "User Infotmation"
            ."\n\tName: ". $userName
            ."\n\tEmail: ". $userEmail
            ."\n\tPhone: ". $userEmail
            ."\nUser Message\n\t". $content;
	if(mail($toEmail, $subject, $body, $headers)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>