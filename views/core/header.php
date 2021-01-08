
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// var_dump($_SESSION);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account manager system</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script defer src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>
    <script defer src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>
    <script defer src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
    <script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<script>
        var base_url = '<?php echo $_SESSION["base_url"]?>';
</script>
<link rel="stylesheet" href="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/vanilla-datatables/dist/vanilla-dataTables.min.css">
<script src="<?php echo $_SESSION["base_url"] ?>plugin/node_modules/vanilla-datatables/dist/vanilla-dataTables.min.js"></script>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="backHome()"><h3>Account manager system</h3> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ข้อมูลสำคัญในระบบ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_SESSION["base_url"]?>views/customer/customer.php">จัดการลูกค้า</a></li>
                            <li><a class="dropdown-item" href="<?php echo $_SESSION["base_url"]?>views/cargo/cargo.php">สินค้า</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">เอกสารพิเศษ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            การเงิน
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_SESSION["base_url"]?>views/invoice/invoice.php">ใบกำกับภาษี</a></li>
                            <li><a class="dropdown-item" href="#">เอกสาร 2</a></li>
                            <li><a class="dropdown-item" href="#">เอกสาร 3</a></li>
                            <li><a class="dropdown-item" href="#">เอกสาร 4</a></li>
                            <li><a class="dropdown-item" href="#">เอกสาร 5</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">เอกสารพิเศษ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            จัดการระบบ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">จัดการตัวเลือกในฟอร์ม</a></li>
                            <li><a class="dropdown-item" href="#">จัดการระบบหลังบ้าน</a></li>
                            <li><a class="dropdown-item" href="#">จัดการระบบหลังบ้าน</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">จัดการระบบหลังบ้าน</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <button type="button" class="btn btn-outline-dark" onclick="btnLogout()">Logout</button>
            </div>
        </div>
    </nav>