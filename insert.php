<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Name = $_POST['Name'];
$Comment = $_POST['Comment'];
$mail = $_POST['mail'];
$password = $_POST['password'];


$sql = "INSERT INTO guestbook (Name , Comment , mail, password) VALUES ('$Name', '$Comment', '$mail', '$password')";
?>
<?php
if (mysqli_query($conn, $sql)) {
    ?>
        <div class="container">
	   <div class="alert alert-info">
        success 
	   </div>
	</div>
    <?php
  } else {
      	?>
    <div class="container">
	   <div class="alert alert-warning">
        Failed
	   </div>
	</div>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
