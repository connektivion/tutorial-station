<?php //really basic refistration process
require 'connect_db.php';
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['phone'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['repassword']))
{
	$firstname=mysql_real_escape_string($_POST['firstname']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$phone=mysql_real_escape_string($_POST['phone']);
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=($_POST['password']);
	$repassword=($_POST['repassword']);
	if(!empty($firstname)&&!empty($lastname)&&!empty($phone)&&!empty($username)&&!empty($email)&&!empty($password)&&!empty($repassword))
	{
		
		if($password==$repassword)
			{
				$queryc="SELECT * FROM `student_info` WHERE `username`='$username'";
						$query_run=mysql_query($queryc);
								if(mysql_num_rows($query_run)>=1)
									echo "Sorry, user already exists!<br>";
								else 
								{
								$queryi="INSERT INTO `student_info`(`firstname`, `lastname`, `email`, `password`, `phone`, `username`) VALUES ('$firstname','$lastname','$email','$password','$phone','$username')";
								$query_run=mysql_query($queryi);
								header('Location: index.php');
								} 
			}
							else echo "passwords dont match<br>";

						
	}
}	
?>