<?php
@session_start();
include('include/security.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>view-clubs</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<style>
	.crd
	{height:200px;
	border:2px solid black;
	margin:200px 50px 50px 50px;
	padding:10;

	}
	.intro-link-head{
  display: inline;
  padding: 0.5rem 1rem;
  border: solid;
  color: #31326f;
}
.intro-link-head:hover{
  color: white;
  background-color:#31326f;
}
.intro-link:hover{
  text-decoration: none;
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
                <div class="container-fluid">



    <!-- WORK HERE -->
    <?php
include 'conn.php';
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "select * from club ORDER BY club_id DESC LIMIT $start_from, 20";
$rs_result = mysqli_query ($con,$sql);
?>
       <table class="table">

<thead>
                 <tr>
<th width="20%">Name</th>
<th width="20%">Logo of club</th>
<th width="20%">description</th>
<th width="20%">Link-club</th>




<th colspan=2 width="18%">Action</th>
                 </tr>
             </thead>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>

<tbody>
                 <tr>
                     <td> <?php echo $row["club_name"]; ?> </td>
                     <td><a class="btn btn-outline-danger" href='club_logo/<?php echo $row["club_logo"];?>'>view</a>
                   
                     <td> <?php echo $row["club_info"]; ?> </td>
                     
                     <td> <a href='<?php echo $row["club_link"]; ?>' target="_blank"><?php echo $row["club_link"]; ?></td>


                    <td><a class="btn btn-outline-danger" href='clubdelete.php?key1=<?php echo $row["club_id"]; ?>'>Delete</a>
                      
                    </td>


                 </tr>

</tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>


    <!-- STOP WORK HERE -->



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

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
