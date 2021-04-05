<?php 
require_once('../includes/connect.php');
require_once('../common.php');
require_once('../includes/tools.php');


if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../login');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: ../login");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>QuantumLearn</title>

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
  <link rel="stylesheet" href="../css/style-practise.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../includes/navbar.php') ?>
<main class="side-main">
<div style="margin-left: 3%" class="container-fluid">
  <div style="margin-top: -3%">
   <h2><?php echo $lang['PRACTISE_TITLE'] ?></h2>
        <select id='select_difficulty'>
          <option value="0" selected="true"><?php echo $lang['PRACTISE_DIFFICULTY'] ?></option>
          <option value="1"><?php echo $lang['PRACTISE_DIFFICULTY_EASY'] ?></option>
          <option value="2"><?php echo $lang['PRACTISE_DIFFICULTY_MEDIUM'] ?></option>
          <option value="3"><?php echo $lang['PRACTISE_DIFFICULTY_HARD'] ?></option>
        </select><br>
  </div>
   <br><br>
        <div class="row">
          <div style="min-height:170px" class="col-md-6">
<?php

$query = "SELECT * FROM problems";

$result = mysqli_query($db, $query);
$i = 0;
while  ($row =  mysqli_fetch_array($result)){
  $i += 1;
  $problem_cat = $row['problem_cat'];
  $cat = array('Easy', 'Medium', 'Hard');
  echo '
  <div id="'.$cat[$problem_cat - 1].'" class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img style="min-height: 100%" src="../images/q-sample2.jpg" class="card-img" alt="...">
    </div>
    <div style="-ms-flex: 0 0 230px; flex: 0 0 230px;" class="col-md-6">
      <div class="card-body">
        <a href="problem/?id='.$row['problem_id'].'"><h3>'. $row['problem_title'].'</h3></a>
        <p class="card-text">'.substr($row['problem_description'], 0, 128).'...</p>
        <p class="card-text"><small class="text-muted">Created: '.time_elapsed_string($row['problem_date']).'</small></p>
        
      </div>
    </div><span style="margin-left: 80%; margin-top: -220px" class="card-text">'.$lang['PRACTISE_DIFFICULTY'].': '.str_repeat('<i style="color: red" class="fas fa-fire"></i> ', $i + 1).'</span>
  </div>
</div>
  ';
}
mysqli_close($db);
?>
          </div>
          <div class="col-md-4 sidebar-grid">
          <a href="index.php?logout='1'" style="margin-left: 75%; color:#3a414e"><i class="fas fa-sign-out-alt" style="font-size: 16px;"></i> Sign out</a>
            <div style="height:100vh; width: 480px; margin-top: 5%" class="card card-primary">
                <div style="width: 480px" id="calendar"></div>
                <br>
                <h2 style="margin-left: 5%"><?php echo $lang['EVENTS']?></h2>
                </div>
            </div>
          </div>
        </div>
    </div>
</main>

<!-- REQUIRED SCRIPTS -->

<script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
  
<script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>

<script src="../vendors/nice-select/jquery.nice-select.min.js"></script>

<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>

<!-- AdminLTE App -->
<script src="../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

<script src="../js/main.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="../vendors/AdminLTE-master/plugins/moment/moment.min.js"></script>

<script src='../vendors/fullcalendar/lib/main.js'></script>
<script>
$(document).ready(function(){
  $('select').niceSelect();
});
// Select difficulty
$(document).ready(function(){
    $('#select_difficulty').on('change', function() {

      if ( this.value == '0' ) {
        $("#Easy").show();
        $("#Medium").show();
        $("#Hard").show();
      }
      
      if ( this.value == '1')
      {
        $("#Easy").show();
        $("#Medium").hide();
        $("#Hard").hide();
      }
      
       //If yellow is selected, show yellow, hide red and blue.
      if ( this.value == '2')
      {
        $("#Easy").hide();
        $("#Medium").show();
        $("#Hard").hide();
      }
      
      //If blue is selected, show blue hide red and yellow.
      if ( this.value == '3')
      {
        $("#Easy").hide();
        $("#Medium").hide();
        $("#Hard").show();
      }
      
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: '<?php echo date("Y-m-d") ?>',
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'dayGridMonth'
      },
      navLinks: true,
      editable: true,
      selectable: true,
      selectMirror: true,
      nowIndicator: true,
      events: [
        {
          title: 'All Day Event',
          start: '<?php echo date("Y-m") ?>-01',
        },
      ],
    });
    calendar.render();
  });
</script>
</body>
</html>
