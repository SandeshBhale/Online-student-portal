<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: signinasteacher.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OSP | ADD ASSIGNMENT</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
          <?php
            include 'dbcon.php';
            $id=$_SESSION['id'];
            $data= " SELECT * FROM teacher WHERE id='$id' ";
            $query = mysqli_query($con,$data);
            $emailcount = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
          ?>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center text-osp">
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="managestudentme.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="managestudentme.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo $row['image'];  ?>" alt="image"style="object-fit:cover;"> 
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $row['name']; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
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
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2 text-wrap mt-2"><?php echo $row['name']; ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="profileupdatet.php">
                <span class="menu-title">Profile</span>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="managestudentme.php">
                <span class="menu-title">Manage Students</span>
                <i class="mdi mdi-account-remove menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addevents.php">
                <span class="menu-title">Add Events</span>
                <i class="mdi mdi-calendar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addnotice.php">
                <span class="menu-title">Add Notice</span>
                <i class="mdi mdi-bulletin-board menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addfaculty.php">
                <span class="menu-title">Add Faculty</span>
                <i class="mdi mdi-human-male-female menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Add Assignment</span>
                <i class="mdi mdi-library-books menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adderesource.php">
                <span class="menu-title">Add E-Resource</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="querycheck.php">
                <span class="menu-title">Query Check</span>
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="header1.php">
                <span class="menu-title">Manage Exam</span>
                <i class="mdi mdi-laptop menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
          <div class="main-panel">
            <div class="content-wrapper pl-5 pr-5">
                <?php
                include 'dbcon.php';
                if(isset($_POST['submit'])){
                    $branch = mysqli_real_escape_string($con, $_POST['branch']);
                    $semester = ucwords(mysqli_real_escape_string($con, $_POST['semester']));
                    $subject = ucwords(mysqli_real_escape_string($con, $_POST['subject']));
                    $sdate = mysqli_real_escape_string($con, $_POST['sdate']);
                    $files = $_FILES['file'];
                    $filename = $files['name'];
                    $fileerror = $files['error'];   
                    $filetmp = $files['tmp_name'];
                    $destinationfile ="assignmentfiles/".$filename;
                    move_uploaded_file($filetmp,$destinationfile);
                    $insertquery = "INSERT INTO assignment(branch, semester, subject, sdate, attachment) VALUES ('$branch','$semester','$subject','$sdate','$destinationfile')";
                    $iquery = mysqli_query($con,$insertquery);
                    if($iquery){
                        echo"<script>alert('Assignment Added Successfully !')</script>";
                    }else{
                    }
                }
                ?>
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                        <h3 class="text-center mb-3">Add Assignment</h3>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"  class="form-sample"enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select Branch</label>
                                    <div class="col-sm-9">
                                    <select name="branch"class="form-control">
                                        <option selected>Select Department..</option>
                                        <option value="COMP">Computer Engineering</option>
                                        <option value="MECH">Mechanical Engineering</option>
                                        <option value="E&TC">E & TC Engineering</option>  
                                        <option value="CIVIL">Civil Engineering</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select Semester</label>
                                    <div class="col-sm-9">
                                    <select name="semester"class="form-control">
                                        <option selected>Select Semester..</option>
                                        <option value="first">First Semeter</option>
                                        <option value="second">Second Semeter</option>
                                        <option value="third">Third Semeter</option>  
                                        <option value="fourth">Fourth Semeter</option>
                                        <option value="fifth">Fifth Semeter</option>
                                        <option value="sixth">Sixth Semeter</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Subject</label>
                                <div class="col-sm-9">
                                <input type="text" name="subject"class="form-control" placeholder="Subject" />
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Submission Date</label>
                                <div class="col-sm-9">
                                <input type="date"name="sdate" class="form-control" />
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Attachment</label>
                                <div class="col-sm-9">
                                <input type="file" id="file" name="file"class="form-control" style="display:none"placeholder="HOD"/>
                                <label class="p-3 w-100"for="file"style="background:#fff; color:grey;cursor:pointer;border: 1px solid #ced4da;">Click here to Choose File</label>
                                </div>
                            </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <button type="submit" name="submit"class="btn btn-gradient-primary mr-2 w-100">Add Assignment</button>
                            </div>
                            </div>
                        </div>
                        </form>                        
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body ">
                        <h3 class="text-center mb-4">Manage Assignments</h3>                   
                        <table class="table table-hover table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm ">
                            <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Branch</th>
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>Submission Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                include "dbcon.php"; 
                                $records = mysqli_query($con,"SELECT * FROM assignment WHERE branch='MECH' "); 
                                while($data = mysqli_fetch_array($records))
                                {
                            ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo wordwrap($data['branch'],15,"<br>\n"); ?></td>
                                <td><?php echo $data['semester']; ?></td>
                                <td><?php echo $data['subject']; ?></td>
                                <td><?php $date = $data['sdate']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></td>
                                <td><a href="deleteassignment.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger btn-xs">Delete</button></a></td>                                                                                                                    
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="row">
                
                <div class="col-lg-4 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                      <h4 class="text-center mb-2 text-info">First Year</h4>
                      <?php 
                          $sql ="SELECT * FROM submission_log WHERE semester IN ('First','Second') and branch='MECH' ORDER BY id DESC ;";
                          $execute = mysqli_query($con,$sql);
                          while($data = mysqli_fetch_array($execute)){
                      ?>
                        <span> <?php echo $data['log'];?></span><br><br>
                      <?php } ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                      <h4 class="text-center mb-2 text-info">Second Year</h4> 
                      <?php 
                          $sql ="SELECT * FROM submission_log WHERE semester IN ('Third','Fourth') and branch='MECH' ORDER BY id DESC;";
                          $execute = mysqli_query($con,$sql);
                          while($data = mysqli_fetch_array($execute)){
                      ?>
                        <span> <?php echo $data['log'];?></span><br><br>
                      <?php } ?>                                 
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                      <h4 class="text-center mb-2 text-info">Third Year</h4>
                      <?php 
                          $sql ="SELECT * FROM submission_log WHERE semester IN ('Fifth','Sixth') and branch='MECH' ORDER BY id DESC;";
                          $execute = mysqli_query($con,$sql);
                          while($data = mysqli_fetch_array($execute)){
                      ?>
                        <span> <?php echo $data['log'];?></span><br><br>
                      <?php } ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="post">
                    <button class="btn btn-gradient-primary w-100"type="submit"name="clear">Clear Log</button>
                    </form>
                    <?php
                        if(isset($_POST['clear'])){
                          $del = "DELETE FROM submission_log WHERE branch='MECH'";
                          $execute = mysqli_query($con,$del);
                        }
                    ?>
                  </div>
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
    <script src="../assets/js/main.js"></script>
  </body>
</html>