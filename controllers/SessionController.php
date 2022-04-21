<?php
class SessionController
{
    public static function start()
    {
        session_start();
    }
    public static function msg($name,$msg)
    {
        $_SESSION[$name] = $msg;
    }
    public static function head($page)
    {
        header("Location: ".$page);
    }
    public static function unset()
    {
        session_unset();
    }
}