<!DOCTYPE html>

<!-- Admins -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:5px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        No. of Admins</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        include 'conn.php';
                        $sql="SELECT * FROM admins ORDER BY id";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?>
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-address-book fa-2x text-gray-300"></i>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- users -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        No. of users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM users ORDER BY userid";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
               
                <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Notices</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        include 'conn.php';
                        $sql="SELECT * FROM notice ORDER BY notice_id";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?>
                </div>
                </div>
                <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
               
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Clubs</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM club ORDER BY club_id";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
                
                    <i class="fab fa-wpforms fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Events -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Events</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM event ORDER BY event_id";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-trophy fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Total questions</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM q_and_a ORDER BY id";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
                
                    <i class="fas fa-question fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Approved questions</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM q_and_a WHERE ques_approved='1'";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
                
                    <i class="far fa-check-circle fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-2" style="border-left-color:#31326f;border-left-width:4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Approved answers</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                        include 'conn.php';
                        $sql="SELECT * FROM q_and_a WHERE ans_approved='1'";
                        $result=mysqli_query($con,$sql);
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        ?></div>
                </div>
                <div class="col-auto">
                
                    <i class="fas fa-pen-nib fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

               <!-- Content Row -->

            

                </div>
                </html>