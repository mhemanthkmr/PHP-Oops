<?php
include('../config/app.php');
include('../controllers/RegisterController.php');
// include('../controllers/SessionController.php');
SessionController::start();
if(isset($_POST['register_btn']))
{
    $name = validateInput($db->conn,$_POST['name']);
    $username = validateInput($db->conn,$_POST['username']);
    $email = validateInput($db->conn,$_POST['email']);
    $password = validateInput($db->conn,$_POST['password']);
    $cpassword = validateInput($db->conn,$_POST['cpassword']);
    // print_r($_POST);
    // echo $password.$cpassword;
    $register = new RegisterController;

    $result_password = $register->confirmPassword($password, $cpassword);
    if($result_password)
    {
        $result_user = $register->isUserExist($email);
        if($result_user)
        {
            echo "User EXist ".$email;
        }
        else
        {
            echo "User NOt EXist ".$email;
        }
    }
    else
    {
        redirect('message','Password and Confirm Password does not Match','register.php',1);
        // echo "Password Not Match";
    }
}
?>