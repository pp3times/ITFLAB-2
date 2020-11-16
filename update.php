<?php
	$conn = mysqli_connect('itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab');

	$name = $_POST['name'];
    $comment = $_POST['comment'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
	$id = $_POST['id'];

	$sql = 'UPDATE guestbook SET name = "'.$name.'", comment = "'.$comment.'", mail = "'.$mail.'", password = "'.$password'", tel = "'.$tel'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITF LAB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #000;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "EDIT COMPLETED";
							}
							else {
								echo "FAILED TO EDIT";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="show.php" class="btn btn-sm btn-warning">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
