<?PHP
/*
// connect to the database
  $db_host = "mariadb103.websupport.sk";
  $db_user = "pulzar";
  $db_pass = "Pz#data1479";
  $db_name = "pulzar";
  $db =  mysqli_connect($db_host,$db_user,$db_pass,$db_name, 3313);

  if (!$db) {
      die("Connection failed: " . mysqli_error());
} 
*/
// connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "learnquantum";
$db =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (!$db) {
    die("Connection failed: " . mysqli_error());
}   
?>