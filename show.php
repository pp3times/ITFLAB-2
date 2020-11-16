<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ITF - work</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
  
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: rgba(1, 4, 136, 0.9);">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>ITFxBootstrap</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index3.html">Layout</a></li>
          <li><a href="sub-index.html">Cards</a></li>
          <li class="active"><a href="show.php">Table</a></li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <br><br><br><br>

  <!--<form method="post">
    <div class="form-group">
        <label>User Name <span class="text-danger">*</span></label>
        <input type="text" name="Name" id="Name" class="form-control" placeholder="Enter user name" required>
    </div>
    <div class="form-group">
        <label>User Email <span class="text-danger">*</span></label>
        <input type="email" name="Comment" id="Comment" class="form-control" placeholder="Enter user email" required>
    </div>
    <div class="form-group">
        <label>User Phone <span class="text-danger">*</span></label>
        <input type="tel" name="Link" id="Link" class="form-control" placeholder="Enter user phone" required>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>
    </div>
</form>-->

<!--<div class="col-sm-12">
    <h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find User</h5>
    <form method="get">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="Name" id="Name" class="form-control" value="<?php echo isset($_REQUEST['Name'])?$_REQUEST['Name']:''?>" placeholder="Enter user name">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>User Email</label>
                    <input type="email" name="Comment" id="Comment" class="form-control" value="<?php echo isset($_REQUEST['Comment'])?$_REQUEST['Comment']:''?>" placeholder="Enter user email">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>User Phone</label>
                    <input type="tel" class="tel form-control" name="Link" id="Link" x-autocompletetype="tel" value="<?php echo isset($_REQUEST['Link'])?$_REQUEST['Link']:''?>" placeholder="Enter user phone">
                </div>
            </div>
            
            <div class="clearfix"></div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label> </label>
                    <div>
                        <button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</button>
                        <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>-->
    <div class="container" data-aos="zoom-out" data-aos-delay="300">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
                <table class="table table-light my-4 shadow-sm" width="100%">
                    <thead>
                        <tr>
                            <th>
                                <div align="center">Name</div>
                            </th>
                            <th>
                                <div align="center">Mail </div>
                            </th>
                            <th>
                                <div align="center">Tel </div>
                            </th>
                            <th>
                                <div align="center">Comment </div>
                            </th>
                            <th>
                                <div align="center">Edit </div>
                            </th>
                            <th>
                                <div align="center">Delete </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
while($Result = mysqli_fetch_array($res))
{
?>
            <tr>
            <td><?php echo $Result['name'];?></td>
            <td><?php echo $Result['mail'];?></td>
            <td><?php echo $Result['tel'];?></td>
            <td><?php echo $Result['comment'];?></td>
            <td><a class="btn btn-warning editbtn" hred="edit.php">Edit</a></td>
            <td><button type="button" class="btn btn-danger editbtn" >Delete</button></td>
            </tr>
            <?php
}
?>
            </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
            <?php
mysqli_close($conn);
?>
        </div>

    </div>
    </div>


                <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action = "insert.php" method = "post" id="CommentForm" >
       <div class="form-group">
    <label for="exampleInputusername">Username</label>
    <input type="text" class="form-control" name = "name" id="idName" placeholder="Thanawat Jantawong" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" placeholder="xxxxx@example.com" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" required>
<small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
  </div>
 <div class="form-group">
    <label for="rate">Rate us!</label>
<input type="text" name = "comment" id="idComment" class="form-control" name="comment">
<small class="form-text text-muted">
  Tell me ypur opinion about my site.⚡️
</small>
  </div>

<div class="form-group">
    <label for="tel">Tel</label>
<input type="tel" name = "tel" id="idtel" class="form-control" pattern="+[0-9]{4}-[0-9]{3}-[0-9]{4}"
       required>
<small class="form-text text-muted">
  +66xx-xxx-xxxx
</small>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Condition ( beta )</label>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btn-save" id="commentBtn">Add user</button>
      </div>
</form>
    </div>
    </div>
  </div>
</div>
<!-- End -->

<?php
	$conn = mysqli_connect('itflabdb.mysql.database.azure.com', 'thetimes@itflabdb', 'PooMlmp99', 'itflab');

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


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action = "update.php" method = "post" id="CommentForm" >
    <input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
       <div class="form-group">
    <label for="exampleInputusername">Username</label>
    <input type="text" class="form-control" name = "name" value="<?php echo $data['name']; ?>" id="idName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" value="<?php echo $data['mail']; ?>" aria-describedby="emailHelp" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" name="password" value="<?php echo $data['password']; ?>" aria-describedby="passwordHelpBlock" required>
<small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
  </div>
 <div class="form-group">
    <label for="rate">Rate us!</label>
<input type="text" name = "comment" id="idComment" value="<?php echo $data['comment']; ?>" class="form-control" name="comment">
<small class="form-text text-muted">
  Tell me ypur opinion about my site.⚡️
</small>
  </div>

<div class="form-group">
    <label for="tel">Tel</label>
<input type="tel" name = "tel" value="<?php echo $data['tel']; ?>" id="idtel" class="form-control" pattern="+[0-9]{4}-[0-9]{3}-[0-9]{4}"
       required>
<small class="form-text text-muted">
  +66xx-xxx-xxxx
</small>
  </div>

  <div class="modal-footer">
        <a href="shop.php" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btn-save" id="commentBtn">Add user</button>
      </div>
</form>
    </div>
    </div>
  </div>
</div>
<!-- End -->




<script>
$(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editmodal').modal('show');
        });
    });
</script>



</body>




<!--
<script>
const { value: accept } = await Swal.fire({
  title: 'Terms and conditions',
  input: 'checkbox',
  inputValue: 1,
  inputPlaceholder:
    'I agree with the terms and conditions',
  confirmButtonText:
    'Continue&nbsp;<i class="fa fa-arrow-right"></i>',
  inputValidator: (result) => {
    return !result && 'You need to agree with T&C'
  }
})

if (accept) {
  Swal.fire('You agreed with T&C :)')
}
</script>
-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>