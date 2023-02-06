<?php
@session_start();
include('include/security.php');

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['username'])) {
        if (!empty($username) || !empty($email) || !empty($password)) {
            if (isset($_POST['password']) && $_POST['password'] !== $_POST['confirm_password']) {
                echo "<script type='text/javascript'>alert('The two passwords do not match!'); window.location.href = 'add_admin.php';</script>";
            } else {
                $query = @mysqli_query($con, "SELECT * FROM admins WHERE email='$email' LIMIT 1;");
                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_assoc($query);
                    if ($email == isset($row['email'])) {
                        echo "<script type='text/javascript'>alert('Email already registered as admin!');</script>";
                    }
                } else {
                    $ins = mysqli_query($con, "INSERT INTO admins (adminname,email,password) VALUES('$username','$email','$password')");
                    if ($ins > 0) {
                        echo "<script type='text/javascript'>alert('You are successfully registered.'); window.location.href = 'view_admin.php';</script>";
                    } else {
                        echo "An error in database query";
                    }
                }
            }
        } else {
            echo "All fields are required";
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

    <title>Admin Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'include/sidebar.php'
        ?>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'include/topbar.php'
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container" style="margin-top:50px;">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block "></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Register as Admin</h1>
                                        </div>

                                        <form class="user" method="POST" action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Full name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" required>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" id="password" placeholder="Confirm Password" name="confirm_password" required>
                                                </div>
                                            </div>
                                            <button href="add_admin.php" id="my-submit" class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                                Register</button>
                                            <hr>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <?php
            include 'include/scripts.php'
            ?>

</body>

</html>
