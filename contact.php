<?php 
//$conn = mysqli_connect("localhost","root","","phpdb");
//remote database connection 
$conn = mysqli_connect("localhost","root","","divya");

if(!$conn){
   
	die("Connection error: " . mysqli_connect_error());	
}

else{
   
if(isset($_POST['submit'])){
        session_start();
        $name=$_POST['name'];
        $email=$_POST['email'];
        $choose=$_POST['about'];
        $message=$_POST['message'];
		
		$sql = "insert into contact(name,email,choose,message) value('".$name."', '".$email."', '".$about."','".$message."')";
		$result = mysqli_query($conn, $sql);
		if($result){
        
        $_SESSION['status']="we have Registered you";  
		$_SESSION['status_code']="success";
        header('Location:index.php');

		}
    else{
        $_SESSION['status']="Something went Wrong";  
		$_SESSION['status_code']="error";
        header('Location:index.php');
    }
	}

}

?>