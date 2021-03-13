<?php
$address = 'https://learnqntm.com/';

session_start();
header('Cache-control: private'); // IE 6 FIX

if(isset($_GET['lang'])) {

    $lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;

    //setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}
/* else if(isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} */
else {
    $lang = 'en';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'sk':
  $lang_file = 'lang.sk.php';
  break;
/*
  case 'cz':
  $lang_file = 'lang.cz.php';
  break;
*/
  default:
  $lang_file = 'lang.en.php';

}

include_once 'lang/'.$lang_file;
//include_once $_SERVER['DOCUMENT_ROOT'].'lang/'.$lang_file;
?>