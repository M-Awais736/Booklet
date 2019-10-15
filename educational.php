<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Educational</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<?php 
session_start ();
?>
<div id="header-wrapper" class="container-fluid">
	<div id="header" class="container-fluid">
		<div id="logo">
			<h1><img src="images/Logo.png"></h1>
		</div>
		<strong>
		<div id="menu">
		<nav class="navbar navbar-inverse" style="background:transparent">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php" accesskey="1" title="">Homepage</a></li>
             <li><?php if(isset($_SESSION['login'])){ ?>
  <a href="logout.php" accesskey="2">logout</a>
<?php }else{ ?>
  <a href="login.php" accesskey="2">login</a>
<?php } ?>
</li>
                    <li class="dropdown">
   <a href="#">Books</a>
   <div class="dropdown-content" >
  <ul class="dropdown-menu" style="background:#000">
    <a href="novel.php">Novels</a>
    <a href="action.php">Action/Thriller</a>
    <a href="educational.php">Educational</a>
  </ul>
  </div>
 </li>
				<li><a href="Signup.php" accesskey="4" title="">SignUp</a></li>
				<li><a href="contact.php" accesskey="5" title="">Contact Us</a></li>
			</ul>
           </div>
            </nav>
		</div>
		</strong>
	</div>
    </div>
     <div class="container-fluid">
<center>
  <br>

 <h2>Educational Books</h2></center>
   <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/Life.PNG" alt="MUHAMMAD PBUH his life based on the earliest sources">
        <p><strong>MUHAMMAD PBUH his life based on the earliest sources</strong></p>
          <p><a href="novel/Muhammad_%20His%20Life%20Based%20on%20the%20Earliest%20Sources%20(%20PDFDrive.com%20).pdf" download ><button class="button">Download</button></a></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/lifelife.PNG" alt="Life of Muhammad PBUH">
        <p><strong>Life of Muhammad PBUH</strong></p>
        <p><a href="novel/muhammadbyhaykal.pdf" download><button class="button">Download</button></a></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/lang.PNG" alt="The Language of Law School">
        <p><strong>The Language of Law School</strong></p>
        <p><a href="novel/Learning%20to%20%E2%80%9CThink%20Like%20a%20Lawyer%E2%80%9D%20(%20PDFDrive.com%20).pdf" download><button class="button">Download</button></a></p>
      </div>
    </div>
  </div>
    </div>
  
</body>

</html>
