
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"></h1>
                                    </div>
                                    <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                    <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <input name="oldpswd" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Current Password">
                                        </div>
                                        <div class="form-group">
                                            <input name="newpswd" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter new Password">
                                        </div>
                                        <div class="form-group">
                                            <input name="conpswd" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirm new Password">
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block" name="submit" value="submit" type="submit">
                                            Submit
                                        </button>
                                        <hr>
                                    </form>
                                 
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Back to home</a>
                                    </div>
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
<?php
session_start();

include 'conn.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$newe=$_POST['email'];
$old=$_POST['oldpswd'];
if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT * from users WHERE email='$newe'");
    $row = mysqli_fetch_array($result);
    if (($old == $row['password'])&&($_POST['conpswd']==$_POST['newpswd'])) {
        mysqli_query($con, "UPDATE users set password='". $_POST["newpswd"]."' WHERE email='" . $_SESSION["email"] . "'");
        echo "<script type='text/javascript'>alert('Your password has been changed!'); window.location.href = 'userprofile.php';</script>";
    } else
    echo "<script type='text/javascript'>alert('Your password cannot be changed!'); window.location.href = 'userprofile.php';</script>";
}}
?>
