<?php

require_once('../common.php');
require_once('../includes/connect.php');
//session_set_cookie_params(0, '/', '.pulzar.org');
$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE user_name='$username'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $result = mysqli_fetch_assoc($results); 
        $verify = password_verify($password, $result['user_password']);
        if ($verify == 1) {
            $_SESSION['username_id'] = $result['user_id'];
            $_SESSION['user_email'] = $result['user_email'];
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $result['user_level'];
            $_SESSION['success'] = "You are now logged in";
            $location = $_GET['location'];
            if (isset($_GET['topic_id'])) {
              header('location: '.$address.'web/forum/topic.php?id='.$topic_id);
              exit();
            } else {
              header('location: ../practise');
              exit();
            }
        } else {
          array_push($errors, "Wrong password");
        }
    } else {
      array_push($errors, "Wrong username or password combination");
    }
  }
}
if (isset($_SESSION['username']) and !isset($_GET['topic_id'])) {
  header('location: ../practise');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $lang['PAGE_TITLE'] ?> - Sign in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../vendors/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../vendors/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../vendors/AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <ul class="nav" style="margin-left: 75%; margin-top: 2%">
    <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img data-src="../images/language.png" class="lazy loaded" style="width: 24px; height: 24px;" src="../images/language.png" data-was-processed="true"></a>
          <div class="dropdown-menu show" aria-labelledby="dropdown09">
          <?php if (isset($_GET['lang'])) : ?>
            <a class="dropdown-item<?php echo ($_GET['lang'] == 'en' ? ' active' : '') ?>" href="?lang=en"><span class="flag-icon flag-icon-us"> </span>  English</a>
            <a class="dropdown-item<?php echo ($_GET['lang'] == 'sk' ? ' active' : '') ?>" href="?lang=sk"><span class="flag-icon flag-icon-sk"> </span>  Slovensky</a>
            <a class="dropdown-item<?php echo ($_GET['lang'] == 'cz' ? ' active' : '') ?>" href="?lang=cz"><span class="flag-icon flag-icon-cz"> </span>  Česky</a>
          <?php else : ?>
            <a class="dropdown-item active" href="?lang=en"><span class="flag-icon flag-icon-us"></span>  English</a>
            <a class="dropdown-item" href="?lang=sk"><span class="flag-icon flag-icon-sk"></span>  Slovensky</a>
            <a class="dropdown-item" href="?lang=cz"><span class="flag-icon flag-icon-cz"></span>  Česky</a>
          <?php endif ?>
          </div>
    </li>
  </ul>  
  
<div class="hold-transition login-page">

  <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">Learn<b>Quantum</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo $lang['SIGN_IN_BOX_MESSAGE'] ?></p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="<?php echo $lang['SIGN_USER'] ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="<?php echo $lang['SIGN_PASS'] ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
              <?php echo $lang['SIGN_IN_REMEMBER'] ?>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="login_user" type="submit" class="btn btn-primary btn-block"><?php echo $lang['SIGN_IN_BUTTON'] ?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p> OR </p>
        <a style="background-color: #444;" href="#" class="btn btn-block btn-primary">
          <i class="fab fa-github mr-2"></i> <?php echo $lang['SIGN_IN_GITHUB'] ?>
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="../forgot_password/"><?php echo $lang['SIGN_FORGOT'] ?></a>
      </p>
      <p class="mb-0">
        <a href="../register/" class="text-center"><?php echo $lang['SIGN_IN_REGISTER_LINK'] ?></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div><p align="center" class="mt-5 mb-3 text-muted">©LearnQuantum <script>document.write(new Date().getFullYear());</script> </p>
</div>
<!-- /.login-box -->
</div>



<!-- jQuery -->
<script src="../vendors/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../vendors/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>
</html>
