<?php //really basics
require 'connect_db.php';
session_start();
$id=$_SESSION['id'];
if(!empty($id))
{

	$username=$_SESSION['username'];
	$email=$_SESSION['email'];
	$phone=$_SESSION['phone'];
	$brannch=$_SESSION['branch'];
	echo "name:".$username."<br>email:".$email."<br>phone:".$phone;
	
}


else header('Location: index.php');
?>
