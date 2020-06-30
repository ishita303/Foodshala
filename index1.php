<?php

extract($_POST);
$servername="localhost";
$username="root";
$password="";
$dbname="foodshala";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die("Connection failed");

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from signup where unames='".$_POST['uname']."' and pwds='".$_POST['uname']."'");
	if($rs==true)
	{
		include 'home.html';
	}
	else
	{
		echo 'alert("Username or Password does not exist")';
	}
}

?>