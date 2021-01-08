<?php
require('Connect.php');
class Customer {
    public $Customer ;
    public $conn;
    public $database;
    function __construct()
    {
        $this->database = new Connect;
        $this->conn = $this->database->db;
        // var_dump($this->database);
    }
    public function getCustomerCode(){
        $sql = "SELECT customer.customer_id
                FROM customer 
                ";
        $result = $this->conn->query($sql);
        return count($result->fetch_all()) ;
    }
    public function getCustomerType(){
        $sql = "SELECT *
                FROM customer_type
                ";
        $result = $this->conn->query($sql);
        return $result->fetch_all() ;
    }
    public function getCustomerList(){
        $sql = "SELECT * 
                FROM    customer as cm , 
                        customer_type as ct 
                WHERE   cm.customer_type = ct.customer_type_id
                ";
        $result = $this->conn->query($sql);
        return $result->fetch_all() ;
    }
    public function getCustomerByCode($customer_id){
        $sql = "SELECT * 
                FROM    customer as cm , 
                        customer_type as ct 
                WHERE   cm.customer_type = ct.customer_type_id AND cm.customer_id = '$customer_id'
                ";
        $result = $this->conn->query($sql);
        return $result->fetch_object() ;
    }
    public function customerInsert($data){
        $customer_id = $data['customer_id'];
        $customer_name = $data['customer_name'];
        $customer_type = $data['customer_type'];
        $customer_address = $data['customer_address'];
        $customer_tax_number = $data['customer_tax_number'];
        $customer_email = $data['customer_email'];
        $customer_tel = $data['customer_tel'];
        $sql = "INSERT INTO customer (
                    customer_id, 
                    customer_name, 
                    customer_type, 
                    customer_address, 
                    customer_tax_number, 
                    customer_email, 
                    customer_tel
                )
                VALUES (
                    '$customer_id', 
                    '$customer_name', 
                    '$customer_type',
                    '$customer_address',
                    '$customer_tax_number',
                    '$customer_email', 
                    '$customer_tel'
                    )
                    ";
        return ($this->conn->query($sql)) ? true : $this->conn->error ;
    }
    public function customerUpdate($data,$id){
        $customer_id = $id;
        $customer_name = $data['customer_name'];
        $customer_type = $data['customer_type'];
        $customer_address = $data['customer_address'];
        $customer_tax_number = $data['customer_tax_number'];
        $customer_email = $data['customer_email'];
        $customer_tel = $data['customer_tel'];
        $sql = "UPDATE customer 
                SET customer_name='$customer_name',  
                    customer_type='$customer_type', 
                    customer_address='$customer_address', 
                    customer_tax_number='$customer_tax_number', 
                    customer_email='$customer_email', 
                    customer_tel='$customer_tel'
                WHERE customer_id='$customer_id'
                    ";
        return ($this->conn->query($sql)) ? true : $this->conn->error ;
    }
}
?>