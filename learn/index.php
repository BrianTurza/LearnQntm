<?php 
require_once('../common.php');

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: ../login");
}
$completed = FALSE;
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>LearnQuantum</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../vendors/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../vendors/AdminLTE-master/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../vendors/linericon/style.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">

  <link href='../vendors/fullcalendar/lib/main.css' rel='stylesheet' />

  
  <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-learn.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../includes/navbar.php') ?>
<main class="side-main">
<div style="margin-left: 3%" class="container-fluid">
  
   <div class="col-md-10">
      <div style="width: 100%; min-height: 35rem" class="card card-primary">
        <div style="margin-left: 3%; margin-right: 3%">
            <br><h2><?php echo $lang['LEARN_TITLE'] ?></h2>
            <span style="float:right"><strong>Spend time</strong>: 20min</span><br>
            <hr>
           <br>
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link chapter" data-toggle="collapse" href="#collapse1">
                  <i class="fas fa-info-circle"></i> <?php echo $lang['LEARN_CURRIC_INTRO'] ?></a>
                  <a href="intro/"><i style="float:right; margin-top:-2px" class="fas fa-arrow-alt-circle-right fa-2x test"></i></a>
                  <?php if ($completed) : ?>
                    <span style="float:right; color: green"><?php echo $lang['LEARN_COMPLETED'] ?></span> 
                  <?php endif ?>
                </div>
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo $lang['LEARN_DESCRIPTION_INTRO'] ?><br>
                  </div>
                </div>
              </div>
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link chapter" data-toggle="collapse" href="#collapse2">
                  <i class="fas fa-atom"></i> <?php echo $lang['LEARN_CURRIC_QUBIT'] ?></a>
                  <a href="qubits/"><i style="float:right; margin-top:-2px" class="fas fa-arrow-alt-circle-right fa-2x test"></i></a>
                  <?php if ($completed) : ?>
                    <span style="float:right; color: green"><?php echo $lang['LEARN_COMPLETED'] ?></span> 
                  <?php endif ?>
                </div>
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo $lang['LEARN_DESCRIPTION_QUBIT'] ?>
                  </div>
                </div>
              </div>
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link chapter" data-toggle="collapse" href="#collapse3">
                  <i class="fas fa-laptop-code"></i> <?php echo $lang['LEARN_CURRIC_PROG'] ?></a>
                  <a href="programming/"><i style="float:right; margin-top:-2px" class="fas fa-arrow-alt-circle-right fa-2x test"></i></a>
                  <?php if ($completed) : ?>
                    <span style="float:right; color: green"><?php echo $lang['LEARN_COMPLETED'] ?></span> 
                  <?php endif ?>
                </div>
                <div id="collapse3" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo $lang['LEARN_DESCRIPTION_PROG'] ?>
                  </div>
                </div>
              </div>
              <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link chapter" data-toggle="collapse" href="#collapse4">
                  <i class="fas fa-project-diagram"></i> <?php echo $lang['LEARN_CURRIC_ALGO'] ?></a>
                  <a href="quantum-algorithms/"><i style="float:right; margin-top:-2px" class="fas fa-arrow-alt-circle-right fa-2x test"></i></a>
                  <?php if ($completed) : ?>
                    <span style="float:right; color: green"><?php echo $lang['LEARN_COMPLETED'] ?></span> 
                  <?php endif ?>
                </div>
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo $lang['LEARN_DESCRIPTION_ALGO'] ?>
                  </div>
                </div>
              </div>
              <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link chapter" data-toggle="collapse" href="#collapse5">
                  <i class="fas fa-rocket"></i> <?php echo $lang['LEARN_CURRIC_FUTURE'] ?></a>
                  <a href="future/"><i style="float:right; margin-top:-2px" class="fas fa-arrow-alt-circle-right fa-2x test"></i></a>
                  <?php if ($completed) : ?>
                    <span style="float:right; color: green"><?php echo $lang['LEARN_COMPLETED'] ?></span> 
                  <?php endif ?>
                </div>
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo $lang['LEARN_DESCRIPTION_ALGO'] ?>
                  </div>
                </div>
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

<script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
  
<script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>

<script src="../vendors/nice-select/jquery.nice-select.min.js"></script>

<script>
  $(document).ready(function(){
    $('select').niceSelect();
  });
</script>

<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- AdminLTE App -->
<script src="../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

<script src="../js/main.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="../vendors/AdminLTE-master/plugins/moment/moment.min.js"></script>

<script src='../vendors/fullcalendar/lib/main.js'></script>
</body>
</html>
