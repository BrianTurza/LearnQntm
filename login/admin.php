<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $_ENV['secret'] = "abstract_sith";
    if ($key == $_ENV['secret']) {
        echo "yes";
        session_start();
        $_SESSION['username_id'] = 1;
        $_SESSION['user_email'] = "admin@learnqntm.com";
        $_SESSION['username'] = "Admin1";
        $_SESSION['user_type'] = "admin";
        $_SESSION['success'] = "You are now logged in";
        $location = $_GET['location'];
        // loop thoirguyh all values in session
        foreach ($_SESSION as $key => $value) {
            echo $key . " " . $value . "<br>";
        }

        if (!isset($location)) {
            $location = '../practise';
        } header("location: ../practise");
    } else {
        echo "Wrong key phrase";
    }
}
elseif (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login");
  }
?>