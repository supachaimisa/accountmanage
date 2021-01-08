<?php
class Login{
    public function createSession($data){
        session_start();
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
        $base_url = "$protocol://{$_SERVER['HTTP_HOST']}/accountsystem/";
        $_SESSION["id"] = $data["id"];
        $_SESSION["fname"] = $data["fname"];
        $_SESSION["lname"] = $data["lname"];
        $_SESSION["permission"] = $data["permission"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["base_url"] = $base_url;
        return true;
    }
    public function logOut(){
        session_start();
        
        return (session_destroy()) ? true : false ;
    }
}
?>