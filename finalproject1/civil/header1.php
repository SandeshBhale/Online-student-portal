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
    <title>OSP | MANAGE STUDENTS</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <style>
    .buttondiv{
      margin:5px;
    }
    @media(max-width:360px){
      .myiframe{
        width:300px !important;
        height:900px;
        margin-left:-4rem;
      }
    }
    @media(max-width:412px){
      .myiframe{
        width:350px;
        height:700px;
        margin-left:-4rem;
      }
    }
    @media(max-width:980px){
      .myiframe{
        width:900px;
        height:900px;
        margin-left:-1rem;
      }
    }
    @media(max-width:1024px){
      .myiframe{
        width:700px !important;
        height:900px;
        margin-left:-1rem;
      }
    }
    @media(max-width:1224px){
      .myiframe{
        width:900px !important;
        height:900px;
        margin-left:-1rem;
      }
    }
    @media(max-width:1280px){
      .myiframe{
        width:950px !important;
        height: 900px;
        margin-left:-1rem;
      }
    }
    </style> -->
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="managestudentce.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="managestudentce.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="managestudentce.php">
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
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Manage Exam</span>
                <i class="mdi mdi-laptop menu-icon"style="color:#b66dff;"></i>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pl-5 pr-5">
              <table width="100%">
                <tr>
                  <td>
                    <?php @$_SESSION['login']; 
                      error_reporting(1);
                    ?>
                    </td>
                      <td>
                  </td>
                  </tr>
              </table>


              <div class="row display=block">

               <div class="col-md-4 col-sm-6 col-sx-12  mx-auto ">
                <div class="buttondiv">
                <a target='top' href="testview.php" style='text-decoration:none;color:white;'><button class="btn btn-primary col-md-12">ADD SUBJECT</button></a>
                </div>
               </div>
               <div class="col-md-4 col-sm-6 col-sx-12 mx-auto">
                <div class="buttondiv">
                <a target='top' href="questiondelete.php" style='text-decoration:none;color:white;'><button class="btn btn-primary col-md-12">ADD QUESTION</button></a>
                </div>
               </div>
               <div class="col-md-4 col-sm-6 col-sx-12 mx-auto">
                <div class="buttondiv">
                <a target='top' href="showuser.php" style='text-decoration:none;color:white;'><button class="btn btn-primary col-md-12">TEST RESULT</button></a>
                </div>
               </div>
              </div>
         
              <div class="container">
                <iframe class="myiframe card bg-white mx-auto col-md-12 mt-4" src=""name="top"scrolling="yes"style="border:none;height:50rem;background-color:#f2edf3;"></iframe>
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