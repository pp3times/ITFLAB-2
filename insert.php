<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$tel = $_POST['tel'];


$sql = "INSERT INTO guestbook (name , comment , mail, password, tel) VALUES ('$name', '$comment', '$mail', '$password', $tel)";
?>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
<?php
if (mysqli_query($conn, $sql)) {
    ?>
        <div class="container">
	   <div class="alert alert-info">
        Success
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
    </h2>
						<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-sm btn-warning">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

