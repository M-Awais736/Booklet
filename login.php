<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
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
<style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
</head>
<body>
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
    <?php
    session_start ();
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	$conn = new mysqli ($servername, $username, $password, $dbname);
    $emailErr=$passErr='';
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$pass = $_POST['password'];
    if($email=='')
        $emailErr="Enter Your Email";
    else if($pass=='')
       $passErr="Enter Password ";

$res = mysqli_query($conn,"select * from pro where Email='$email' and Password='$pass'");
$result=mysqli_fetch_array($res);
if($result)
{
	$_SESSION["login"]="1";
header("location:index.php");	
}
    else	
{
	header("location:login.php?err=1");
	
}
}
?><div class="container-fluid">
   <div class="row">
   <div class="col-sm-6">
       <img src="images/door.gif">
   </div>
   
   <div class="col-sm-6">
 <h2>Login</h2>
<p><span class="error">* required field</span></p>
<form method="post" style="align-items: center" autocomplete="on"> 
E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" required>
 <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
Password: &nbsp; <input type="password" name="password" required>
     <span class="error">* <?php echo $passErr;?></span>
      <br>
        <br>
    <input type="submit" name="submit" a href="#" class="button" value="Submit">
    <br>
    <?php 
if(isset($_REQUEST["err"]))
	$msg="Invalid username or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>

</p>
  
</form>
</div>
</div>
    </div>
</body>

</html>
