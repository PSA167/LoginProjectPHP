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

            <div class="col-5">
                <div class="card">
                    <!-- <div class="card-header">
                    </div> -->
                    <div class="card-body">
                        <h4 class="class-title">Login</h4>

                        <form method="POST">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            <button type="submit" name="login" class="btn btn-dark float-end">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js" type="text/javascript"></script>

    <?php
session_start();
if (isset($_POST['login'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail != "" && $userPassword != "") {
        if ($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
            echo "<div class=\"w-50 mx-auto mt-5 alert alert-success text-center\">Login Success!</div>";
        } else {
            echo "<div class=\"w-75 mx-auto mt-5 alert alert-warning text-center\">Login Fail... Try Again!</div>";
        }
    } else {
        echo "<div class=\"w-75 mx-auto mt-5 alert alert-warning text-center\">Fill all the input!</div>";
    }
}
?>
</body>
</html>