<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Action</title>
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

 <h2>Action/Thriller Books</h2></center>
   <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/thriller.PNG" alt="Thriller"><br>
        <p><strong>Thriller</strong></p>
          <p><a href="novel/master-stapnes.pdf" download ><br><button class="button">Download</button></a></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/half.PNG" alt="Half GirlFriend">
        <p><strong>Half GirlFriend</strong></p>
        <p><a href="novel/Half%20Girlfriend%20by%20Chetan%20Bhagat%20(%20PDFDrive.com%20).pdf" download><button class="button">Download</button></a></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/quit.PNG" alt="Quit">
        <p><br><strong>Quit</strong></p>
        <p><a href="novel/Quiet_%20The%20Power%20of%20Introverts%20in%20a%20World%20That%20Can't%20Stop%20Talking%20by%20Susan%20Cain%20(%20PDFDrive.com%20).pdf" download><br><button class="button">Download</button></a></p>
      </div>
    </div>
  </div>
    </div>
  
</body>

</html>
