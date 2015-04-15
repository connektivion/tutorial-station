<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Forums</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 <link href="images/book-2.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript">
		function loader(name){
			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}
			else{
				xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4&&xmlhttp.status==200){
					//document.getElementById(name).value=xmlhttp.responseText;
					document.getElementById('profileeditor').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','edit.php',true);
			xmlhttp.send();
			
		}
		
	</script>
	<style type="text/css">

		.table-striped>tbody>tr:nth-child(odd) {
			background-color: #7A7A88;
		}
		.table-striped>tbody>tr:nth-child(even) {
			background-color:  #ACACB3;
		}

		button.custom.btn.btn-primary.btn-lg.btn-block>a {
			color: #FDFDFD;
			text-decoration: none;
		}
		.navbar{ 
			// height: 60px;
			color: #fff;
			background: #B29E74;
			background: -moz-linear-gradient(#B29E74, #9D8759);
			background: -o-linear-gradient(#B29E74, #9D8759);
			background: -webkit-linear-gradient(#B29E74, #9D8759);
			border-radius: 0px 0px 0px 0px;
			-moz-border-radius: 0px 0px 0px 0px;
			-webkit-border: 0px 0px 0px 0px;
		}

		body
		{ 
			background: url(./images/board.png) no-repeat;
			color: #000;
		}
		
		.navbar-default .navbar-form {
			border-color:#B29E74;
		}
		.col-md-3{
			padding-left: 0px;
			padding-right: 0px;
		}
		.woodens>li{
			list-style-type: none;
		}
		ul.woodens{
			padding-left: 5px;
		}
		.custom {
			width: 100% !important;
		}
		.navbar{
			border: 0px;
		}

		table.table.table-striped. tbody > tr >th{
			width:151px;
		}
		table.table.table-striped. tbody > tr >th{
			width:134px;
		}
		td{
			max-width: 549px!important;
			word-wrap: break-word
		}

	</style>


	
</head>

<body>
	<div class="container-fluid">
		<div class="row ">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header" style="padding-left:30px !important;">

						<!--<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">   -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_items1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Tutorial Station</a>
					</div>

					<div class="collapse navbar-collapse " id="menu_items1">
						<ul id="menu" class="nav navbar-nav" style="float:right;padding-right:4%">
							<li >
								<a href="#" role="button" data-toggle="modal" data-target="#myModal">
									<div class="limiter">
										<?php //dynamic username
										require 'connect_db.php';
										session_start();
										if((@$_SESSION['id']))
										{
											$id=$_SESSION['id'];
											if(!empty($id))
											{
												echo $_SESSION['username'];
											}
										}
										else 
											header('Location: index.php');
										?>
									</div>
								</a>
							</li>
							<li class=""><a href="courses.php">Courses</a></li>
							<li><a href="gate.php">Gate</a></li>
							<li classs="current"><a href="#">Forum </a></li>
							<form class="navbar-form navbar-left" role="search" method="POST" action="search.php">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search" name="search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</ul>

					</div><!--closecolaapse-->
				</div>
			</nav> 
		</div> 

		<div class="row">

			<div class="col-md-3">

					<?php //dynamic folder contents sidebar
					$dir='mat';
					$arr=array();
					$i=0;
					if($handle=opendir($dir.'/')){
						echo"<ul class='woodens'>";
						while($file=readdir($handle))
						{
							if($file!='.'&&$file!='..')
								
									//if(is_dir($file))

							{
								$arr[$i]=$file;
								
								$str1=preg_replace('/\s+/', '', $arr[$i]);
								
								echo '<li><button role="button" data-toggle="modal" data-target="#'.$str1.'" type="button" class="custom btn btn-primary btn-lg btn-block"><a href="#">'.$file.'</a></button></li><br>';
								$i++;
							}
						}
						
						
						echo "</ul>"	;
					}

					?>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-8 " id="forums">

					<?php
	//require 'h1 - copy.php'; 
	if(@$_GET['catid']=="")  //to diplay categories
	{
		$query1="SELECT * FROM `categories` where 1";
		if($query_run1=mysql_query($query1))
		{
			echo'CATEGORIES:<br>
			<form method='."POST".' action="post.php?t=1">
				POST A NEW CATEGORY : <input type="text" name="newcat"><br>
				POST ITS DESCRIPTION: <input type="text" name="newdesc">
				<input type="submit" value="post" name="submit">
			</form>
			';	
			echo"<table border class='table table-stripe'>";
			echo"<tr><th>name</th><th>description</th>";
			while($var=mysql_fetch_assoc($query_run1))
			{
				echo"<tr><td><a href='for.php?catid=".$var['id']."&tid=>'".$var['name']."</a></td><td>".$var['description']."</td>";
			}
			echo"</table></div>";
		}
		
	}
	elseif(@ $_GET['tid']=="")
	{
		$cid=$_GET['catid'];  //to display categories and forums
		$query0="SELECT * FROM `categories` where `id`='$cid'";
		if($var=mysql_fetch_assoc(mysql_query($query0)))
			$nam=$var['name'];
		$query1="SELECT * FROM `topics` where `cat`='$cid' ORDER BY `topics`.`date` ASC";
		if($query_run1=mysql_query($query1))
		{
			echo $nam." >> TOPICS<table border class='table table-striped'>";
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
				echo"<tr><td><a href=for.php?catid=".mysql_real_escape_string($cid)."&tid=".mysql_real_escape_string($var['id']).">".$var['subject']."</a></td><td>".$name."</td><td>".$var['date']."</td>";
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
	else // to display categoirs>>forums>>posts
	{
		$cid=$_GET['catid'];
		$tid=$_GET['tid'];
		$query0="SELECT * FROM `categories` where `id`='$cid'";
		if($var=mysql_fetch_assoc(mysql_query($query0)))
			$nam=$var['name'];
		$query10="SELECT * FROM `topics` where `id`='$tid'";
		if($varaaa=mysql_fetch_assoc(mysql_query($query10)))
			$name2=$varaaa['subject'];
		$query1="SELECT * FROM `posts` where `cat`='$cid' and `subject`='$tid'ORDER BY `posts`.`date` ASC";
		if($query_run1=mysql_query($query1))
		{
			echo $nam." >> ".$name2." >> POSTS<table border class='table table-striped'>";
			echo"<tr><th>topic name</th><th width='166px'>by</th><th width='135px'>timestamp</th>";
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

?>

































































</div>

</div>
</div>
</div>

<!-- Modal -->
<?php
for($j=0;$j<$i;$j++)
{
	//echo $arr[$j];
	$str1=preg_replace('/\s+/', '', $arr[$j]);
	echo'<div class="modal fade" id="'.$str1.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">';
			$dir1='mat/'.$arr[$j].'/';
										    //echo $dir1."<br>";
			if($handle1=opendir($dir1.'/'))
				{	echo"<ul>";
			while($file1=readdir($handle1))
			{
				
				if($file1!='.'&&$file1!='..')
				{
					$ext = pathinfo($file1, PATHINFO_EXTENSION);
					if($ext!="flv"||$ext!="mpeg4"||$ext!="mpeg"||$ext!="mp4"||$ext!="wvm"||$ext!="3gp")
						echo '<li><a href="'.$dir1.'/'.$file1.'">'.$file1."</a>....(textual)</li>";
					else
						echo '<li><a href="'.$dir1.'/'.$file1.'">'.$file1."</a>....(video)</li>";

				}

			}
			echo"</ul>";
		}
		echo'</div></div></div>';
	}
	?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><?php 
						require 'connect_db.php';

						if(isset($_SESSION['id']))
						{
							$id=$_SESSION['id'];
							if(!empty($id))
							{
								echo $_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href=logout.php>Logout</a>";
							}
						}
						else echo "Home";

						?></h4>
					</div>
					<div class="modal-body">
						<div id="profileeditor" onClick="loader(profileeditor);">view Profile </div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="modal fade" id="pdfviewer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>


		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
	</html>
