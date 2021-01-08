<?php
class Connect {
    public $db;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "system_account";
        // Create connection
        $this->db = new mysqli($servername, $username, $password, $dbname);
        $this->db->query("SET NAMES 'utf8'"); 
        $this->db->query("SET CHARACTER SET utf8");  
        $this->db->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 
        // Check connection
        if ($this->db->connect_error) {
        die("Connection failed: " . $this->db->connect_error);
        }
    }
}
?>