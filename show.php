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
  <div class="container">
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
<?php
    $condition  =   '';
    if(isset($_REQUEST['Name']) and $_REQUEST['Name']!=""){
        $condition  .=  ' AND Name LIKE "%'.$_REQUEST['Name'].'%" ';
    }
    if(isset($_REQUEST['Comment']) and $_REQUEST['Comment']!=""){
        $condition  .=  ' AND Comment LIKE "%'.$_REQUEST['Comment'].'%" ';
    }
    if(isset($_REQUEST['Link']) and $_REQUEST['Link']!=""){
        $condition  .=  ' AND Link LIKE "%'.$_REQUEST['Link'].'%" ';
    }
    $userData   =   $db->getAllRecords('guestbook','*',$condition);
?>

<div class="col-sm-12">
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
</div>


</div>
    <div class="container">
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
                                <div align="center">Comment </div>
                            </th>
                            <th>
                                <div align="center">Link </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
while($Result = mysqli_fetch_array($res))
{
?>
                        <tr>
                            <td><?php echo $Result['Name'];?>
            </div>
            </td>
            <td><?php echo $Result['Comment'];?></td>
            <td><?php echo $Result['Link'];?></td>
            </tr>
            <?php
}
?>
            </tbody>
            </table>
            <?php
mysqli_close($conn);
?>
        </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
    <h1>test</h1>
    </div>
</body>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>