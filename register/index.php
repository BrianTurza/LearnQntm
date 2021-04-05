<?php 
require_once('../common.php');
require_once('../includes/connect.php');
$errors = array();

if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $hash = ( sha1( rand(1,1000) * rand(1,1000) + 13) );

  if (empty($username)) { array_push($errors, $lang['SIGN_IN_ERROR_USERNAME_REQ']); }
  if (empty($email)) { array_push($errors, $lang['SIGN_UP_ERROR_USER_EXISTS'] ); }
  if (empty($password_1)) { array_push($errors, $lang['SIGN_IN_ERROR_PASS_REQ']); }
  if ($password_1 != $password_2) {
	  array_push($errors, $lang['SIGN_UP_ERROR_PASS_MATCH']);
  }

  // Check if already the same username/email exists
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR user_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, $lang['SIGN_UP_ERROR_USER_EXISTS'] );
    }

    if ($user['email'] === $email) {
      array_push($errors, $lang['SIGN_UP_ERROR_EMAIL_EXISTS']);
    }
  }
  if ($username == "Admin") {
      $user_type = "admin";
  } else {
      $user_type = "user";
  }
  if (count($errors) == 0) {
  	$password = password_hash($password_1, PASSWORD_DEFAULT);
    date_default_timezone_set("Europe/Bratislava");
    $time = date("Y-m-d h:i:sa");
  	$query = "INSERT INTO users (user_name, user_email, user_password, user_level, user_date, user_hash , user_verified) VALUES('$username', '$email', '$password', '$user_type', '$time', '$hash', 0)";
    mysqli_query($db, $query);

    $from = "noreply@learnqntm.com";
    $to = $email;
    $subject = "Account verification ( learnqntm.com )";
    $message = "Hello $username,\nthank you for your registration. In order to activate your account please click on this link here:\nhttps://learnqntm.com/register/verify.php?email=$email&hash=$hash\n (If the link isnt working, copy and paste the url).
If it wasn't you who registered this email, you can ignore it and delete it.";
    $headers = "From:" . $from;
    $mail = mail($to, $subject, $message, $headers);
    if ($mail == TRUE) {
      $msg = $lang['SIGN_UP_MESSAGE_MAIL'];
    } else {
        array_push($errors, $lang['SIGN_UP_ERROR']);
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $lang['PAGE_TITLE'] ?> - Sign up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
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
            <?php else : ?>
              <a class="dropdown-item active" href="?lang=en"><span class="flag-icon flag-icon-us"></span>  English</a>
              <a class="dropdown-item" href="?lang=sk"><span class="flag-icon flag-icon-sk"></span>  Slovensky</a>
            <?php endif ?>
            </div>
      </li>
    </ul> 
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">Learn<b>QNTM</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo $lang['SIGN_UP_BOX_MESSAGE'] ?></p>
      <?php  if (count($errors) > 0) : ?>
        <?php foreach ($errors as $error) : ?>
          <div class="alert alert-danger" role="alert">
          <?php echo $error ?>
          </div>
        <?php endforeach ?>
      <?php  endif ?>
      <?php  if (count($errors) == 0 and isset($msg)) : ?>
          <div class="alert alert-success" role="alert">
          <?php echo $msg ?>
          </div>
      <?php  endif ?>
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
          <input name="email" type="email" class="form-control" placeholder="<?php echo $lang['SIGN_EMAIL'] ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="input-group mb-3">
            <input name="confirm_password" type="password" class="form-control" placeholder="<?php echo $lang['SIGN_CONFIRM_PASS'] ?>" required>
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
              <?php echo $lang['SIGN_UP_REMEMBER'] ?>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="reg_user" style="font-size: 15px" type="submit" class="btn btn-primary btn-block"><?php echo $lang['SIGN_UP_BUTTON'] ?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p> OR </p>
        <a style="background-color: #444;" href="#" class="btn btn-block btn-primary">
          <i class="fab fa-github mr-2"></i> <?php echo $lang['SIGN_UP_GITHUB'] ?>
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <?php echo $lang['SING_UP_ALREADY_ACCOUNT'] ?> <a href="../login/" class="text-center"><?php echo $lang['SIGN_IN_BUTTON'] ?></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div><p align="center" class="mt-5 mb-3 text-muted">©LearnQuantum <script>document.write(new Date().getFullYear());</script> </p>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../vendors/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../vendors/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../vendors/AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>
</html>