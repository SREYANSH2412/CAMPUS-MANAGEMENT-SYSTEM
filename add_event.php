<?php
@session_start();
include 'include/security.php'
?>

<?php
if (isset($_POST['submit'])) {
    $event_name = $_POST['event_name'];
    $council_name = $_POST['council_name'];
    $event_date = $_POST['event_date'];
    $event_link = $_POST['event_link'];
    $event_info = $_POST['event_info'];

    extract($_FILES);
    $images = time() . $image['name'];

    if (empty($event_name)) {
        echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>";
    } else {
        include 'conn.php';
        $location = "event_img/";
        $tmp = $image['tmp_name'];
        move_uploaded_file($tmp, $location . $images);

        $query = "INSERT INTO event (event_name, council_name, event_date, event_link, event_info,event_img) VALUES('$event_name','$council_name','$event_date', '$event_link', '$event_info','$images')";
        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>
    alert('New event has been successfully added.');
    window.location.href = 'view_events.php';
</script>";
        } else {
            echo "error";
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

    <title>Add Event</title>

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
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-lg navbar-dark my-bg">
                    <a class="navbar-brand" href="index.php">Campus Management</a>
                </nav>

                <div class="container" style="margin-top:50px;">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block "></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Add Event</h1>
                                        </div>

                                        <form class="user" method="POST" action="#" enctype="multipart/form-data" name="upload">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" name="event_name" placeholder="Event Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" placeholder="Council Name" name="council_name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" name="event_date" placeholder="Event Date" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" name="event_link" placeholder="Event Link" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="" name="event_info" placeholder="Event Info" required>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <p>Please upload Image</p>
                                                    <input name="image" type="file" id="img">
                                                </div>
                                            </div>
                                            <button href="add_event.php" id="my-submit" class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                                Submit</button>
                                            <hr>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <?php
                include 'include/scripts.php'
                ?>

</body>

</html>
