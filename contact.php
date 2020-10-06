<?php
  if(isset($_POST)){
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 if(empty($name) || empty($email)|| empty($subject)|| empty($message) ){
		 header('location:index.php?error');

	 }
	 else{
		 $to = "vinuurishii@gmail.com";
		 if(mail($to,$subject,$message,$email)){
			 header("location:index.php?success");
		 }
	 }
  }
  else{
	header('location:index.php');
  }

?>