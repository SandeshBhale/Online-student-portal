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
    <title>OSP | ADD E-RESOURCE</title>
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="managestudent.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="managestudent.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo $row['image']; ?>" alt="image"style="object-fit:cover;"> 
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $row['name']; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logoutteacher.php">
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
                  <img src="<?php echo $row['image']; ?>" alt="profile"style="object-fit:cover;">
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2 text-wrap mt-2"><?php echo $row['name'] ?></span>
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
              <a class="nav-link" href="managestudent.php">
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
              <a class="nav-link" href="addassignment.php">
                <span class="menu-title">Add Assignment</span>
                <i class="mdi mdi-library-books menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Add E-Resource</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"style="color:#b66dff;"></i>
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
              $subject = ucwords($_POST['subname']);
              $type = ucwords($_POST['type']);
              $semester = ucwords($_POST['semester']);
              $link = $_POST['link'];
              $branch = $_POST['branch'];

              $insertquery = "INSERT INTO eresource(subject_name, type, semester, link, branch) VALUES ('$subject','$type','$semester','$link','$branch')";
              $iquery = mysqli_query($con,$insertquery);
              if($iquery){
                  echo"<script>alert('E-Resource Added Successfully !')</script>";
              }else{
                  echo"<script>alert('E-Resource Uploading Failed !')</script>";
              }
          }
          ?>

            <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h3 class="text-center mb-3">Add E-Resource</h3>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST" enctype="multipart/form-data class="form-sample">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subject Name</label>
                            <div class="col-sm-9">
                              <input required type="text" name="subname"class="form-control" placeholder="Subject Name" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Type</label>
                            <div class="col-sm-9">
                              <select required name="type"class="form-control">
                                <option selected>Select Type..</option>
                                <option value="Book">Book</option>
                                <option value="Notes">Notes</option>
                                <option value="MCQs">MCQ's</option>                                  
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                              <select required name="semester"class="form-control">
                                <option selected>Select Semester..</option>
                                <option value="First">First Semester</option>
                                <option value="Second">Second Semester</option>
                                <option value="Third">Third Semester</option>  
                                <option value="Fourth">Fourth Semester</option>
                                <option value="Fifth">Fifth Semester</option>
                                <option value="Sixth">Sixth Semester</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File Link</label>
                            <div class="col-sm-9">
                              <input required type="text"name="link" class="form-control" placeholder="File Link"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Branch</label>
                            <div class="col-sm-9">
                              <select required name="branch"class="form-control">
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
                             <button type="submit" name="submit"class="btn btn-gradient-primary mr-2 w-100">Add</button>
                          </div>
                        </div>
                      </div>
                    </form>
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