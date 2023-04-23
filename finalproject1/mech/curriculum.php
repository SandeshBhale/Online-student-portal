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
    <title>OSP | CURRICULUM</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        
  .buttonmy:hover{
    color: #ffffff;
  }
  .card{
      width:16.9rem;
      height:15rem;  
  }

    </style>
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="mech.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="mech.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="mech.php">
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
              <a class="nav-link" href="meer.php">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orme.php">
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
              <a class="nav-link" href="qbme.php">
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
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Curriculum Search</span>
                <i class="mdi mdi-file-find menu-icon"style="color:#b66dff;"></i>
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
                        <input type="text" id="filter" class="form-control mb-2 mr-sm-2" onkeyup="pass()" placeholder="Search for Department.." title="Type in a name">
                    </div>
                <div class="card-lists"id="card-lists">
                    <div class="mt-2 d-flex flex-wrap">

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/5thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">5th Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1oj6bAS6qXAvKJirALDneV8k1YZxQ4hOI/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/4thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">4th Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1fuIyMuv6DWZndEJwio_hryGwe9Y4c7eX/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/3rdsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">3rd Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/16pCjegtgGcDeqSUmk5Ciap8OrRe6BQWU/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/4thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">4th Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1JEZ04nWBSZBs03_Nad2L1hlQv77Gjedj/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 1 end -->
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/3rdsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">3rd Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ZrTJRP_OSw0FiQV8F5zZ798UJfRDZ-eF/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/2ndsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">2nd Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1NbMzUGPZFoDw7pGgg0WrLw7JpdoQrsKZ/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/1stsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">1st Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ORmb6vAD_afjVW4Ilj_Q4HxPna49rVaZ/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/5thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">5th Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1sokcUVqVs_Taq8vIhISh1AAA4LzAcMzp/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd end -->
                        <!-- 3 start -->
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/2ndsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">2nd Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1c1OpGDC5gomKqHBMeYs7xh4So_Ka7FOx/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/2ndsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">2nd Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/15HPvzf55-EE_Mu58PUF3SEEmn6W-wVkr/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/6thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">6th Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/10mXEemyr_EQscbIGqpmJ523ppNHaOaOY/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/1stsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">1st Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ORmb6vAD_afjVW4Ilj_Q4HxPna49rVaZ/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 3 end -->
                        <!-- 4 start -->
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/1stsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">1st Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ORmb6vAD_afjVW4Ilj_Q4HxPna49rVaZ/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/6thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">6th Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/19mBtux4wnXs-Et0Gtqpcgz7n0XhZKxDd/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/3rdsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">3rd Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1VZlj47svgLgQsNuS-sDJ9XZPm05y9QEL/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/2ndsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">2nd Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1DbziT3411XWxRreH-RgabiR3bVWchSrI/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 4 end -->
                        <!-- 5 start -->
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/6thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">6th Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/16z99Ar6QWBQb8WgbcbBfudiVNxXnrRYB/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/5thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">5th Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1qeNySorY5VHgSADMe4R_tKjm-UjjBRx-/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/5thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">5th Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ZsVZwBLxMCkxyQ-SErZUZgjIJVodmNbq/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/6thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">6th Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/11ZD33OrKbch5ydKypFtV2Qe0ObSnJwtm/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 5 end -->
                        <!-- 6 start -->
                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/3rdsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">3rd Sem Computer Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1Vlm6ctv8TvwR9TRdGuUYA7yYEolU3UKa/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/4thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">4th Sem Mechanical Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1mcL9YDwL4C17cDsyQDNNn7gTSUnwiPOg/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class=" text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/1stsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">1st Sem Civil Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1ORmb6vAD_afjVW4Ilj_Q4HxPna49rVaZ/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card1 col-xl-3 col-lg-4 col-md-4">
                            <div class="text-center card-box firstcard">
                                <div class="member-card">
                                <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/logo/4thsemlogo.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="card-body">
                                    <h5 class="pt-1 heading">4th Sem Electronics Engineering Curriculum</h5>
                                </div>
                                <ul class="social-links list-inline">
                                    <a href="https://drive.google.com/file/d/1GWiUCOHPwvIno1o0hhUbTePIHr7d99ai/view?usp=sharing"><button type="button" class="btn btn-outline-primary btn-sw pl-4 pr-4 pt-2 pb-2 buttonmy">Download</button></a>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 6 end -->

                    </div>
                </div>    
            </div>
        </div>
      </div>
    </div>
    <script>
        function pass(){
            const input = document.getElementById('filter').value.toUpperCase();
            const cardcontainer = document.getElementById('card-lists');
            const cards = cardcontainer.getElementsByClassName('card1');
            for(let i=0; i< cards.length; i++){
                let title = cards[i].querySelector(".card-body h5.heading");

                if(title.innerText.toUpperCase().indexOf(input)>-1){
                    cards[i].style.display="";
                }else{
                    cards[i].style.display="none";
                }
            }

        }
    </script>
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