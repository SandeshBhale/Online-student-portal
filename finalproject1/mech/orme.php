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
                            <h4 class="text-center  py-2 mb-3"><strong> Automobile Engineering  </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/dQLMzi_f5ck " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Mechenical Workshop </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/-dK57l-BeDM " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Strength Of materials </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/geqRGNIZGq8 " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Thermal Engineering </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/k5-GZr3cT3I" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>               

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Theory of mechenics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/pXQCy4RNJ5g " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Mech Engg measurements </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/Z6evuxYjYMs " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Fluid Mechenics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/iTanaNwMDKo " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Manufacturing Processes </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/jdFrBtHeJbs " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>               

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Fundamental of mechetronics </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/-0wPWdkpQW4" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Elements of mechine design </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/zSHxVx6-a_s " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Industrial Hydraulicsl </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src=" https://www.youtube.com/embed/rqpenCBMIok " allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Power Engg & Refrigeration </strong></h4>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mm-m5JImgeUhttps://www.youtube.com/embed/PyB7iwCTMdw" allowfullscreen></iframe>
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
                            <h4 class="text-center  py-2 mb-3"><strong> Examveda </strong></h4>     
                            <p class="text-center"><a class="text-decoration-none"href="https://www.examveda.com/mechanical-engineering/practice-mcq-question-on-theory-of-machine/">Theory Of Machine</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.examveda.com/mechanical-engineering/practice-mcq-question-on-machine-design/">Machine Design</a></p>  
                            <p class="text-center"><a class="text-decoration-none"href="https://www.examveda.com/mechanical-engineering/practice-mcq-question-on-engineering-drawing/">Engineering Drawing</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.examveda.com/mechanical-engineering/practice-mcq-question-on-engineering-mechanics/">Engineering Machains</a></p>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.examveda.com/mechanical-engineering/practice-mcq-question-on-engineering-thermodynamics/">Engneering Thermodynamics</a></p>                      
                        </div>
                    </div>          
                </div>         

                <div class="col-md-4 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Sanfoundry </strong></h4>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.sanfoundry.com/1000-mass-transfer-questions-answers/">Mass transfer</a></p>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.sanfoundry.com/1000-heat-transfer-questions-answers/">Heat transfer</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.sanfoundry.com/1000-materials-science-questions-answers/">Material Science</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.sanfoundry.com/1000-machine-design-questions-answers/">Machine Design</a></p>  
                            <p class="text-center"><a class="text-decoration-none"href="https://www.sanfoundry.com/1000-hydraulic-machines-questions-answers/">Hydraulic Machines</a></p>      
                        </div>
                    </div>          
                </div>         

                <div class="col-md-4 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong>ObjectiveBooks</strong></h4>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.objectivebooks.com/2015/04/automobile-engineering_25.html">Automobile Engineering</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.objectivebooks.com/2015/05/engineering-materials-objective.html">Engineering Materials</a></p>  
                            <p class="text-center"><a class="text-decoration-none"href="https://www.objectivebooks.com/2015/07/engineering-mechanics.html">Engineering Mechenics</a></p> 
                            <p class="text-center"><a class="text-decoration-none"href="https://www.objectivebooks.com/2015/10/theory-of-machine-mcq-practice-test-set.html">Theory Of Machine</a></p>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.objectivebooks.com/2015/08/workshop-technology-online-test.html">Workshop Technology</a></p>       
                        </div>
                    </div>          
                </div>                      

              </div>

              <div class="row">     

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong>indiabix</strong></h4>          
                            <p class="text-center"><a class="text-decoration-none"href="https://www.indiabix.com/mechanical-engineering/questions-and-answers/">Click to visit</a></p>                 
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> careerride </strong></h4>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.careerride.com/mcq-topics/mechanical-engineering-mcq-questions-and-answers-engineering-16.aspx/">Click to visit</a></p>
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> Grabstudy </strong></h4>
                            <p class="text-center"><a class="text-decoration-none"href="https://www.grabstudy.com/Mechanical/Mechanical-Engineering.php">Click to visit</a></p>   
                        </div>
                    </div>          
                </div>         

                <div class="col-md-3 mb-4">          
                    <div class="card">
                        <div class="card-block p-3">                          
                            <h4 class="text-center  py-2 mb-3"><strong> GeekMCQ</strong></h4>
                            <p class="text-center"><a class="text-decoration-none"href="http://www.geekmcq.com/engineering-mcqs/mechanical-engineering/">Click to visit</a></p>    
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