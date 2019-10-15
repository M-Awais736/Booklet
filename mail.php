<?php
$name=$email=$phone=$message=$human="";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $message = $_POST['message'];
    $to = 'chawais308@gmail.com'; 
    $subject = 'Feedback!';
    $human = $_POST['human'];
			
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail($to,$subject,$message,"From: $email\n")) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>