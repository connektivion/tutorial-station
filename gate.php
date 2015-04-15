<?php //basics
require'connect_db.php';
session_start();
$id=$_SESSION['id'];
if(empty($id))
header('Location: index.php');
require 'gatewrapper.php';
?>