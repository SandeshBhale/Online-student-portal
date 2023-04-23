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
    <title>OSP | E-RESOURCE</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
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
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center text-osp">
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="main.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="main.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="main.php">
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
              <a class="nav-link" href="coer.php">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orco.php">
                <span class="menu-title">Online Resources</span>
                <i class="mdi mdi-information menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Assignment</span>
                <i class="mdi mdi-library-books menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showtest.php">
                <span class="menu-title">Online Test</span>
                <i class="mdi mdi-laptop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="qbco.php">
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
        <div class="main-panel">
          <div class="content-wrapper pl-5 pr-5">
            <div class="row">
            
              <div class="col-xl-4 col-lg-6 col-md-4 grid-margin stretch-card mx-auto">
                <div class="card">
                  <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                    <!-- <div class="card"> -->
                      <!-- <div class="container"> -->
                        <h3 class="text-center pb-1 text-dark">First Year</h3>
                        <?php 
                          $sql="SELECT * FROM assignment WHERE semester IN ('First','Second') and branch='COMP';";
                          $execute = mysqli_query($con,$sql);
                          while($data  = mysqli_fetch_array($execute)){     
                          $no = $data['id'];
                        ?>

                            <div class="card p-3 bg-dark text-white">
                              <span class='pb-1'>Semester: <?php echo $data['semester']?></span>
                              <span class='pb-1'>Subject: <?php echo $data['subject']?></span>
                              <span class='pb-1'>Submission Date: <?php $date = $data['sdate']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></span>
                              <span class='pb-1'>View Attachment :&nbsp <a class="text-decoration-none text-warning"href="<?php echo $data['attachment'];?>">View</a></span>
                              <?php $no = $data['id'];?>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-md<?php echo $no; ?>">Submit Assignment</button>
                              <div class="modal fade bd-example-modal-md<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                      <!-- <div class="row col-md-12">
                                        <div class="col-md-12 grid-margin stretch-card"> -->
                                          <div class="card">
                                            <div class="card-body">
                                              <h4 class="card-title">Submit Assignment</h4>                                              
                                              <form class="forms-sample"action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"  class="form-sample"enctype="multipart/form-data">
                                                <div class="form-group">
                                                  <label for="exampleInputUsername1"class="text-dark">Full Name</label>
                                                  <input type="text" class="form-control" id="exampleInputUsername1" name="name"placeholder="name">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1"class="text-dark">Semester</label>
                                                  <input type="text" class="form-control" id="exampleInputEmail1" name="semester" value="<?php echo $data['semester']?>"placeholder="Semester">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Subject</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword1"name="subject" value="<?php echo $data['subject']?>"placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Attachment</label>
                                                  <input type="file" class="form-control" id="exampleInputPassword1" name="file"placeholder="file">
                                                </div>
                                                <button type="submit" class="btn btn-gradient-primary mr-2"name="submit">Submit</button>                                                
                                              </form>
                                            </div>
                                          </div>
                                        <!-- </div>
                                      </div>                                     -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>
                        <?php } ?>
                      <!-- </div> -->
                    <!-- </div> -->
                    <?php 
                      if(isset($_POST['submit'])){
                        $name =ucwords($_POST['name']);                        
                        $semester = $_POST['semester'];
                        $subject1 = $_POST['subject'];
                        $branch = $row['branch'];

                        $files = $_FILES['file'];
                        $filename = $files['name'];
                        $fileerror = $files['error'];   
                        $filetmp = $files['tmp_name'];
                        $destinationfile ="receivedassignments/".$filename;
                        move_uploaded_file($filetmp,$destinationfile);
                        $insertquery = "INSERT INTO submit_assignment(name, semester, subject, attachment,branch) VALUES ('$name','$semester','$subject1','$destinationfile','$branch')";
                        $iquery = mysqli_query($con,$insertquery);
                        $insertquery1 = "INSERT INTO submission_log(log, branch,semester) VALUES ('$name has submitted assignment of subject $subject1 ','$branch','$semester')";
                        $iquery1 = mysqli_query($con,$insertquery1);
                        if($iquery){
                          echo"<script>alert('Assignment Submitted Successfully.');</script>";
                        }else{
                          echo"<script>alert('Assignment Submission Failed.');</script>";
                        }
                    }    
                  ?>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-4 grid-margin stretch-card mx-auto">
                <div class="card">
                  <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                        <h3 class="text-center pb-1 text-dark">Second Year</h3>
                        <?php 
                          $sql="SELECT * FROM assignment WHERE semester IN ('Third','Fourth')and branch='COMP';";
                          $execute = mysqli_query($con,$sql);
                          while($data  = mysqli_fetch_array($execute)){     
                          $no = $data['id']                       ;
                        ?>

                            <div class="card p-3 bg-dark text-white">
                              <span class='pb-1'>Semester: <?php echo $data['semester']?></span>
                              <span class='pb-1'>Subject: <?php echo $data['subject']?></span>
                              <span class='pb-1'>Submission Date: <?php $date = $data['sdate']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></span>
                              <span class='pb-1'>View Attachment :&nbsp <a class="text-decoration-none text-warning"href="<?php echo $data['attachment'];?>">View</a></span>
                              <?php $no = $data['id'];?>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-md<?php echo $no; ?>">Submit Assignment</button>
                              <div class="modal fade bd-example-modal-md<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                      <!-- <div class="row col-md-12">
                                        <div class="col-md-12 grid-margin stretch-card"> -->
                                          <div class="card">
                                            <div class="card-body">
                                              <h4 class="card-title">Submit Assignment</h4>                                              
                                              <form class="forms-sample"action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"  class="form-sample"enctype="multipart/form-data">
                                                <div class="form-group">
                                                  <label for="exampleInputUsername1"class="text-dark">Full Name</label>
                                                  <input type="text" class="form-control" id="exampleInputUsername1" name="name"placeholder="name">
                                                </div>                                                
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1"class="text-dark">Semester</label>
                                                  <input type="text" class="form-control" id="exampleInputEmail1" name="semester" value="<?php echo $data['semester']?>"placeholder="Semester">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Subject</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword1"name="subject" value="<?php echo $data['subject']?>"placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Attachment</label>
                                                  <input type="file" class="form-control" id="exampleInputPassword1" name="file"placeholder="file">
                                                </div>
                                                <button type="submit" class="btn btn-gradient-primary mr-2"name="submit">Submit</button>                                                
                                              </form>
                                            </div>
                                          </div>
                                        <!-- </div>
                                      </div>                                     -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>
                        <?php } ?>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-4 grid-margin stretch-card mx-auto">
                <div class="card">
                  <div class="card-body table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                        <h3 class="text-center pb-1 text-dark">Third Year</h3>
                        <?php 
                          $sql="SELECT * FROM assignment WHERE semester IN ('Fifth','Sixth')and branch='COMP';";
                          $execute = mysqli_query($con,$sql);
                          while($data  = mysqli_fetch_array($execute)){     
                          $no = $data['id']                       ;
                        ?>

                            <div class="card p-3 bg-dark text-white">
                              <span class='pb-1'>Semester: <?php echo $data['semester']?></span>
                              <span class='pb-1'>Subject: <?php echo $data['subject']?></span>
                              <span class='pb-1'>Submission Date: <?php $date = $data['sdate']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></span>
                              <span class='pb-1'>View Attachment :&nbsp <a class="text-decoration-none text-warning"href="<?php echo $data['attachment'];?>">View</a></span>
                              <?php $no = $data['id'];?>
                              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-md<?php echo $no; ?>">Submit Assignment</button>
                              <div class="modal fade bd-example-modal-md<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                      <!-- <div class="row col-md-12">
                                        <div class="col-md-12 grid-margin stretch-card"> -->
                                          <div class="card">
                                            <div class="card-body">
                                              <h4 class="card-title">Submit Assignment</h4>                                              
                                              <form class="forms-sample"action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"  class="form-sample"enctype="multipart/form-data">
                                                <div class="form-group">
                                                  <label for="exampleInputUsername1"class="text-dark">Full Name</label>
                                                  <input type="text" class="form-control" id="exampleInputUsername1" name="name"placeholder="name">
                                                </div>                                                
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1"class="text-dark">Semester</label>
                                                  <input type="text" class="form-control" id="exampleInputEmail1" name="semester" value="<?php echo $data['semester']?>"placeholder="Semester">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Subject</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword1"name="subject" value="<?php echo $data['subject']?>"placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1"class="text-dark">Attachment</label>
                                                  <input type="file" class="form-control" id="exampleInputPassword1" name="file"placeholder="file">
                                                </div>
                                                <button type="submit" class="btn btn-gradient-primary mr-2"name="submit">Submit</button>                                                
                                              </form>
                                            </div>
                                          </div>
                                        <!-- </div>
                                      </div>                                     -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>
                        <?php } ?>
                  </div>
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