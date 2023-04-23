<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: signinasadmin.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OSP | ADD TEACHER</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <?php
include 'dbcon.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);  
    $token = bin2hex(random_bytes(15));
    $emailquery = "select * from teacher where email='$email' ";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo"<script>alert('EMAIL ALREADY EXISTS')</script>";
    }else{
        if($password===$cpassword){
                    $subject = "Activate Your Account";
                    $body = "Hi, $name, Click here to activate your account
                    http://localhost/finalproject1/files/activatet.php?token=$token";
                    $sender = "From: sspiparbhani5@gmail.com";
                    if (mail($email, $subject, $body, $sender)) {
                        $_SESSION['msg']="<script>alert('PLEASE, CHECK YOUR MAIL TO ACTIVATE YOUR ACCOUNT $email')</script>";
                        echo $_SESSION['msg'];
                        $insertquery = "INSERT INTO teacher(name, email, password, cpassword, branch, token, status,image) VALUES ('$name','$email','$pass','$cpass','$branch','$token','inactive','../assets/images/sspi-logo.png')";
                        $iquery = mysqli_query($con,$insertquery);                               
                    } else {
                        echo "<script>alert('Email sending failed...')</script>";
                    }
        }else{
            echo"<script> alert('PASSWORD ARE NOT MATCHING');</script>";
        }
    }
}
?>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center text-osp">
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="admin.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="admin.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../assets/images/sspi-logo.png" alt="image"style="object-fit:cover;"> 
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['username']; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logoutadmin.php">
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
                  <img src="../assets/images/sspi-logo.png" alt="profile"style="object-fit:cover;">
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2 text-wrap mt-2"><?php echo $_SESSION['username'] ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Add Teacher</span>
                <i class="mdi mdi-account-circle menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manageteacher.php">
                <span class="menu-title">Manage Teacher</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pl-5 pr-5">
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h3 class="text-center mb-4">Add Teacher</h3>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name"class="form-control" id="exampleInputUsername2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email"name="email"class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password"class="form-control" id="exampleInputMobile" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="cpassword"class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                        </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Branch</label>
                            <div class="col-sm-9">
                              <select name="branch"class="form-control">
                                <option selected>Select Branch..</option>
                                <option value="COMP">Computer Engineering</option>
                                <option value="MECH">Mechanical Engineering</option>
                                <option value="E&TC">E & TC Engineering</option>
                                <option value="CIVIL">Civil Engineering</option>
                              </select>
                            </div>
                          </div>  
                          <div class="text-center">
                            <button type="submit" name="submit"class="btn btn-gradient-primary mr-2 w-100">Add</button>            
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