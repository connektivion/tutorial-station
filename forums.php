<html>
<head>
	<script type="text/javascript">
	</script>
	<style>
		td{
			max-width: 549px !important;
			word-wrap: break-word
		}
	</style>
</head>


<?php //this contenct wil ajax 
require'connect_db.php';
if(@session_start());
$id=$_SESSION['id'];
if(empty($id))
	header('Location: indexa.php');
else{

	//require 'h1 - copy.php'; //
	if(@$_GET['catid']=="")   //to show categories
	{
		$query1="SELECT * FROM `categories` where 1"; 
		if($query_run1=mysql_query($query1))
		{
			echo'CATEGORIES:<br><div id="forumposts">
			<form method='."POST".' action="post.php?t=1">
				POST A NEW CATEGORY : <input type="text" name="newcat"><br>
				POST ITS DESCRIPTION: <input type="text" name="newdesc">
				<input type="submit" value="post" name="submit">
			</form>
		</div>';	
		echo"<table border class='table' class='table table-striped'>";
		echo"<tr><th>name</th><th>description</th>";
		while($var=mysql_fetch_assoc($query_run1))
		{
			echo"<tr><td> <a href=for.php?catid=".mysql_real_escape_string($var['id'])."&tid=>".$var['name']."</a></td><td>".$var['description']."</td>";
		}
		echo"</table></div>";
	}
	
}
	elseif($_GET['tid']=="")   //to show topics
	{
		$cid=$_GET['catid'];
		$query1="SELECT * FROM `topics` where `cat`='$cid' ORDER BY `topics`.`date` ASC";
		if($query_run1=mysql_query($query1))
		{
			echo"TOPICS<table border class='table table-striped'>";
			echo"<tr><th>topic name</th><th width='166px'>author</th><th width='135px'>date started</th>";
			while($var=mysql_fetch_assoc($query_run1))
			{
				$name=$var['by'];
				$query2="SELECT * FROM `student_info` where `id`='$name'";
				if($query_run2=mysql_query($query2))
				{
					$varaa=mysql_fetch_assoc($query_run2);
					$name=$varaa['username'];
				}
				echo"<tr><td><a href=forums.php?catid=".mysql_real_escape_string($cid)."&tid=".mysql_real_escape_string($var['id']).">".$var['subject']."</a></td><td>".$name."</td><td>".$var['date']."</td>";
			}
			echo"</table>";
		}
		echo'<div id="forumposts">
		<form method='."POST".' action="post.php?t=2&catid='.$cid.'">
			POST A NEW TOPIC: <input type="text" name="newtop">
			<input type="submit" value="post" name="submit">
		</form>
	</div>';
}
	else  //to show posts
	{
		$cid=$_GET['catid'];
		$tid=$_GET['tid'];
		$query1="SELECT * FROM `posts` where `cat`='$cid' and `subject`='$tid'ORDER BY `posts`.`date` ASC";
		if($query_run1=mysql_query($query1))
		{
			echo"POSTS<table border class='table table-striped'>";
			echo"<tr><th>topic name</th><th width='166px'>by</th width='135px'><th>timestamp</th>";
			while($var=mysql_fetch_assoc($query_run1))
			{	
				$name=$var['bywhom'];
				echo"<tr><td>".$var['posts']."</td><td>".$var['bywhom']."</td><td>".$var['date']."</td>";
			}
			echo"</table>";
		}
		echo'<div id="forumposts">
		<form method='."POST".' action="post.php?t=3&catid='.$cid.'&tid='.$tid.'">
			POST A NEW post: <input type="text" name="newpost">
			<input type="submit" value="post" name="submit">
		</form>
	</div>';
}
}
?>