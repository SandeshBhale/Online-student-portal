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
    <title>OSP | FACULTY</title>
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="eandtc.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="eandtc.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="eandtc.php">
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
              <a class="nav-link" href="etcer.php">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Online Resources</span>
                <i class="mdi mdi-information menu-icon"style="color:#b66dff;"></i>
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
              <a class="nav-link" href="qbej.php">
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
          <div class="content-wrapper">
          <div class="card p-5 mb-4">
              <h1 class='text-center mb-4 text-primary'>Video Tutorials</h1>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> PLC  </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/Aaeab-zmY_Q" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> PCE</strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/dIuq8oqCZ2I " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Basic Science </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/XbJipLzbVC0 " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Embeded Systems </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/PDYuYGHT668w " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>               

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Consumer Electronics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/TqZ2pZTxj5I " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Power Electronics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/pZJiumiGpZw " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Applied Electronics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/rXOOzIJc-lM " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Introduction To Electronics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/vUkO3RmiGHs " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>               

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Wireless communication </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kxOUCDjHg_Q" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Digital communication </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/Z0Ylnk8zXRo " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> English </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/eoEPanqesYM " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> ETE </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0KTd8cIpiPU " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>               

              </div>  
            </div>

            <div class="card p-5">
              <h1 class='text-center mb-4 text-primary'>Websites to Refer</h1>

              <div class="row">     

                <div class="col-md-4 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Sanfoundry </strong></h4>     
                            <p class="text-center"><a class="text-decoration-none" href="https://www.sanfoundry.com/1000-embedded-system-questions-answers/">Embeded Systems</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://rank.sanfoundry.com/embedded-system-tests/">Embeded system tests</a></p>  
                            <p class="text-center"><a class="text-decoration-none" href="https://www.sanfoundry.com/1000-matlab-questions-answers/">MATLAB</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://www.sanfoundry.com/1000-electrical-measurements-questions-answers/">Electrical measurements</a></p>
                            <p class="text-center"><a class="text-decoration-none" href="https://www.sanfoundry.com/1000-digital-circuits-questions-answers/">Digital Circuits</a></p>                      
                        </div>
                    </div>          
                </div>         

                <div class="col-md-4 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Examveda </strong></h4>
                            <p class="text-center"><a class="text-decoration-none" href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-microprocessors/">Microprocessors</a></p>
                            <p class="text-center"><a class="text-decoration-none" href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-capacitors/">Capacitors</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-current-electricity/">Current Electricity</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-electrostatics/">Electrostatics</a></p>  
                            <p class="text-center"><a class="text-decoration-none" href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-transistors/">Transistors</a></p>     
                        </div>
                    </div>          
                </div>         

                <div class="col-md-4 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong>Electrical4U </strong></h4>
                            <p class="text-center"><a class="text-decoration-none" href="https://www.electrical4u.com/electrical-mcq.php?subject=electric-circuits&page=1">Electrical Mechenics</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://www.electrical4u.com/electrical-mcq.php?subject=microprocessor&page=1">Microprocessers</a></p>  
                            <p class="text-center"><a class="text-decoration-none" href="https://www.electrical4u.com/electrical-mcq.php?subject=power-electronics&page=1">Power Electronics</a></p> 
                            <p class="text-center"><a class="text-decoration-none" href="https://www.electrical4u.com/electrical-mcq.php?subject=control-systems&page=1">Control Systems</a></p>
                            <p class="text-center"><a class="text-decoration-none" href="https://www.electrical4u.com/electrical-mcq.php?subject=illumination&page=1">Illumination</a></p>      
                        </div>
                    </div>          
                </div>                      

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong>CareerRide</strong></h4>          
                            <p class="text-center"><a class="text-decoration-none text-primary" href="https://www.careerride.com/Electronics-and-Communication-engineering.aspx">Click to visit</a></p>                 
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> indiabix </strong></h4>
                            <p class="text-center"><a class="text-decoration-none text-primary" href="https://www.indiabix.com/electronics-and-communication-engineering/questions-and-answers/">Click to visit</a></p> 
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Pinoybix </strong></h4>
                            <p class="text-center"><a class="text-decoration-none text-primary" href="https://pinoybix.org/2014/10/mcqs-in-electronics-systems-and-technologies.html">Click to visit</a></p> 
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> GrabStudy</strong></h4>
                            <p class="text-center"><a class="text-decoration-none text-primary" href="https://www.grabstudy.com/Electronics-and-Communication/Electronics-and-Communication-Engineering.php">Click to visit</a></p>    
                        </div>
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