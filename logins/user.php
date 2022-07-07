 <!DOCTYPE html>
<html>
<head>
	<title>Loginform</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<header>
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
		</header>
	

	

	<div class="contact-title">
		<h1>Old User Form</h1>
	</div>

<div class="contact-form">
	<form action="exit.php" method="POST">
	<input  style="color: #ff5772;"type="text" name="name" required  minlength=3 maxlength=20 class="form-control" placeholder="Full Name" required>
	<br>

	
	<input  style="color: #ff5772;" type="contact" name="contact" required minlength=6 maxlength=30 class="form-control" placeholder="Contact Num" required>
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


	<input style="color: #ff5772;" type="text" name="person" class="form-control" placeholder="No Of Person" required>
	<br>

	<input style="color: #ff5772;" type="date" name="reservedate" class="form-control" placeholder="select Date" required>
	<br>

<br>
	<input type="submit" class="form-control submit" value="SUBMIT" name="submit">
	<a href="../signins/signinn.php"><input  class="form-control submit" readonly="" value="NEW USER"></a>

<p><h3>NOTE:</h3></p>
	<p><strong>Please enter the numeric values for person</strong></p>
	<p><strong>!! Please click on NEW USER and fill the form if you are new user !!</strong></p>


</form>


</div>
</body>
</html>