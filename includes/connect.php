<?PHP
// connect to the database

$db_host = $_ENV['host'];
$db_user = $_ENV['username'];
$db_pass = $_ENV['password'];
$db_name = $_ENV['database'];
$db =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (!$db) {
    die("Connection failed: " . mysqli_error());
} 

?>
