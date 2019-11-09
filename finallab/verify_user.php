<?php 
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$connect=mysqli_connect('localhost','root','','loginapp');
	if ($connect) {
		echo "we are connected";
	}
	else
	{
		die("connection failed");
	}

	$query="INSERT INTO users(username,password) values ('$username','$password')";
	$result=mysqli_query($connect,$query);
if(!$result)
{
	die('query died');
}
}
 ?>