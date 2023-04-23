<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: ../index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OSP | HOME</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <?php
            include 'dbcon.php';
            $id=$_SESSION['id'];
            $emailsearch= " SELECT * FROM signup WHERE id='$id' ";
            $query = mysqli_query($con,$emailsearch);
            $emailcount = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
    ?>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center  text-osp">
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="civil.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="civil.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo $row['image']?>" alt="image"style="object-fit:cover;">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $row['username'] ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-3 text-primary"></i> Signout </a>
              </div>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo $row['image'];  ?>" alt="profile"style="object-fit:cover;">
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2 text-wrap mt-2"><?php echo $row['username'] ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="profileupdate.php">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="civil.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newevents.php">
                <span class="menu-title">New Events</span>
                <i class="mdi mdi-calendar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ceer.php">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orce.php">
                <span class="menu-title">Online Resources</span>
                <i class="mdi mdi-information menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="assignment.php">
                <span class="menu-title">Assignment</span>
                <i class="mdi mdi-library-books menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Online Test</span>
                <i class="mdi mdi-laptop menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="qbce.php">
                <span class="menu-title">Query Board</span>
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="timetable.php">
                <span class="menu-title">Time Table</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="curriculum.php">
                <span class="menu-title">Curriculum Search</span>
                <i class="mdi mdi-file-find menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faculty.php">
                <span class="menu-title">Faculty</span>
                <i class="mdi mdi-human-male-female menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <?php   
          $query = "SELECT id FROM signup ORDER BY id";  
          $query_run = mysqli_query($con, $query);
          $data = mysqli_num_rows($query_run); 
          $query = "SELECT id FROM teacher ORDER BY id";  
          $query_run = mysqli_query($con, $query);
          $data1 = mysqli_num_rows($query_run);
          ?>
        <div class="main-panel">
            <div class="content-wrapper">  
              <div class="row">
                <div class="card mx-auto" style="height:400px;width:80%;margin-top: 10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='1'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='1' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-hover' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
                <div class="card mt-4 mx-auto" style="height:410px;width:80%;margin-top :10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='2'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='2' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-striped' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
                <div class="card mt-4 mx-auto" style="height:400px;width:80%;margin-top :10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='3'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='3' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-striped' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
                <div class="card mt-4 mx-auto" style="height:460px;width:80%;margin-top :10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='4'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='4' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-striped' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
                <div class="card mt-4 mx-auto" style="height:400px;width:80%;margin-top :10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='5'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='5' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-striped' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a class='text-dark'href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
                <div class="card mt-4 mx-auto" style="height:400px;width:80%;margin-top :10px;margin-left:20px;">
                      <?php
                        include("header.php");
                        include("dbcon.php");
                        extract($_GET);
                        $rs1=mysqli_query($con,"select * from mst_subject where sub_id='6'");
                        $row1=mysqli_fetch_array($rs1);
                        echo "<h3 align=center style='padding:15px;background-color:#198ae3'><font color=white> $row1[1]</font></h3>";
                        $rs=mysqli_query($con,"select * from mst_test where sub_id='6' AND branch='CIVIL' ");
                        if(mysqli_num_rows($rs)<1)
                        {
                          echo "<br><br><h2 class=head1 > No Quiz for this Subject </h2>";
                          exit;
                        }
                        echo "<h4 class=head1  style='color:#233A74;text-align:center;font-size:15px;padding:5px;'>Select Subject Name to Start TEST</h4>";
                        echo "<table class='table table-striped' style='padding:0;width:100%;height:250px;margin-left:0%; font-size:15px;'>";

                        while($row=mysqli_fetch_row($rs))
                        {
                         echo "<tr ><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=2>$row[2]</font></a>";
                        }
                       echo "</table>";
                      ?>
                </div> 
              </div>          
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="../assets/js/jquery.newsTicker.js"></script>
    <script>var nt_example1 = $('#nt-example1').newsTicker({
    row_height: 100,
    max_rows: 3,
    duration: 3000,
    prevButton: $('#nt-example1-prev'),
    nextButton: $('#nt-example1-next')
    });</script>
  </body>
</html>