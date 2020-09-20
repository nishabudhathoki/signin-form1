<?php
$firstname=$_POST['fname'];
$lastname =$_POST['lname'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];

	

	//creation connection//
	$con= mysqli_connect("localhost","root","","nisha");
	if(!$con){ 
		echo " No connection";
	}else{
	
		$insert="INSERT into login(firstname,lastname,password,gender,email,phone) values('$firstname','$lastname','$password','$gender','$email','$phone')";
		$query=mysqli_query($con,$insert);
		if($query){
			echo("data inserted");
		}else{
			echo("data not interested");
		}
	}
?>
