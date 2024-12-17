<?php 

if(isset($_POST['submit'])){
	$mailto = "agst.divya@gmail.com";
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$streetaddress = $_POST['streetaddress'];
	$streetaddress1 = $_POST['streetaddress1'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];


$message = "Student Name:" .$firstname. "/n" . "Middle Name:" .$middlename. "/n" . "Last Name:" .$lastname. "/n" . "Phone:" .$phone. "/n" . "Email:" .$email. "/n" . "Streetaddress:" .$streetaddress. "/n" . "Streetaddress1:" .$streetaddress1. "/n" . "City:" .$city. "/n" . "State" .$state. "/n" . "Postal:" .$postal. "/n" . "Gender:" .$gender. "/n" . "Birth:" .$birth. "/n" . $_POST['message'];

$message2 = "Dear" .$firstname. "/n"
."thank you for contacting us:" . "/n" . $_POST['message'];

$headers = "From:" .$email;
$headers2 = "From:" .$mailto;

$result1 = mail($mailto, $subject, $message, $headers);
$result2 = mail($email, $subject2, $message2, $headers2); 

if($result1 && $result2){
	$success = "Your Message was sent Successfully";
}else{
	$failed = "sorry";
}

}
















?>