<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$password = $_POST['password'];


$sql = "INSERT INTO guestbook (Name , Comment , mail, password) VALUES ('$name', '$comment', '$mail', '$password')";
?>
<?php
if (mysqli_query($conn, $sql)) {
    ?>
        <div class="container">
	   <div class="alert alert-info">
        success <!-- le message a afficher avec un style de bootstrap de success--> 
	   </div>
	</div>
    <?php
  } else {
      	?>
    <div class="container">
	   <div class="alert alert-warning">
        Failed <!--le message-->
	   </div>
	</div>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
