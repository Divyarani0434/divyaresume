<?php 
//$conn = mysqli_connect("localhost","root","","phpdb");
//remote database connection 
$conn = mysqli_connect("localhost","root","","divya");
if(!$conn){
    echo "not successfull";
	die("Connection error: " . mysqli_connect_error());	
}

?>