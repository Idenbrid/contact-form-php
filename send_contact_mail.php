<?php
//from emails should be created from your domain server
//to email could be any

if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
	$userEmail = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$fromEmail = "no-reply@idenbrid.com";
	//$toEmail = "to@idenbrid.com";
	$toEmail = "mianhamza7262@gmail.com";
	
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

	//send thank you mail to user
	$subject2 = $_POST["subject"];
	$body2 = "Hi ".$userName.",\nThank you for Contacting Us! We value your participation in our community and rely on your feedback to provide the best possible environment. We'll get back to you soon for further details.\nWe looking forward to hear more from you!\n\nThank you very much.\nRegards Idenbrid Team.";
	$headers2 = "From: Idenbrid Inc: <".$fromEmail.">" . "\r\n";
                //. "CC: office@idenbrid.com";
    
	if(mail($userEmail, "Thank You For Contating Us!", $body2, $headers2)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>