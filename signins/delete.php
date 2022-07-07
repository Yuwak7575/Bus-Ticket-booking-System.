<?php 
	$server= "localhost";
	$username= "root";
	$password="";
	$dbname= "jack";
	$conn= mysqli_connect($server, $username, $password, $dbname);

	$id=$_GET['id'];
	$sql="DELETE FROM twinkle where id='$id'";
	$query= mysqli_query($conn, $sql);
	if($query)
	{
		header("location:info.php");
	}
	else 
	{
		die("Error");
	}


 ?>