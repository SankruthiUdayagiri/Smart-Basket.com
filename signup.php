<?php

session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $Gender = $_POST['gender'];
  $num = $_POST['number'];
  $address = $_POST['add'];
  $gmail = $_POST['email'];
  $password = $_POST['pass'];


if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
  
$query = "insert into form (fname,lname,gender,cnum,address,email,pass)values('$firstname','$lastname','$Gender',' $num',' $address', '$gmail','$password')";
mysqli_query($con,$query);
echo "<script type='text/javascript'>alert('Successfully Register')</script>";
}
else{
  echo"<script type='text/javascript'>alert('please Enter some Valid Information')</script>";
}

}




?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

<div class="signup">
  <h2>Sign Up</h2>
  <form  method="post">
    <label>First Name</label>
    <input type ="text" name ="fname" required>
    <label>Last Name</label>
    <input type ="text" name ="lname" required>
    <label>Gender</label>
    <input type ="text" name ="gender" required>

    <label>Contact Address</label>
    <input type ="tel" name ="number" required>
    <label>Address</label>
    <input type ="text" name ="add" required>
    <label>Email</label>
    <input type ="gmail" name ="email" required>
    <label> Password</label>
    <input type ="password" name ="pass" required>

    <input type ="submit" name ="" value="Submit">
 </form>
</form>
<p>By clicking the Sign Up button, you agree to our<br>
<a href="">Terms and Condition</a> and <a href="#">Policy Privacy
</p>
<p>Already have an account? <a href="login.php">Login Here</a></p>

</div>

</body>
</html>