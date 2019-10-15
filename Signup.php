<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp Page</title>
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
<style>
    .error{
        color: #FF0000;
    }
    </style>

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
    
<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	$conn = new mysqli ($servername, $username, $password, $dbname);
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passErr=$instiErr = "";
    
$name = $email = $gender = $insti = $pass = "";
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["password"])) {
    $passErr = "Enter Password";
  } else {
    $pass = test_input($_POST["password"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$pass)) {
      $passErr = "Invalid Password"; 
    }
  }

  if (empty($_POST["insititute"])) {
    $instiErr = "Enter Institute";
  } else {
    $insti = test_input($_POST["insititute"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    $sql = "INSERT INTO `pro`(`Name`, `Email`, `password`, `Institute`,`Gender`) VALUES ('$name','$email','$pass','$insti','$gender')";
			if ($conn->query($sql) === TRUE)
			{
				header("location:login.php");
				
			}
			else
			{
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
}
        			$conn->close();
    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container-fluid">
   <div class="row">
   <div class="col-sm-6">
       <img src="images/sign.gif" width="500px">
   </div>
   <div class="col-sm-6">
<h2>SignUp Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="align-items: center">  
  Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Password: &nbsp; <input type="password" name="password" required>
  <span class="error">* <?php echo $passErr;?></span>
      <br><br>
 Institution: <input type="text" name="insititute" required>
 <span class="error">* <?php echo $instiErr;?></span>
  
  <br><br>
  Gender:
  <input type="radio" name="gender" required>Female
  <input type="radio" name="gender" required>Male
  <input type="radio" name="gender" required>Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
    <input type="submit" name="submit" class="button" value="Submit" a href="login.php">  
</form>
</div>
    </div></div>
</body>

</html>