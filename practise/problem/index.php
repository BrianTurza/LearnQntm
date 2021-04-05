<?php 
require_once('../../includes/connect.php');
require_once('../../includes/tools.php');
$address = 'https://learnqntm.com/';
require_once('../../common.php');
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../../login');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: ../../login");
}
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$post_query_result = mysqli_query($db, "SELECT * FROM problems WHERE problem_id='$id'");
$problem = mysqli_fetch_assoc($post_query_result);

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $lang['PAGE_TITLE'] ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $address ?>vendors/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $address ?>vendors/AdminLTE-master/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo $address ?>vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $address ?>vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php echo $address ?>vendors/linericon/style.css">
  <link rel="stylesheet" href="<?php echo $address ?>vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $address ?>vendors/owl-carousel/owl.carousel.min.css">

  <link href='<?php echo $address ?>vendors/fullcalendar/lib/main.css' rel='stylesheet' />

  
  <link rel="stylesheet" href="<?php echo $address ?>vendors/nice-select/nice-select.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $address ?>css/style.css">
  <link rel="stylesheet" href="<?php echo $address ?>css/style-learn.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../../includes/navbar.php') ?>
<main class="side-main">
<div style="margin-left: 3%" class="container-fluid">
  
   <div class="col-md-10">
      <div style="width: 100%; min-height: 35rem" class="card card-primary">
        <div style="margin-left: 3%; margin-right: 3%">
            <br><h2><?php echo $problem['problem_title'] ?></h2>
            <span style="float:right">Posted: <strong><?php echo time_elapsed_string($problem['problem_date']) ?></strong></span><br>
            <hr>
           <br>
            <div class="col-9">
                <p><?php echo $problem['problem_description'] ?></p>
            </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
</div>
</main>


<p class="mt-5 mb-3 text-muted text-center">©LearnQuantum <?php echo date("Y") ?></p>

<!-- REQUIRED SCRIPTS -->

<script src="<?php echo $address ?>vendors/jquery/jquery-3.2.1.min.js"></script>
  
<script src="<?php echo $address ?>vendors/bootstrap/bootstrap.bundle.min.js"></script>

<script src="<?php echo $address ?>vendors/nice-select/jquery.nice-select.min.js"></script>

<script>
  $(document).ready(function(){
    $('select').niceSelect();
  });
</script>

<script src="<?php echo $address ?>vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $address ?>vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

<script src="<?php echo $address ?>js/main.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="<?php echo $address ?>vendors/AdminLTE-master/plugins/moment/moment.min.js"></script>

<script src='<?php echo $address ?>vendors/fullcalendar/lib/main.js'></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>
</html>
