<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mhemanthkmr');
define('DB_PASSWORD', 'hemanth123');
define('DB_DATABASE', 'Oops');
define('SITE_URL', 'http://localhost/PHP-Oops/');
include_once('../controllers/SessionController.php');
include_once('DatabaseConnection.php');
$db = new DatabaseConnection;
// $conn = $db->conn;
function baseurl($slug)
{
    echo SITE_URL.$slug;
}
// baseurl('index.php');
function validateInput($dbcon,$input)
{
    return mysqli_real_escape_string($dbcon, $input);
}
function redirect($name,$msg,$page,$value)
{
    $_SESSION[$name] = $msg;
    SessionController::msg('flag', $value);
    SessionController::head(baseurl($page));
}
?>