<?php
function addrecord(){
$servername="localhost";
$username="root";
$password="";
$dbname="foodshala";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
die("Connection failed");
else
{
$sql="insert into signup(names,emails,pnums,unames,pwds) values('".$_POST['name']."','".$_POST['email']."','".$_POST['pnum']."','".$_POST['uname'])."','".$_POST['pwd']."')";
$conn->query($sql);
$conn->close();
}
}
if(isset($submit))
{
	addrecord();
	include 'home.html';
}
?>