<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = 'sadasdsad';
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "", "contact-form-php") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO contactus (user_name, user_email, user_phone, subject, message) VALUES ('" . $name. "', '" . $email. "', '" . $phone. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "contact-view.php";
?>