<?php 
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
$completed = FALSE;
$sec = 1;
if (isset($_GET['section'])) { $sec = $_GET['section']; }
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $lang['PAGE_TITLE'] ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../vendors/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../vendors/AdminLTE-master/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css" >

  <link rel="stylesheet" href="../../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/linericon/style.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../../css/simple-sidebar.css">

  <link href="../../vendors/prism.css" rel="stylesheet">

  
  <link rel="stylesheet" href="../../vendors/nice-select/nice-select.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/style-learn.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../css/tools.css">
</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../../includes/navbar.php') ?>
<main class="side-main">
  

<div style="margin-left: 3%" class="container-fluid">
  <a style="margin-top:-3%" class="btn btn-secondary" href="../"><i class="fas fa-undo"></i> <?php echo $lang['BACK'] ?></a>
   <div class="col-md-10">
    <div class="btn-toolbar mb-3 d-flex justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
      <div style="background-color: white" class="btn-group me-2" role="group" aria-label="First group">
      <a href="?section=0" class="btn btn-outline-secondary"><i class="fas fa-info-circle"></i></a>
        <a href="?section=1" class="btn btn-outline-secondary"><i class="fas fa-book"></i></a>
        <a href="?section=2" class="btn btn-outline-secondary"><i class="fas fa-question"></i></a>
        <a href="?section=3" class="btn btn-outline-secondary"><i class="fas fa-book"></i></a>
        <a href="?section=4" class="btn btn-outline-secondary"><i class="fas fa-terminal"></i></a>
      </div>
    </div>
      <div style="width: 100%" class="card card-primary">
        <div style="margin-left: 3%; margin-right: 3%">
            <br>
            <h2> <?php echo $lang['LEARN_CURRIC_INTRO'] ?></h2>
            <hr><br>
            <?php if ($sec == 1 or $sec == 3) : ?>
              <div class="col-9">
            <?php endif ?>
            <?php if ($sec == 0 or !isset($sec)) : ?>
              <?php echo $lang['LEARN_INTRO_TEXT'] ?>
              <br><br>
              <h3><?php echo $lang['LEARN_INTRO_TITLE_PRE'] ?></h3>
                <p style="white-space: pre-wrap;">
<?php echo $lang['LEARN_INTRO_TEXT_PRE'] ?>
                </p>
                <br>
            <?php endif ?>
              <?php if ($sec == 1) : ?>
                <h3><?php echo $lang['LEARN_INTRO_TITLE_EXPL'] ?></h3>
                <p style="white-space: pre-wrap;">
<?php echo $lang['LEARN_INTRO_TEXT_EXPL'] ?>
                </p>
                <br>
                <div class="col-9">
                <img class="quantum-computer" src="https://images.newscientist.com/wp-content/uploads/2020/08/26152459/26-aug_cosmic-rays-quantum-computers.jpg" alt="quantum computer" style="height: 30rem; border-radius: 2%"><br>
                <p class="text-center"><em>Source: IBM.com</em></p>
                </div>
                <p>
                Klasicky bit, skratene bit, predstavuje zAkladnd jednotku informacie. Nado-
bida jednu z diskrétnych hodndét {0,1}. Ak spojime 3 bity, méZeme v nich
uchovat hodnoty napr. 101, 010, atd. Trividlna, ale pre nas délezita skutoé-
nost je, Ze klasicky bit neméZe nadobtidat Ziadne iné hodnoty.

Pod pojmom algoritmus rozumieme kone¢ny deterministicky sled krokov,
ktory riesi dany typ problému.
                </p>
              <?php elseif ($sec == 2) : ?>
                <form action="" method="POST">
                  <?php 
                  include_once('../../includes/tools.php');
                  if (isset($_POST['radio'])) {
                    $ans = quiz('What is quibit ?', array('Basic information quantum computers', 'pankake', 'Classical computer'), 'Basic information quantum computers',  $_POST['radio']);
                  } else {
                    $ans = quiz('What is quibit ?', array('Basic information quantum computers', 'pankake', 'Classical computer'), 'Basic information quantum computers', '');
                  }
                  ?>
                </form>

              <?php elseif ($sec == 3) : ?>

                <h3><?php echo $lang['LEARN_INTRO_TITLE_CLASSIC'] ?></h3>
                <p style="white-space: pre-wrap;">
                  <?php echo $lang['LEARN_INTRO_TEXT_CLASSIC'] ?>
                </p>
              
              <?php elseif ($sec == 4) : ?>

                <h2> <?php echo $lang['LEARN_CURRIC_INTRO'] ?></h2>
                <hr><br>
                <h3><?php echo $lang['LEARN_INTRO_TITLE_CLASSIC'] ?></h3>
                <p style="white-space: pre-wrap;">
                  <?php echo $lang['LEARN_INTRO_TEXT_CLASSIC'] ?>
                </p>
              
              <?php endif ?>           
              </div>
          </div>
        </div>  
      </div>
    </div>
</div>
</main>
<p class="mt-5 mb-3 text-muted text-center">©LearnQuantum <?php echo date("Y") ?></p>
<!-- REQUIRED SCRIPTS -->

<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
  
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>

<script src="../../vendors/nice-select/jquery.nice-select.min.js"></script>

<script>
  $(document).ready(function(){
    $('select').niceSelect();
  });
</script>

<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- AdminLTE App -->
<script src="../../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

<script src="../../js/main.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="../../vendors/AdminLTE-master/plugins/moment/moment.min.js"></script>

<script src='../../vendors/fullcalendar/lib/main.js'></script>
<script src="../../vendors/prism.js"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>
</html>
