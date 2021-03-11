<?php 
require_once('../common.php');
require_once('../includes/connect.php');

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
$sec = 1;
if (isset($_GET['section'])) { $sec = $_GET['section']; }
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
  <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css" >

  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../vendors/linericon/style.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../css/simple-sidebar.css">

  <link href="../vendors/prism.css" rel="stylesheet">

  
  <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-learn.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/tools.css">
</head>
<body style="background: #f4f6f9" class="hold-transition sidebar-mini">
  <!-- Navbar -->
<?php require_once('../includes/navbar.php') ?>
<main class="side-main">
  

<div style="margin-left: 3%" class="container-fluid">
<div class="col-md-9">
  <div class="card card-primary">
  <?php
$min_length = 1;
$query = mysqli_real_escape_string($db, $_GET['query']);
$query = htmlspecialchars($query); 

if(strlen($query) >= $min_length){ 
    $raw_results = mysqli_query($db, "SELECT * FROM problems WHERE (`problem_title` LIKE '%".$query."%') OR (`problem_description` LIKE '%".$query."%') ") or die(mysqli_error($db));

    if(mysqli_num_rows($raw_results) > 0){ 

        while($results = mysqli_fetch_array($raw_results)){

            $web = $results['problem_id'];

            echo "<a href='localhost/LearnQuantum/forum/topic.php?id=".$web."'><h3>".$results['problem_title']."</h3></a><br>";

            echo "<p>".$results['problem_description']."</p><hr>";
        }

    } else { 
        $raw_results = mysqli_query($db, "SELECT user_id, user_name FROM users WHERE (`user_name` LIKE '%".$query."%')") or die(mysqli_error($db));
        if(mysqli_num_rows($raw_results) > 0){ 

            while($results = mysqli_fetch_array($raw_results)){
    
                $web = $results['user_id'];
    
                echo "<a href='https://pulzar.org/web/forum/user.php?id=".$web."'><h5>".$results['user_name']."</h5></a><br>";
    
                echo "<p>".$results['topic_description']."</p><hr>";
            } 
        } /*else {
            $raw_results = mysqli_query($db, "SELECT * FROM posts WHERE (`post_content` LIKE '%".$query."%') OR (`post_topic` LIKE '%".$query."%')") or die(mysqli_error($db));
            if(mysqli_num_rows($raw_results) > 0) { 

                while($results = mysqli_fetch_array($raw_results)){
            
                    $web = $results['post_id'];
            
                    echo "<a href='https://pulzar.org/web/forum/topic.php?id=".$web."'><p>".$results['post_content']."</p></a><br><hr>";
                }
            } else {
                echo "No results";
            }
        }*/
    }
} else {
    echo "Minimum length is ".$min_length;
}
?>
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

</body>
</html>