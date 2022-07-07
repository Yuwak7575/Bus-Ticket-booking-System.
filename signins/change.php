<?php 
	$server= "localhost";
	$username= "root";
	$password="";
	$dbname= "jack";
	$conn= mysqli_connect($server, $username, $password, $dbname);

	$id=$_GET['id'];
	$sql="SELECT * FROM twinkle where id='$id'";
	$query= mysqli_query($conn, $sql);
	$row= mysqli_fetch_assoc($query);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
<style>
	
form{
	margin-top: 90px;
}

.btn:hover
{
	background-color: black;
	cursor: pointer;
	color: white;
}
.btn{

	width: 70px;
	height: 30px;
}


</style>

</head>
<body style="background-image: url(namche.jpg);background-size: cover;background-position: center;">
	<form method="post" action="collect.php">
		<center>

<p><h1>Edit Form</h1></p>

	<fieldset style="width: 500px; height: 500px;background-color: #ff5772;"
	
		<br>
		<table>
			<tr>
			<td><br><br><br>Name:</td>
			<td><br><br><br><input type = "text" name= "name" value="<?php echo $row['name'];?>">
			</td>
		</tr>

		<tr>
			<td><br>Email:</td>
			<td><br><input type = "text" name= "email" value="<?php echo $row['email'];?>">
			</td>
		</tr>

		<tr>
			<td><br>Address:</td>
			<td><br><input type = "text" name= "address" value="<?php echo $row['address'];?>">
			</td>
		</tr>

		<tr>
			<td><br>Contact:</td>
			<td><br><input type = "int" name= "contact" value="<?php echo $row['contact'];?>">
			</td>
		</tr>


		<tr>
			<td><br>Destination:</td>
		
<td><br><select name="destination">
<option style="background-color: lightgreen" ><?php echo $row['destination'];?></option>
  <option value="Dhangadhi">kathmandu To Dhangadhi</option>
  <option value="Butwal">kathmandu To Butwal</option>
  <option value="Pokhara">kathmandu To Pokhara</option>
  <option value="Kakarvitta">kathmandu To Kakarvitta</option>
</select>
</td>

		</tr>




		<tr>
			<td><br>Person:</td>
			<td><br><input type = "int" name= "person" value="<?php echo $row['person'];?>">
			</td>
		</tr>

		<tr>
			<td><br>Price:</td>
			<td><br><input type = "int" name= "price" readonly="" value="<?php echo $row['price'];?>">
			</td>
		</tr>

				<tr>
			<td><br>Reserve date:</td>
			<td><br><input type = "varchar" name= "reservedate" value="<?php echo $row['reservedate'];?>">
			</td>
		</tr>

		<tr>
			<td></td>
		<td>
			<br>
			<input type = "submit" class = "btn" name= "submit" value = "Submit">
		</td>
	</tr>

		<td>
			<input type = "hidden" name= "id" value = "<?php echo $row['id'];?>">
		</td>



		</table>
	</fieldset>
	</center>
</form>

</body>
</html>