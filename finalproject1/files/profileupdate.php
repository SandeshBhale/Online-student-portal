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
    <title>OSP | PROFILE</title>
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
              <a class="nav-link " href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Profile</span>
                <i class="mdi mdi-account-circle menu-icon"style="color:#b66dff;"></i>
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
              <a class="nav-link" href="assignment.php">
                <span class="menu-title">Assignment</span>
                <i class="mdi mdi-library-books menu-icon"></i>
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
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"enctype="multipart/form-data">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <label for="file"><img src="<?php echo $row['image'];  ?>" alt="profile"name="image"style="cursor:pointer;object-fit:cover;border-radius:50%;width:10rem;height:10rem;"></label><br>
                        <input type="file" id="file" name="file" style="display:none;"/>  
                        <div class="mt-0">
                          <h4><?php echo $row['username']?></h4>
                          <p class="text-secondary mb-1"><?php echo $row['branch'] ?></p>
                          <p class="text-muted font-size-sm"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="name"class="profileinput"type="text"value="<?php echo $row['username'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Branch</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="branch"class="profileinput bg-white"type="text"value="<?php echo $row['branch'];  ?>"disabled>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Enrollment No.</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="enroll"class="profileinput"type="text"value="<?php echo $row['enroll'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email Id</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="email"class="profileinput bg-white"type="text"value="<?php echo $row['email'];  ?>"disabled>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="phone"class="profileinput"type="text"value="<?php echo $row['phone'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="gender"class="profileinput"type="text"value="<?php echo $row['gender'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input name="address"class="profileinput"type="text"value="<?php echo $row['address'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Villege/District</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <input name="city"class="profileinput"type="text"value="<?php echo $row['city'];  ?>">
                        </div>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-gradient-primary btn-fw"name="submit">Update</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              <?php
                if(isset($_POST['submit'])){
                  $name = $_POST['name'];
                  $enroll = $_POST['enroll'];
                  $phone = $_POST['phone'];              
                  $address = $_POST['address'];
                  $city = $_POST['city'];                                    
                  $gender = $_POST['gender'];
                  $files = $_FILES['file'];
                  $filename = $files['name'];
                  $fileerror = $files['error'];   
                  $filetmp = $files['tmp_name'];
                  $fileext = explode('.',$filename);
                  $filecheck= strtolower(end($fileext));
                  $fileextstored = array('png','jpg','jpeg');
                  if(in_array($filecheck,$fileextstored)){
                      $destinationfile ="upload/".$filename;
                      move_uploaded_file($filetmp,$destinationfile);
                      $query = " UPDATE signup SET image='$destinationfile' WHERE id='$id' ";
                      $result = mysqli_query($con, $query) or die(mysqli_error($con));
                  }
                $query = " UPDATE signup SET username='$name',phone='$phone',address='$address',city='$city',enroll='$enroll',gender='$gender' WHERE id='$id' ";
                              $result = mysqli_query($con, $query) or die(mysqli_error($con));
                              ?>
                              <script type="text/javascript">
                                    window.location.href=window.location.href;
                              </script>
                  <?php
                      }              
                  ?>
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