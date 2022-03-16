<?php
include('config/app.php');
include('controller/RegisterController.php');
if(isset($_POST['register_btn']))
{
    $name = validateInput($db->con,$_POST['name']);
    $username = validateInput($db->con,$_POST['username']);
    $email = validateInput($db->con,$_POST['email']);
    $password = validateInput($db->con,$_POST['password']);
    $cpassword = validateInput($db->con,$_POST['cpassword']);

    $register = new RegisterController;

    $result_password = $register->confirmPassword($password, $cpassword);
    if($result_password)
    {
        
    }
    else
    {
        redirect("Password and Confirm Password does not Match :(");
    }
}
?>