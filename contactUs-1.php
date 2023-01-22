<?php

$link=mysqli_connect("localhost","root","","travel_website") or die("Unable  to connect to the page");


$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['phone'];
$e = $_POST['txt'];



$insert="INSERT INTO  
VALUES('$a $b','$c','$d','$e')";

$result=mysqli_query($link,$insert) or die(mysqli_error($link));

echo "Succesfully Submited Your Account Opening Details";

if(mysqli_error($link)== FALSE)
{
    header('location:Dashboard_mydb.php');
}

?>