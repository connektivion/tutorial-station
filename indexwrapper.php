<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><!--same as other wrapper-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Home</title>
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
		function forums(name){
			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}
			else{
				xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4&&xmlhttp.status==200){
					//document.getElementById(name).value=xmlhttp.responseText;
					document.getElementById('forums').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','forums.php?catid=',true);
			xmlhttp.send();
			
		}
		
	</script>
	<style type="text/css">
		body>div.container-fluid>div.row{
			height: 51px;
		}

		.navbar-default .navbar-nav>li>a {
			color: #434443;
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
	/*	ul.woodens>li{
			//background-image: url(./images/images.jpg);
			//background-size: contain;
			height: 49px;
			  margin-top: -20px;
		}
		
		.woodens{
				padding-left: 0px;
			 	 list-style-type: none;
			    margin-left: -15px;
			}*/
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
		</style>


		
	</head>

	<body>
		<div class="container-fluid row">
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
										Login/Register
									</a>
								</li>
								<li class="current"><a href="courses.php">Courses</a></li>
								<li><a href="gate.php">Gate</a></li>
								<li><a href="#" onclick=forums();>Forum </a></li>
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
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/dew.png" alt="Learn">
							<div class="carousel-caption">
								LEARN
							</div>
						</div>
						<div class="item">
							<img src="images/home_14.jpg" alt="Play">
							<div class="carousel-caption">
								PLAY
							</div>
						</div>
						...
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<div class="jumbotron">
					<h1>Tutorial Station</h1>
					<p></p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>

			</div>

			<div class="col-md-3 offset-1 pull-right">
				

			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-8 " id="forums">


			</div>
		</div>


		<!-- Modal -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">
							
							<div class="row">
								<div class="">
									<div class="col-md-3">
										LOGIN
									</div>
									<div class="col-md-3 pull-right">
										REGISTER
									</div>
								</div>
							</div>
						</h4>
					</div>
					<div class="modal-body">


						<div class="row">
							<div class="">
								<div class="col-md-4">
									<form method="POST" action="check1.php">
										Username:<input type="text" name="username"><br>
										Password:<input type="password" name="password"><br>

										<input type="submit" class="btn btn-success" value="login">
									</form>
								</div>
								<div class="col-md-4 pull-right">
									<form method="POST" action="register.php">
										Username: <input type="text" name="username"><br>
										Phone: &nbsp<input type="text" name="phone"><br>
										
										Firstname:<input type="text" name="firstname"><br>
										Lastname:<input type="text" name="lastname"><br>
										email: <input type="text" name="email"><br>
										Password: &nbsp<input type="password" name="password"><br>
										RePassword:<input type="password" name="repassword"><br>
										<input type="submit" class="btn btn-primary" value="Register">
									</form>
									
								</div>
							</div>
						</div>


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
