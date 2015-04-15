<?php // to actually inserts all posted data to database
require'connect_db.php';
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['username'];
if(empty($id))
	header('Location: index.php');
else{
	//$str1="";
	$flag=0;
	if(isset($_GET['t'])) //post only category
	{
		$t=$_GET['t'];
		if($t==1)
		{
			if(!empty($_POST['newcat']))
			{	
				//$newid=1;
				$cat=$_POST['newcat'];
				$desc=$_POST['newdesc'];
				$query0="SELECT * FROM `categories` WHERE `name`='$cat'";
				if($query_run=mysql_query($query0))
				{	

					if(mysql_num_rows($query_run)==0)
					{
						$query3="SELECT * FROM `categories` WHERE 1 order by `categories`.`id` desc";
						if($var=mysql_fetch_assoc(mysql_query($query3)))
							$newid=$var['id']+1;
						$query1="INSERT INTO `categories`(`name`, `description`, `uniquename`) VALUES ('$cat','$desc','$cat')";
						mysql_query($query1);
					}
					else 
						{
							if($var=mysql_fetch_assoc(mysql_query($query0)))
							$newid=$var['id'];
					}

				}	
			}
			$flag=1;
			$str1="&catid=".$newid;
		}
		if($t==2) //to post a topic of a given category
		{
			if(!empty($_GET['catid']))
			{
				$cat=$_GET['catid'];
				$topic=$_POST['newtop'];
				{
					if(!empty($topic))
					{
						$query1="INSERT INTO `topics`(`subject`, `cat`, `by`) VALUES ('$topic','$cat','$id')";
						mysql_query($query1);
					}
					$query3="SELECT * FROM `topics` WHERE 1 order by `topics`.`id` desc";
					if($var=mysql_fetch_assoc(mysql_query($query3)))
						$tiqd=$var['id'];
				}
			}
			$str1="&catid=".$cat."&tid=".$tiqd;
		}
		if($t==3) // to post the posts of a given topic and category
		{
			if(!empty($_GET['catid'])&&!empty($_GET['tid']))
			{
				$cat=$_GET['catid'];
				$tid=$_GET['tid'];
				$post=$_POST['newpost'];
				{
					if(!empty($post))
					{
						$query1="INSERT INTO `posts`(`subject`, `cat`, `bywhom`,`posts`) VALUES ('$tid','$cat','$name','$post')";
						mysql_query($query1);
					}
				}
				$str1="&catid=".$cat."&tid=".$tid;
			}
		}
	}
	if($flag==1){
		header('Location: for.php?'.$str1);
	}
	else
		header('Location: for.php?'.$str1);
}

?>