<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css">
</head>
<body class="bg-info">

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="w-75 mb-3 text-center mt-2">
                    <a href="login.php">
                        <button class="btn btn-primary w-100">Login</button>
                    </a>
                </div>
                <div class="w-75 mb-3 text-center">
                    <a href="index.php">
                        <button class="btn btn-success w-100">Register</button>
                    </a>
                </div>
                <div class="w-75 mb-3 text-center">
                    <a href="logout.php">
                        <button class="btn btn-danger w-100">Logout</button>
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="alert alert-success">Logout Success!</div>
            </div>
        </div>
    </div>


    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js" type="text/javascript"></script>

    <?php
session_start();

session_destroy();
?>
</body>
</html>

<!-- Psa123&&& -->