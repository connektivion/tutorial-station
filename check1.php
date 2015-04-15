<?php
//basic form validation
require 'connect_db.php';

session_start();
if($_SESSION['logged']==0)
{
			if(isset($_POST['username']))
			{
				$username=$_POST['username'];
				if(!empty($username))
				{
					if(isset($_POST['password']))
						{
							$password=$_POST['password'];
							if(!empty($password))
							{
								$query1="SELECT * FROM `student_info` WHERE `username`='$username' AND `password`='$password'";
								if($query_run=mysql_query($query1))
								{
									if(mysql_num_rows($query_run)==1)
									{
										$vara=mysql_fetch_assoc($query_run);
										$_SESSION['logged']=1;
										$_SESSION['username']=$vara['username'];
										$_SESSION['firstname']=$vara['firstname'];
										$_SESSION['lastname']=$vara['lastname'];
										$_SESSION['email']=$vara['email'];
										$_SESSION['phone']=$vara['phone'];
										$_SESSION['branch']=$vara['branch'];
										$_SESSION['id']=$vara['id'];
										//echo "ok..you have logged in";
										header('Location: courses.php');

									}else
									{
										echo "Wrong username/password combination" ;
										header('Location: index.php');
									}
								}
							}
							else echo "enter password";
						}	
				}
				else echo "enter username";

			}
		
	
}
else 
header('Location: courses.php');
?>
