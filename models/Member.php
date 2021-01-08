<?php
require('Connect.php');
class Member {
    public $member ;
    public $conn;
    public $database;
    function __construct()
    {
        $this->database = new Connect;
        $this->conn = $this->database->db;
        // var_dump($this->database);
    }
    public function checkLogin($member){
        $username = $member['username'];
        $password = $member['password'];
        $sql = "SELECT * 
                FROM member
                WHERE member.username = '$username'
                AND member.password = '$password'
                ";
        $result = $this->conn->query($sql);
        // return $result->fetch_assoc();
        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }else{
            return false ;
        }
        
    }
}
// $obj = new Member ;
// var_dump($obj);
?>