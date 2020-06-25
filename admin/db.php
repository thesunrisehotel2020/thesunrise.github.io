<?php
$con=mysqli_connect('localhost','root','password','hotel');
if(mysqli_connect_errno()) //this method returns the error number 1045 if password //incorrect
{
	echo "connection fails".mysqli_connect_error(); //this method return the error message
}
?>