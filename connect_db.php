<?php //basics
if(!(@mysql_connect('localhost','root',''))||!(@mysql_select_db('online')))
{
	echo"we are temporarily down..cant connect";
die();
}
?>