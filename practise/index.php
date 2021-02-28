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
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
main {
  height: 100%;
  margin-top: 12%;
}
#calendar {
    width: 200px;
    margin: 0 auto;
    font-size: 10px;
}
.fc-toolbar {
    font-size: .9em;
}
.fc-toolbar h2 {
    font-size: 12px;
    white-space: normal !important;
}
/* click +2 more for popup */
.fc-more-cell a {
    display: block;
    width: 85%;
    margin: 1px auto 0 auto;
    border-radius: 3px;
    background: grey;
    color: transparent;
    overflow: hidden;
    height: 4px;
}
.fc-more-popover {
    width: 100px;
}
.fc-view-month .fc-event, .fc-view-agendaWeek .fc-event, .fc-content {
    font-size: 0;
    overflow: hidden;
    height: 2px;
}
.fc-view-agendaWeek .fc-event-vert {
    font-size: 0;
    overflow: hidden;
    width: 2px !important;
}
.fc-agenda-axis {
    width: 20px !important;
    font-size: .7em;
}

.fc-button-content {
    padding: 0;
}
.sidebar-grid {
  position: fixed !important;
  margin-top: -7rem;
}
@media (max-width: 767px) {
      .sidebar-grid {
          position: relative !important;
          margin-top: 2rem !important;
      }
      .card{
        width: 300px !important;
        max-width: 300px;
      }
      #calendar {
        max-width: 300px !important;
      }
      .container-fluid {
        margin-top: 7rem !important;
      }

  }
@media (max-width: 991px) {
      .sidebar-grid {
          position: relative !important;
      }
      .card{
        width: 350px !important;
        max-width: 350px !important;
      }
      #calendar {
        max-width: 400px !important;
      }
      .container-fluid {
        margin-top: 7rem !important;
      }

  }
  @media (min-width: 992px) {
      .sidebar-grid {
          height: calc(100% - 50px - 60px);
          position: absolute;
          right: 0;
      }
  }

</style>
</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../includes/navbar.php') ?>
<main class="side-main">
<div style="margin-left: 3%" class="container-fluid">
  <div style="margin-top: -3%">
   <h2><?php echo $lang['PRACTISE_TITLE'] ?></h2>
        <select>
          <option selected data-display="Difficulty"></option>
          <option value="1">Easy</option>
          <option value="2">Medium</option>
          <option value="3">Hard</option>
        </select><br>
  </div>
   <br><br>
        <div class="row">
          <div style="min-height:170px" class="col-md-6">
          <?php for($i = 0; $i < 5; $i++) : ?>
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img style="min-height: 100%" src="../images/q-sample2.jpg" class="card-img" alt="...">
                </div>
                <div style="-ms-flex: 0 0 230px; flex: 0 0 230px;" class="col-md-6">
                  <div class="card-body">
                    <h3>Qubit power series</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    
                  </div>
                </div><span style="margin-left: 80%; margin-top: -220px" class="card-text">Difficulty: <?php echo str_repeat('<i style="color: red" class="fas fa-fire"></i> ', $i + 1)?></span>
              </div>
            </div>
          <?php endfor ?>
          </div>
          <div class="col-md-4 sidebar-grid">
            <div style="height:100vh; width: 480px" class="card card-primary">
                <div style="width: 480px" id="calendar"></div>
                <br>
                <h2 style="margin-left: 5%">New events</h2>
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
<script>

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