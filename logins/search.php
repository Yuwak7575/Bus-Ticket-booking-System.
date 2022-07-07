<!DOCTYPE html>
<html>
<head>
	<title>Search</title>

	<style>
		body{
	
	margin: 0;
	padding: 0;
	text-align: center;
 	background-size: cover;
	background-position: center;
	font-family:  Century Gothics;
	height: 100vh;


}

.contact-title{
	margin-top: 100px;
	color: #fff;
	text-transform: uppercase;
	transition: all 1s ease-in-out;
}
.contact-title h1{
	font-size: 32px;
	line-height: 10px;

}

form{
	margin-top: 50px;
	transition: all 1s ease-in-out;
}

.form-control{
	width: 600px;
	background: transparent;
	border: none;
	outline: none;
	border-bottom: 1px solid grey;
	color: #fff;
	font-size: 18px;
	margin-bottom: 16px; 
}

.main{
	max-width: 1460px;
	margin: auto;
}


input
{
	height: 45px;

}

form .submit{
	background: #ff5772;
	border-color: transparent;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 2px;
	height: 50px;
	margin-top: 20px;
}

form .submit:hover
{
	background-color: #f44339;
	cursor: pointer;
}



h1{
	color:black;

}


header
{
	height: 70px;
	background-color: #ff5772;
	background-size: cover;
	background-position: center;
}

ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}

ul li{
	display: inline-block;
}

ul li a{
	 text-decoration: none;
	 color: white;
	 padding: 5px 20px;
	 border: 1px solid transparent; 
	 transition: 0.6s ease;
}

ul li a:hover{
	background-color: #fff;
	color: #000;
}


.btn:hover
{
	background-color: black;
	color: white;
	cursor: pointer;
}



	</style>
</head>

<style type="text/css">
	body{
		margin:0px;
		background-image: url(gosa.jpg);
		background-repeat: no-repeat;
		background-size: 100%;
	}
	a{
		font: black;
		padding: 9px;
		font-size: 20px;
		color: black;
	}
	.container{
		height: 500px;
		width: 900px;
		background-color: #ff5772;
		border-radius: 5px;
	}
</style>

<body>
<header>
		<div class="main">
			<ul>

				 
				<li><a href="../signins/info.php">Customers Detail</a></li>
				 
				<li><a href="../logins/admin.php">Logout</a></li>
			</ul>
		</div>
	</header>
	

	<div class="contact-title">
		<h1>Search the Customer</h1>
	</div>
	
	<center>

		<div class="container">

<form method="POST" action="search.php">
	<input type="text" name="key" style="margin-top: 50px;height: 30px;">
	<input type="submit" value="Search" name="search" class="btn" style="height: 30px;">

<br><br>

 <table border="2px" width="50%" style="border-collapse: collapse;height: 50px">
		<thead style="background-color: black;color: white;height: 30px;width:90px">
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Destination</th>
		<th>Person</th>
		<th>Price</th>
		<th>Reservedate</th>
		</thead>

<?php
include "../dbconnect.php";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['search'])){
	searching();
}

function searching(){
global $conn;

$q_string = $_POST['key'];
// echo $q_string;

	$sql="SELECT * FROM twinkle where concat(id,name,email,address,contact,destination,person,price,reservedate) like '%$q_string%'";
	$query=mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0)
		{
			while ($rows=mysqli_fetch_assoc($query)) {
				echo '<tr>';
				echo '<td>'.$rows['id'].'</td>';
				echo '<td>'.$rows['name'].'</td>';	
				echo '<td>'.$rows['email'].'</td>';
				echo '<td>'.$rows['address'].'</td>';
				echo '<td>'.$rows['contact'].'</td>';
				echo '<td>'.$rows['destination'].'</td>';
				echo '<td>'.$rows['person'].'</td>';
				echo '<td>'.$rows['price'].'</td>';
				echo '<td>'.$rows['reservedate'].'</td>';
				echo '</tr>';
			}
		}
}

?>



</table>
</form>

</div>

</center>

</body>
</html>