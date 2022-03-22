<?php
include('../config/app.php');
include('../controllers/RegisterController.php');
if(isset($_POST['register_btn']))
{
    $name = validateInput($db->conn,$_POST['name']);
    $username = validateInput($db->conn,$_POST['username']);
    $email = validateInput($db->conn,$_POST['email']);
    $password = validateInput($db->conn,$_POST['password']);
    $cpassword = validateInput($db->conn,$_POST['cpassword']);
    // print_r($_POST);
    echo $password.$cpassword;
    $register = new RegisterController;

    $result_password = $register->confirmPassword($password, $cpassword);
    if($result_password)
    {
        echo "Password Match";
    }
    else
    {
        // redirect('status','Password and Confirm Password does not Match','index.php');
        echo "Password Not Match";
    }
}
?>