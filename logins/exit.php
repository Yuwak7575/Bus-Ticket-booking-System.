 <?php include '../dbconnect.php';?>
<?php

session_start();

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
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


  // $sql="SELECT * FROM rio WHERE name='$name' AND contact='$contact' LIMIT 1";

//   $query=mysqli_query($conn,$sql);

//   $result=mysqli_fetch_assoc($query);

// if($query){  
// if(isset($_POST['submit']))

  $sql = "INSERT INTO twinkle(name,email,address,contact,destination,person,price,reservedate) VALUES ('$name', 'olduser','olduser','$contact' ,'$destination','$person','$price','$reservedate')";
  $query=mysqli_query($conn,$sql);

}
  
  

 // if($result['name']==NULL)
 //   {
 // echo "<script>";
 //         echo "alert('Your package has been booked !! Thank You !!');";
 //         echo "window.location.replace('../index.html');";
 //         echo "</script>";
  

        
 //   }

 //   else{
 //     echo "<script>";
 //         echo "alert('Username or contact is incorrect !! Please check !! Else fill the new user form');";
 //         echo "window.location.replace('user.php');";
 //         echo "</script>";

 //   }








  // $sql1 = "SELECT id FROM rio WHERE name='$name' and email='$email'";
  // $query1=mysqli_query($conn,$sql);
  // echo $sql1;

  // if($query){
     // echo "<script>";
   //         echo "alert('Please upload the photo as mentioned');";
   //         echo "window.location.replace('notice.php');";
   //        echo "</script>";
  // }
  // else
  // {
  //  echo "<script>";
 //         echo "alert('Please fill the form correctly');";
 //         echo "window.location.replace('signinn.php');";
 //         echo "</script>";
  // }

//<?php

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
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(mountain.jpg); 
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

  <form action="exit.php?pop" class="form-container">
    <h1>Detail With Price</h1>

    <label for="email"><b> Your Destination</b></label>
    <input type="text" name="destination" readonly="" value="<?php echo $destination;?>">

    <label for="date"><b>Reserve Date</b></label> 
    <input type="text" name="reservedate" readonly="" value="<?php echo $reservedate;?>">


    <label for="person"><b> No of Person</b></label>
    <input type="text" name="num_people" readonly="" value="<?php echo $person;?>">


    <label for="price"><b>Total Ticket Price</b></label> 
    <input type="text" name="price" readonly="" value="<?php echo $price;?>">



  <a href="../index.html"><input readonly="" onclick="myFun();"  class="btn"  value="ok"></a>

  <a href="user.php"><input readonly="" class="btn" value="Cancel"></a>


  </form>
<h3>
<strong style="color: white;">Note:</strong>
  <p style="color: white;">!! Press ok inorder to confirm your booking !! </p>
</h3>

</center>


</body>
</html>
 <script type="text/javascript">
   
   function myFun(){
    alert("Your ticket has been booked successfully !! Thank You !!");
    location.replace("../index.html");
   }
 </script>
 