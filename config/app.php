<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mhemanthkmr');
define('DB_PASSWORD', 'hemanth123');
define('DB_DATABASE', 'Oops');
define('SITE_URL', 'http://localhost/PHP-Oops/');
include_once('controllers/SessionController.php');
include_once('DatabaseConnection.php');
$db = new DatabaseConnection;

function baseurl($slug)
{
    echo SITE_URL.$slug;
}
function validateInput($dbcon,$input)
{
    return mysqli_real_escape_string($dbcon, $input);
}
function redirect($name,$msg,$page)
{
    Session::msg($name, $msg);
    Session::head($page);
}
?>