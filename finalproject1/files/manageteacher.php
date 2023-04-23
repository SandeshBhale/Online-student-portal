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
    <title>OSP | MANAGE TEACHER</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
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
              <a class="nav-link " href="admin.php">
                <span class="menu-title">Add Teacher</span>
                <i class="mdi mdi-account-circle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manageteacher.php">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Manage Teacher</span>
                <i class="mdi mdi-home menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pl-5 pr-5">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card mx-auto">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-center mb-4">Manage Teacher</h3>                   
                      </p>
                      <table class="table table-hover table-responsive-md table-responsive-lg table-responsive-xl">
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Full Name</th>
                            <th>Branch</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include "dbcon.php"; 
                            $records = mysqli_query($con,"select * from teacher"); 
                            while($data = mysqli_fetch_array($records))
                            {
                          ?>
                          <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['branch']; ?></td>
                            <td><a href="delete.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger btn-xs">Delete</button></a></td>                       
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