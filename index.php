<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
$base_url = "$protocol://{$_SERVER['HTTP_HOST']}/accountsystem/";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account manager system</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script>
        var base_url = '<?php echo $base_url ?>';
    </script>
    <style>
        body {
            background: url('<?php echo $base_url ?>img/background.jpg');
        }
    </style>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Account manager system</a>

        </div>
    </nav> -->
    <div class="container mt-5">

        <div class="row mt-5">
            <div class="col-md-4">
                &nbsp;
            </div>
            <div class="col-md-4" align="center">
                <div class="row mb-3" align="center">
                    <div style="border: 2px solid black;">
                    <h2 style="color: white;">Account manager system</h2>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3" align="center">
                            <h3>Login</h3>
                        </div>
                        <div class="mb-3 row">
                            <label for="Username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Username" value=""/>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="Password">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12" align="right">
                                <button type="button" onclick="checkLogin()" class="btn btn-success">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                &nbsp;
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                &nbsp;
            </div>
            <div class="col-md-4" align="right">

            </div>
            <div class="col-md-4">
                &nbsp;
            </div>
        </div>

    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="./js/login.js"></script>

</html>