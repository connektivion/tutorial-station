<?php //really basic
require 'connect_db.php';

session_start();
if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
{
	header('Location: courses.php');
}
$_SESSION['logged']=0;
include'indexwrapper.php';


?>