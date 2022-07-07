
<?php
$error=array();


if(isset($_POST['submit'])){

	$uname=$_POST['username'];
	$password=$_POST['password'];

	if($uname=='admin' && $password=='admin'){
		 header("location: ../signins/info.php");
		 

	}else{

		echo "<script>";
         echo "alert('Username or password is incorrect please enter the correct password and username');";
         echo "window.location.replace('admin.php');";
         echo "</script>";
	}
}




?>











<!DOCTYPE html>
<html>
<head>
	<title>Loginform</title>
	<link rel="stylesheet" type="text/css" href="astyle.css">
</head>
<body>


<!-- <header>
		<div class="main">
			<ul>

				<li><a href="../index.html">Home</a></li>
				<li><a href="../services/service.html">Services</a></li>
				<li><a href="../gallery/picture.html">Gallery</a></li>
				<li><a href="../abouts/about.html">About</a></li>
				<li><a href="../signins/signinn.php">Signup</a></li>
				<li class="active"><a href="#">Login</a></li>
			</ul>
		</div>
	</header> -->
	

	<div class="contact-title">
		<h1>Admin Form</h1>
	</div>

<div class="contact-form">
	<form method="POST" action="admin.php">
	<input type="text" name="username" class="form-control" placeholder="Name" required>
	<br>

	<input type="password" name="password" class="form-control" placeholder="Password" required>
	<br>

<br>
	<input type="submit" class="form-control submit" value="LOGIN" name='submit'>

</form>

<?php 
if(count($error)>0){
	echo "<p style='color:red'>$error[0]</p>";
}


 ?>
</div>
</body>
</html>