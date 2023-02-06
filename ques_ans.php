<?php
@session_start();
include 'include/security.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Campus Cauldron</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<!-- FOR EVENTS AND FESTS -->



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


        <!-- Topbar Navbar -->
        <?php
        include 'include/topbar.php'
        ?>


        <div class="container-fluid">
          <?php
          $con = mysqli_connect("localhost", "root", "");

          if (!$con) {
            die();
          }

          mysqli_select_db($con, "campus_cauldron");
          if (isset($_GET["page"])) {
            $page = $_GET["page"];
          } else {
            $page = 1;
          };
          $start_from = ($page - 1) * 20;
          $sql = "select * from q_and_a  ORDER BY id DESC LIMIT $start_from, 20";
          $rs_result = mysqli_query($con, $sql);
          ?>
          <table class="table">

            <thead>
              <tr>
                <th width="80">Question</th>
                <th width="20%">Action(Question)</th>




              </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_assoc($rs_result)) {
            ?>

              <tbody>
                <tr>
                  <td> <?php
                        echo "Question " . "- " . " ";
                        echo $row["question"]; ?> </td>
                  <td><a class="btn btn-outline-danger" href='ques_delete.php?key1=<?php echo $row["id"]; ?>'>Delete</a>
                    <a class="btn btn-outline-success" href='ques_approve.php?key1=<?php echo $row["id"]; ?>'>Approve</a>
                  </td>
                </tr>
                <tr>
                  <td><?php
                      echo "Answer " . "- " . " ";
                      echo $row["answer"]; ?></td>
                  <td><a class="btn btn-outline-danger" href='ans_delete.php?key1=<?php echo $row["id"]; ?>'>Delete</a>
                    <a class="btn btn-outline-success" href='ans_approve.php?key1=<?php echo $row["id"]; ?>'>Approve</a>
                  </td>
                </tr>
              </tbody>

            <?php
            };
            ?>
          </table>
          <strong>Pages </strong>

          <?php
          $sql = "SELECT COUNT(question) FROM q_and_a";
          $rs_result = mysqli_query($con, $sql);
          $row = mysqli_fetch_row($rs_result);
          $total_records = $row[0];
          $total_pages = ceil($total_records / 20);
          for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='viewuser.php?page=" . $i . "' class='navigation_item selected_navigation_item'>" . $i . "</a> ";
          };
          ?>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->


        <?php
        include 'include/scripts.php'
        ?>
</body>



</html>