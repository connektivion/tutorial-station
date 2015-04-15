<?php
require'connect_db.php';
session_start();
$id=$_SESSION['id']; //to validate if already logged in ..otherwse make user login
if(empty($id))
header('Location: index.php');
require 'courseswrapper.php'; //wrapper
?>