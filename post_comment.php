<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];

  $insert="INSERT INTO `comments` values('$name','$comment',CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $insert)) {
echo "Data Inserted Successfully"
  /*$row="SELECT `name`, `comment`, `post_time` FROM `comments` where name='$name' and comment='$comment'";
    $result=$conn->query($row);
    if ($result->num_rows > 0) {
     while($rum = $result->fetch_assoc()) 
  {
	  $name=$rum['name'];
	  $comment=$rum['comment'];
      $time=$rum['post_time'];
  ?>
      <div class="comment_div"> 
	    <p class="name">Posted By:<?php echo $name;?></p>
        <p class="comment"><?php echo $comment;?></p>	
	    <p class="time"><?php echo $time;?></p>
	  </div>
  <?php
  }
      }
    else{
        echo "Error";
    }
    }
    else{
         echo "Error";
    }*/
exit;

    }
}

?>