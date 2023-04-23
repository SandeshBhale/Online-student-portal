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
    <title>OSP | ADD FACULTY</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        $department = mysqli_real_escape_string($con, $_POST['department']);
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $education = mysqli_real_escape_string($con, $_POST['education']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $insertquery = "INSERT INTO faculty(name, department, education, mail) VALUES ('$fname','$department','$education','$email')";
        $iquery = mysqli_query($con,$insertquery);
        if($iquery){
            echo"<script>alert('Faculty Added Successfully !')</script>";
        }else{
        }
    }
?>
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="managestudentej.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="managestudentej.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="managestudentej.php">
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
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Add Faculty</span>
                <i class="mdi mdi-human-male-female menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addassignment.php">
                <span class="menu-title">Add Assignment</span>
                <i class="mdi mdi-library-books menu-icon"></i>
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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h3 class="text-center mb-4">Add Faculty</h3>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"class="form-sample">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Deapartement</label>
                            <div class="col-sm-9">
                              <select name="department"class="form-control">
                                <option selected>Select Department..</option>
                                <option value="Department of Computer Engineering">Computer Engineering</option>
                                <option value="Department of Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Department of Electronic & Telecommunication Engineering">E & TC Engineering</option>  
                                <option value="Department of Civil Engineering">Civil Engineering</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Faculty Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="fname"class="form-control" placeholder="Faculty Name" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Qualification</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="education"placeholder="Qualification" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mail Id</label>
                            <div class="col-sm-9">
                              <input type="text" name="email"class="form-control" placeholder="Email-Id" />
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

              <div class="row mt-5">
                <div class="col-lg-12 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center mb-4">Manage Faculty</h3>                   
                      </p>
                      <table class="table table-hover table-responsive-xl table-responsive-lg table-responsive-md table-responsive-sm">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Qualification</th>
                            <th>Email-Id</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include "dbcon.php"; 
                            $department="Department of Electronic & Telecommunication Engineering";
                            $records = mysqli_query($con,"SELECT * FROM faculty WHERE department='$department' "); 
                            while($data = mysqli_fetch_array($records))
                            {
                          ?>
                          <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo wordwrap($data['department'],20,"<br>\n"); ?></td>
                            <td><?php echo $data['education']; ?></td>
                            <td><?php echo $data['mail']; ?></td>
                            <td><a href="deletefaculty.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger btn-xs">Delete</button></a></td>                       
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
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