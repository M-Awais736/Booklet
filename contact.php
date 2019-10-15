<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="comment_style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php 
session_start ();
?>
<?php
$name=$comment='';
if (isset($_POST['submit1']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$name = $_POST['username'];
	$comment = $_POST['comment'];
	// Check connection
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		if ($name=='')
		{
			$name='Required!';
		}
		elseif ($comment=='')
		{
			$email='Required!';
		}
		else
		{
			$sql = "INSERT INTO `comments`(`name`, `comment`) VALUES ('$name','$comment')";
			if ($conn->query($sql) === TRUE)
			{
				echo "Comment Added Successfully.";
			}
			else
			{
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}
	}	
}
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
   <div class="row">
   <div class="col-sm-6">
       <img src="images/conn.gif" width="500px">
   </div>
   <div class="col-sm-6">
    <br>
<h2>Contact Us</h2><br><br>
<form method='post'>
  <textarea id="comment" placeholder="Write Your Comment Here....." name="comment"></textarea>
  <br>
  <input type="text" id="username" name="username" placeholder="Your Name">
  <br>
  <input type="submit" name="submit1" class="button" value="Post Comment">
  </form>

 <div class="card">
  		<div class="card-body">
    		<?php
    			$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "project";
				$conn = new mysqli($servername, $username, $password, $dbname);
    			$sql = "SELECT * FROM comments";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
				{ 
					$i=1; 
					echo "<div class='bd-example'>
						<div class='table-responsive-xl'>
							<table class='table'>
								<thead>
									<tr>
										<th scope='col'>ID</th>
										<th scope='col'>Name</th>
										<th scope='col'>Comment</th>
										<th scope='col'>Post Time</th>
									</tr>
								</thead>
								<tbody>";
				// output data of each row
				while($row = $result->fetch_assoc())
				{
					echo "<tr>";
						echo "<th scope='row'>".$i."</th>";
						echo "<td>".$row["username"]."</td>";
						echo "<td>".$row["comment"]."</td>";
						echo "<td>".$row["CURRENT_TIMESTAMP"]."</td>";
					echo "</tr>";
					$i++;
				}
				echo "</td></tr>";
				echo "</tbody></table>";
			}			
		?>
  		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </div> 
    </div></div>
</body>

</html>