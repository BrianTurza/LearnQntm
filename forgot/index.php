<?php
require_once('../common.php');
require_once('../includes/connect.php');
session_start();
$errors = [];
if (isset($_POST['reset_password'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    // ensure that the user exists on our system
    $query = "SELECT user_email FROM users WHERE user_email='$email'";
    $results = mysqli_query($db, $query);
  
    if (empty($email)) {
        array_push($errors, $lang['SIGN_UP_ERROR_EMAIL']);
    } else if(mysqli_num_rows($results) <= 0) {
        array_push($errors, $lang['FORGOT_NO_USER']);
    }
    // generate a unique random token of length 100
    $token = bin2hex(random_bytes(50));
  
    if (count($errors) == 0) {
        // store token in the password-reset database table against the user's email
        $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($db, $sql);
    
        // Send email to user with the token in a link they can click on
        $from = "noreply@learnqntm.com";
        $to = $email;
        $subject = "Password reset ( learnqntm.com )";
        $message = "Hi there, click on this ".$address."https://learnqntm.com/forgot/reset.php?token=" . $token . " to reset your password.\nIf it wasn't you who applied reset on this account, please ignore this email and delete it.";
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
  <title><?php echo $lang['PAGE_TITLE'] ?> - Forgot password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/style.css">
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
  
<div class="hold-transition login-page">

  <div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">Learn<b>QNTM</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo $lang['FORGOT_MESSAGE'] ?></p>
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
          <input name="email" type="email" class="form-control" placeholder="<?php echo $lang['SIGN_EMAIL'] ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="reset_password" type="submit" class="btn btn-primary btn-block"><?php echo $lang['LEARN_ENTER'] ?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="text-center mb-3">
        <p></p>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <?php echo $lang['SING_UP_ALREADY_ACCOUNT'] ?> <a href="../login/" class="text-center"><?php echo $lang['SIGN_IN_BUTTON'] ?></a>
      </p>
      <p class="mb-0">
        <a href="../register/" class="text-center"><?php echo $lang['SIGN_IN_REGISTER_LINK'] ?></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div><p align="center" class="mt-5 mb-3 text-muted">©LearnQNTM <script>document.write(new Date().getFullYear());</script> </p>
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
