<?php
	$conn = mysqli_connect('itflabsql.mysql.database.azure.com', 'thetimes@itflabsql', 'PooMlmp99', 'itflab');

	$id = $_GET['ID'];

	$sql = 'SELECT * FROM guestbook WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: show.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITF lab</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.box {
			border: 1px solid;
			padding: 10px;
			box-shadow: 5px 10px;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="box shadow">
					<div class="box-body">
						<div class="row">
							<div class="col-6"><center><h1 class="font-weight-light">User edit</h1></center></div>
						</div>
						<form action="upload.php" method="post">
							<input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>mail</label>
								<input type="text" name="mail" value="<?php echo $data['mail']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>password</label>
								<input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Comment</label>
								<textarea name="comment" class="form-control" rows="5" required><?php echo $data['comment']; ?></textarea>
							</div>
							<div class="form-group">
								<label>tel</label>
								<input type="text" name="tel" value="<?php echo $data['tel']; ?>" class="form-control">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-warning my-3 font-weight-bold">SAVE</button>
								<a class="btn btn-sm btn-light my-3" href="show.php">CANCLE</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
