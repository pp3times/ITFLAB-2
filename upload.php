<?php
	$conn = mysqli_connect('itflabsql.mysql.database.azure.com', 'thetimes@itflabsql', 'PooMlmp99', 'itflab');

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$comment = $_POST['comment'];
	$tel = $_POST['tel'];
	$id = $_POST['id'];

	$sql = 'UPDATE guestbook SET name = "'.$name.'", mail = "'.$mail.'",password = "'.$password.'", comment = "'.$comment.'", tel = "'.$tel.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update user data | pages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
	<style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
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
								?>
							<div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Update success!</p>
      </div>
							<script>
			   window.location.replace("show.php");
		   </script>
							<?php
							}
							elseif(mysqli_query($conn)){
								echo "FAILED TO load db";
							}
							else 
								if(mysqli_query($sql)){
									echo "Fail to load sql";
							}
						?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

