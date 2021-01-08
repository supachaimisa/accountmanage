
<?php
require('./SetHeader.php');
$typeRequire = isset($_GET['typeRequire']) ? $_GET['typeRequire'] : '';  
$key = isset($_GET['key']) ? $_GET['key'] : '';  
$value = isset($_GET['value']) ? $_GET['value'] : '';  
$option1 = isset($_GET['option1']) ? $_GET['option1'] : '';  
$option2 = isset($_GET['option2']) ? $_GET['option2'] : '';  

$r = new stdClass;
$r->result = false;
switch($_SERVER['REQUEST_METHOD']){
    case 'GET' : 
        if($typeRequire == 'getCustomerCode'){
            require('../models/Customer.php');
            $customer = new Customer;
            $r->result = $customer->getCustomerCode();
        }else if($typeRequire == 'getCustomerType'){
            require('../models/Customer.php');
            $customer = new Customer;
            $r->result = $customer->getCustomerType();
        }else if($typeRequire == 'getCustomerList'){
            require('../models/Customer.php');
            $customer = new Customer;
            $r->result = $customer->getCustomerList();
        }else if($typeRequire == 'getCustomerByCode'){
            require('../models/Customer.php');
            $customer = new Customer;
            $customer_id = $key;
            $r->result = $customer->getCustomerByCode($customer_id);
        }
        break;
    case 'POST' : 
        $input = json_decode(file_get_contents('php://input'), true);
        if($typeRequire == 'checkLogin'){
                require('../models/Member.php');
                $member = new Member;
                $r->result = $member->checkLogin($input);
                if($r->result){
                        require('./Login.php');
                        $start = new Login ;
                        $r->login = $start->createSession($r->result);
                }
        }else if($typeRequire == 'logout'){
                require('./Login.php');
                $stop = new Login ;
                $r->result = $stop->logOut();
        }else if($typeRequire == 'customerInsert'){
                require('../models/Customer.php');
                $customer = new Customer;
                $r->result = $customer->customerInsert($input);
        }else if($typeRequire == 'customerUpdate'){
                require('../models/Customer.php');
                $customer = new Customer;
                $customer_id = $key;
                $r->result = $customer->customerUpdate($input,$customer_id);
        }
        break;
    case 'PUT' : 
        $input = json_decode(file_get_contents('php://input'), true);
        $r->result = 'Method Hello PUT service';
        break;
    case 'DELETE' : 
        $input = json_decode(file_get_contents('php://input'), true);
        $r->result = 'Method Hello DELETE service';
        break;
}
echo json_encode($r,JSON_UNESCAPED_UNICODE);
?>