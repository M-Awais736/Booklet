<?php
   $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	$conn = new mysqli ($servername, $username, $password, $dbname);
   session_start();
   
   $user_check = $_SESSION['Name'];
   
   $ses_sql = mysqli_query("select Name from admin where Name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>