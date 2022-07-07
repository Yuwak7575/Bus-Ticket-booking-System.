<?php


	$server= "localhost";
	$username= "root";
	$password="";
	$dbname= "jack";
	$conn= mysqli_connect($server, $username, $password, $dbname);


	$name= $_POST['name'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	$destination= $_POST['destination'];
	$person= $_POST['person'];
	$price= $_POST['price'];
	$reservedate= $_POST['reservedate'];
    $id=$_POST['id'];

if($destination=='Dhangadhi')
		$price=1800*$person;

	if($destination=='Butwal')
		$price=1200*$person;

	if($destination=='Pokhara')
		$price=1500*$person;



    if($destination=='Kakarvitta')
    $price=1600*$person;

    
	$sql= "UPDATE twinkle set name='$name', email='$email',address='$address',contact='$contact',destination='$destination',person='$person', price='$price',reservedate='$reservedate' where id=$id";
	echo $sql;
	$query= mysqli_query($conn, $sql);
	if($query)
	{
		header("location:info.php");
	}
	else{
		die("Error");
	}
?>