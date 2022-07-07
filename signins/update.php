<?php 
	$server= "localhost";
	$username= "root";
	$password="";
	$dbname= "jack";
	$conn= mysqli_connect($server, $username, $password, $dbname);

	$id= $_POST['id'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	$destination= $_POST['destination'];
	$person= $_POST['person'];
	$price= $_POST['price'];
	$reservedate= $_POST['reservedate'];
	print_r($_POST);
	die();

	$sql= "UPDATE twinkle SET name='$name', email='$email', address='$address', contact='$contact', destination='$destination', person='$person' , price='$price' ,'$reservedate'  WHERE id=$id";
 
 echo $sql;
	

	$query =mysqli_query($conn, $sql);
	if($query)
	{
		header("location:info.php");
	}
	else
	{
		die("Error");
	}


?>