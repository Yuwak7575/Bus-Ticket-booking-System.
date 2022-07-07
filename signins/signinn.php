<!DOCTYPE html>
<html>
<head>
	<title>Loginform</title>
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
<header>
		<div class="main">
			<ul>

				<li><a href="../index.html">Home</a></li>
				<li><a href="../services/service.html">Services</a></li>
				<li><a href="../gallery/picture.html">Gallery</a></li>
				<li><a href="../abouts/about.html">About</a></li>
				<li class="active"><a href="#">Signup</a></li>
				<li><a href="../logins/user.php">Login</a></li>
			</ul>
		</div>
	</header>
	

	<div class="contact-title">
		<h1>New User Form</h1>
	</div>

<div class="contact-form">
	 <form action="notice.php" method="POST">
	<input   style="color: #ff5772;"type="text" name="name" required minlength=3 maxlength=20 class="form-control" placeholder="Full Name" required>
	<br>

	<input  style="color: #ff5772;"type="email" name="email" required minlength=7 maxlength=40 class="form-control" placeholder="Your Email" required>
	<br>

	<input  style="color: #ff5772;"type="address" name="address" required minlength=3 maxlength=20 class="form-control" placeholder="Your Address" required>
	<br>

	<input  style="color: #ff5772;"type="text" name="contact" required minlength=6 maxlength=30 class="form-control" placeholder="Contact Num" required>
	<br>

<select style="color: #ff5772;" name="destination" class="form-control"  placeholder="Select Destination" required>
  <option disabled selected value> Select Destination </option>
  <option value="Dhangadhi">kathmandu To Dhangadhi</option>
  <option value="Butwal">kathmandu To Butwal</option>
  <option value="Pokhara">kathmandu To Pokhara</option>
  <option value="Kakarvitta">kathmandu To Kakarvitta</option>
  
</select>
	<br>

	<br>


	<input style="color: #ff5772;" type="int" name="person" class="form-control" placeholder="No Of Person" required>
	<br>

	<input style="color: #ff5772;" type="date" name="reservedate" class="form-control" placeholder="select Date" required>
	<br>

<br>
	<input type="submit" name="submit" class="form-control submit" value="SUBMIT">

	<a href="../logins/user.php"><input class="form-control submit" readonly="" value="OLD USER"></a>

<p><h3>NOTE:</h3></p>
	<p><strong>Please enter the numeric values for person</strong></p>
	<p><strong>!! Please click on OLD USER and fill the form if you are old user !!</strong></p>

</form>
</div>
</body>
</html>