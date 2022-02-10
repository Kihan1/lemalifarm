<?php

$connection=mysqli_connect('localhost','root');

mysqli_select_db($connection,"lemali");

$firstName=$_POST['firstName'];
$secondName=$_POST['secondName'];
$message=$_POST['message'];

$query = "INSERT INTO users (firstName,secondName,message) VALUES ('$firstName','$secondName','$message')";

mysqli_query($connection,$query);
if($query)
{
  //echo"Connected successfully";
  $_SESSION['success']="welcome to Admin Page";
  header('Location:contact.php');
}

?>