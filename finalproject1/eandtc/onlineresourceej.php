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
    <title>OSP | HOME</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
     @media(max-width:360px){
      .myiframe{
        width:180px !important;
        height:130px;
        margin-left:-1rem;
      }
     }
     @media(max-width:1024px){
      .myiframe{
        width:140px;
        height:130px;
        margin-left:-1rem;
      }
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
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center  text-osp">
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
                  <i class="mdi mdi-logout mr-3 text-primary"></i> Signout </a>
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
              <a class="nav-link" href="#">
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
              <a class="nav-link" href="">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sublist.php">
                <span class="menu-title">Online Test</span>
                <i class="mdi mdi-laptop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Query Board</span>
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Time Table</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Curriculum Search</span>
                <i class="mdi mdi-file-find menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Faculty</span>
                <i class="mdi mdi-human-male-female menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <?php   
          $query = "SELECT id FROM signup ORDER BY id";  
          $query_run = mysqli_query($con, $query);
          $data = mysqli_num_rows($query_run); 
          $query = "SELECT id FROM teacher ORDER BY id";  
          $query_run = mysqli_query($con, $query);
          $data1 = mysqli_num_rows($query_run);
          ?>
        <div class="main-panel">
            <div class="content-wrapper"> 
            <!-- Websites with topic-->
            <div class="content-first">
              <h1 style='font-size:3rem;color:#1F1839;text-align:center;margin-bottom:2rem;'>Websites to refer</h1> 
              <div class="row col-md-12">
                <div class="col-sm-4 col-sx-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body cardname ml-n3 mb-n4"> 
                    <div class='card-head'>
                    <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>Sanfoundry</h1> 
                    <p style='text-align:center;'><a href="https://www.sanfoundry.com/1000-embedded-system-questions-answers/">Embeded Systems</a></p> 
                    <p style='text-align:center;'><a href="https://rank.sanfoundry.com/embedded-system-tests/">Embeded system tests</a></p>  
                    <p style='text-align:center;'><a href="https://www.sanfoundry.com/1000-matlab-questions-answers/">MATLAB</a></p> 
                    <p style='text-align:center;'><a href="https://www.sanfoundry.com/1000-electrical-measurements-questions-answers/">Electrical measurements</a></p>
                    <p style='text-align:center;'><a href="https://www.sanfoundry.com/1000-digital-circuits-questions-answers/">Digital Circuits</a></p>     
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body col-sx-6 ml-n3 mb-n4"> 
                    <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>Examveda</h1> 
                    <p style='text-align:center;'><a href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-microprocessors/">Microprocessors</a></p>
                    <p style='text-align:center;'><a href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-capacitors/">Capacitors</a></p> 
                    <p style='text-align:center;'><a href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-current-electricity/">Current Electricity</a></p> 
                    <p style='text-align:center;'><a href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-electrostatics/">Electrostatics</a></p>  
                    <p style='text-align:center;'><a href="https://www.examveda.com/electrical-engineering/practice-mcq-question-on-transistors/">Transistors</a></p>     
                    </div>
                  </div>
                </div> 

                <div class="col-sm-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body col-sx-6 ml-n3 mb-n4"> 
                    <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>Electrical4U</h1> 
                    <p style='text-align:center;'><a href="https://www.electrical4u.com/electrical-mcq.php?subject=electric-circuits&page=1">Electrical Mechenics</a></p> 
                    <p style='text-align:center;'><a href="https://www.electrical4u.com/electrical-mcq.php?subject=microprocessor&page=1">Microprocessers</a></p>  
                    <p style='text-align:center;'><a href="https://www.electrical4u.com/electrical-mcq.php?subject=power-electronics&page=1">Power Electronics</a></p> 
                    <p style='text-align:center;'><a href="https://www.electrical4u.com/electrical-mcq.php?subject=control-systems&page=1">Control Systems</a></p>
                    <p style='text-align:center;'><a href="https://www.electrical4u.com/electrical-mcq.php?subject=illumination&page=1">Illumination</a></p>     
                    </div>
                  </div>
                </div>
            
              </div>

              <!-- Direct website link -->

              <div class='content-fristone'>
                <div class="row col-md-12">
                  <div class="col-sm-3 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body ml-n3 mb-n4">
                      <h1 style='font-size:1.4rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>CareerRide</h1> 
                      <p style='text-align:center;'><a href="https://www.careerride.com/Electronics-and-Communication-engineering.aspx">Click to visit</a></p>      
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body ml-n3 mb-n4">
                      <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>indiabix</h1> 
                      <p style='text-align:center;'><a href="https://www.indiabix.com/electronics-and-communication-engineering/questions-and-answers/">Click to visit</a></p>      
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body ml-n3 mb-n4">
                      <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>Pinoybix</h1> 
                      <p style='text-align:center;'><a href="https://pinoybix.org/2014/10/mcqs-in-electronics-systems-and-technologies.html">Click to visit</a></p>      
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body ml-n3 mb-n4">
                      <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;margin-right:-15px;'>GrabStudy</h1> 
                      <p style='text-align:center;'><a href="https://www.grabstudy.com/Electronics-and-Communication/Electronics-and-Communication-Engineering.php">Click to visit</a></p>      
                      </div>
                    </div>
                  </div>
              </div>

          
            <!-- Tutorials -->
            <div class="content-second">
            <h1 style='font-size:3rem;color:#1F1839;text-align:center;margin-top:3rem;margin-bottom:2rem;'>Video Lectures</h1>
            <div class="row col-md-12">
            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>PLC</h1>           
                <div class="container-frame">
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/Aaeab-zmY_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>PCE</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/dIuq8oqCZ2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Basic Science</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/XbJipLzbVC0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Embeded Systems</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/PDYuYGHT668" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Consumer Electronics</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/TqZ2pZTxj5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Power Electronics</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/pZJiumiGpZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Applied Electronics</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/rXOOzIJc-lM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Introduction To Electronics</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/vUkO3RmiGHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Wireless communication</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/kxOUCDjHg_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>Digital communication</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/Z0Ylnk8zXRo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>English</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/eoEPanqesYM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>

            <div class="col-sm-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                <h1 style='font-size:1.5rem;margin-top:-25px;text-align:center;color:#b66dff;'>ETE</h1>           
                <iframe class="myiframe mt-1 mb-n4 mr-n4 ml-n4" width="230" height="130" src="https://www.youtube.com/embed/0KTd8cIpiPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <script src="../assets/js/jquery.newsTicker.js"></script>
    <script>var nt_example1 = $('#nt-example1').newsTicker({
    row_height: 100,
    max_rows: 3,
    duration: 3000,
    prevButton: $('#nt-example1-prev'),
    nextButton: $('#nt-example1-next')
    });</script>
  </body>
</html>