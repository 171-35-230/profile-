<?php
	include('dbconnect.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	$query="INSERT INTO `contacttable`(`id`, `name`, `email`, `phone`, `message`) VALUES (NULL,'$name','$email','$phone','$msg')";
	if (mysqli_query($conn,$query)) {
		header("Location:index.php");
	}else{
		echo "check query";
	}
?>