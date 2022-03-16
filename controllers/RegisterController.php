<?php
include('config/app.php');
class RegisterController
{
    private $conn;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }   
    public function registration($name,$username,$email,$password)
    {
        $register_query = "INSERT INTO `Oops`.`users` (`name`, `username`, `email`, `password`, `role_as`) VALUES ('$name', '$username', '$email', '$password');";
        $result = $this->conn->query($register_query);
        return $result;
    } 

    public function confirmPassword($password,$cpassword)
    {
        if($password == $cpassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function isUserExist($email)
    {
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}