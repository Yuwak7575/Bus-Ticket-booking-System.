 <?php include '../dbconnect.php';

 // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
 
// require 'C:\xampp\composer\vendor\autoload.php';

?>

<?php

session_start();

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$destination = $_POST['destination'];
	$person = $_POST['person'];
  $reservedate = $_POST['reservedate'];
	$_SESSION['name']=$name;

	if($destination=='Dhangadhi')
		$price=1800*$person;

	if($destination=='Butwal')
		$price=1200*$person;

	if($destination=='Pokhara')
		$price=1500*$person;



    if($destination=='Kakarvitta')
    $price=1600*$person;




	$sql = "INSERT INTO twinkle(name,email,address,contact,destination,person,price,reservedate)VALUES('$name', '$email' ,'$address' ,'$contact' ,'$destination' ,'$person','$price','$reservedate')";
	$query=mysqli_query($conn,$sql);


// MAIL functiION

// Import PHPMailer classes into the global namespace


 

// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//     $mail->isSMTP();                                            // Set mailer to use SMTP
//     $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'sagaepic7@gmail.com';                     // SMTP username
//     $mail->Password   = 'loveuluru';                               // SMTP password
//     $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
//     $mail->Port       = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('sagaepic7@gmail.com');
//     $mail->addAddress($email);     // Add a recipient
//     $mail->addAddress('$name');               // Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     // Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'PACKAGE RESERVED!!';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }












}



?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}




.form-container {
  max-width: 600px;
  padding: 10px;
  max-height: 900px;
  background-color: transparent;
  color: white;

}

body{
  
  margin: 0;
  padding: 0;
  text-align: center;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(chitwan.jpg); 
  background-size: cover;
  background-position: center;
  font-family:  Century Gothics;
  font-size: 20px;


}


.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}



.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  text-align: center;
}




.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

 
<center>

  <form action="notice.php" class="form-container">
    <h1>Detail With Price</h1>

    <label for="email"><b> Your Destination</b></label>
    <input type="text" name="destination" readonly="" value="<?php echo $destination;?>">

     <label for="date"><b> Reserve Date</b></label> 
    <input type="text" name="reservedate" readonly="" value="<?php echo $reservedate;?>">

    <label for="person"><b> No of Person</b></label>
    <input type="text" name="num_people" readonly="" value="<?php echo $person;?>">


    <label for="price"><b>Total Ticket Price</b></label> 
    <input type="text" name="price" readonly="" value="<?php echo $price;?>">



  <a href="../upload.php"><input readonly="" class="btn"  value="Ok"></a>
  <a href="signinn.php"><input readonly="" class="btn" value="Cancel"></a>
  </form>
<h3>
<strong style="color: white;">Note:</strong>
  <p style="color: white;">!! Press ok inorder to confirm your booking !! </p>
</h3>

</center>


</body>
</html>
