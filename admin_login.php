<?php @session_start();
include('conn.php');

if ($dbconfig) {
//  echo "Datbase Connected";
}
else {
  header('Location: conn.php');
}


if(!empty($_SESSION['username']))
{
  header('Location: admin_index.php');
}

if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($username == '' || $email == '' || $password == '') {
        echo " <div class='alert alert-danger'>Enter email or password</div>";
    } else {
        @session_start();
        include 'conn.php';
        $query = "SELECT * FROM admins WHERE adminname='$username' AND email='$email' AND password='$password'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $row = mysqli_fetch_array($query_run);
            @session_start();
            $_SESSION['username'] = $username;
            echo "<script>location.href='admin_index.php'</script>";
        } else {
            echo " <div class='alert alert-danger'>Your Email or Password is incorrect</div>";
            echo "";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css\sb-admin-2.min.css" rel="stylesheet">
    <style>
        #my-submit{
            background-color:#6b6cb2;
            color:white;
        }
        #my-submit:hover{
            background-color:#31326f;
        }
    </style>
</head>

<body style="background-color:#31326f">
    <nav class="navbar navbar-expand-lg navbar-dark my-bg">
        <a class="navbar-brand" href="index.php">Campus Management</a>
    </nav>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>

                                    <form action="#" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Enter User Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                                        </div>

                                        <button id="my-submit" type="submit" name="login_submit" value="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
