<!DOCTYPE html>
<html>
<head>
	 

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

.main{
	max-width: 1460px;
	margin: auto;
}


/*form{
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
}*/



/*input
{
	height: 45px;

}*/

/*form .submit{
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
}*/



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
 
 .img{
 	height:20px;
 	width: 20px;
 }



	</style>
	<title></title>
</head>
<body>

	<header>
		<div class="main">
			<ul>

				 
				<li><a href="../logins/search.php">Search</a></li>
				 
				<li><a href="../logins/admin.php">Logout</a></li>
			</ul>
		</div>
	</header>
	

	<div class="contact-title">
		<h1>Customers Detail</h1><br>
	</div>

	<table border="1" style="border-collapse: collapse;height: 50px;" align="center">
	<thead style="background-color: #ff5772">
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Destination</th>
		<th>Person</th>
		<th>Price</th>
		<th>Reservedate</th>
		<th>Action s</th>
	</thead>

	


<?php
	$server= "localhost";
	$username= "root";
	$password="";
	$dbname= "jack";
	$conn= mysqli_connect($server, $username, $password, $dbname);
	$sql= "SELECT * FROM twinkle";
	$query= mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($query)>0)
	{
		while ($rows= mysqli_fetch_assoc($query))
		{
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
			echo '<td><a href="delete.php?id='.$rows['id'].'"><img src="deleteimg.png" class="img"></a>
			<a href="change.php?id='.$rows['id'].'"><img src="content.png" class="img"></a> <a href="../pdf.php?id='.$rows['id'].'"><img src="pdfimg.png" class="img"></a></td>';
		
		}

	}
	echo '</tr>';
?>

</table>
</body>
</html>
