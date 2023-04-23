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
  </head>
    <?php
            include 'dbcon.php';
            $id=$_SESSION['id'];
            $emailsearch= " SELECT * FROM signup WHERE id='$id' ";
            $query = mysqli_query($con,$emailsearch);
            $emailcount = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
    ?>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center  text-osp">
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
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Home</span>
                <i class="mdi mdi-home menu-icon"style="color:#b66dff;"></i>
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
              <a class="nav-link" href="orej.php">
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
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white my-cards">
                  <div class="card-body">
                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-4 mt-3">Total Students<i class="mdi mdi-account mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo $data ?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white my-cards">
                  <div class="card-body">
                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-4 mt-3">Total Teachers<i class="mdi mdi-account-star mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo $data1 ?></h2>                   
                  </div>
                </div>
              </div>
              <?php
                $session= session_id();
                $time= time();
                $time_check= $time-10;  
                $tbl_name  = "online_users";        
                $sql = "SELECT * FROM $tbl_name WHERE session='$session'";
                $result = mysqli_query($con, $sql);
                $count  = mysqli_num_rows($result); 
                if ($count == "0") { 
                  $sql1  = "INSERT INTO $tbl_name(session, time)VALUES('$session', '$time')"; 
                  $result1 = mysqli_query($con, $sql1);
                } else {
                  $sql2 = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'"; 
                  $result2 = mysqli_query($con, $sql2); 
                }
                $sql3 = "SELECT * FROM $tbl_name";
                $result3  = mysqli_query($con, $sql3); 
                $count_user_online = mysqli_num_rows($result3);
                $sql4 = "DELETE FROM $tbl_name WHERE time<$time_check"; 
                $result4 = mysqli_query($con, $sql4); 
              ?> 
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white my-cards">
                  <div class="card-body">
                    <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-4 mt-3">Visitors Online <i class="mdi mdi-counter mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo $count_user_online ?></h2>                   
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class=" col-md-7 grid-margin stretch-card" style="height: 350px;">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix" >
                      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                        <div class="carousel-inner ">
                          <div class="carousel-item active text-center my-captions1"style="height:270px;">
                              <h2 class="text-success heading1">WHO ARE WE</h2>
                              <h4 class="text-dark heading2">We are a group of highly motivated students and we are trying to solve the daily life problems of students which hinder them to be successful in their lives.</h4>
                          </div>
                          <div class="carousel-item text-center my-captions2">
                              <h2 class="text-success heading1">WHAT WE PROVIDE</h2>
                              <h4 class="text-dark heading2">Online student portal is a web application which is useful for learners to choose right information. OSP provides services like, E-Resources, online Test, Query Board, news and events.</h4>
                          </div>
                          <div class="carousel-item text-center my-captions3">
                              <h2 class="text-success heading1">OUR MISSION</h2>
                              <h4 class="text-dark heading2">We Aims to provide the student portal to college for maintain and keep track on students progress. The main purpose behind developing student portal is to make the process of learning online more simpler. Student become up-to-date by accessing student portal.</h4>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card" style="height: 350px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center mt-n4 pb-n1">Notice Board</h4>
                    <div class="marqueecontainer">
                                    <ul id="nt-example1">
                                      <?php  
                                          $query = mysqli_query($con,"SELECT * FROM noticeboard ORDER BY id DESC");
                                          while($row = mysqli_fetch_array($query)){
                                      ?>
                                      <li style="line-height:1.4"class="pt-1 pb-1"><a style="text-decoration:none;color:royalblue;"href="<?php echo $row['file'] ?>"><?php echo $row['notice']?></a><br><span><?php $date = $row['date']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></span></li>
                                      <?php } ?>
                                    </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-4">
                      <div class="col text-center">
                        <h1>MEET THE TEAM</h1>
                      </div>
                    </div>
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/team/shivam.jpg" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                            <div class="">
                                                <h5 class="pt-3">SHIVAM INGLE</h5>
                                                <p class="text-muted">@PROJECT LEADER <span>| </span><span class="text-pink">1815530024</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/team/sandesh.jpg"class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                            <div class="">
                                                <h5 class="pt-3">SANDESH BHALE</h5>
                                                <p class="text-muted">@PROJECT MEMBER <span>| </span><span class="text-pink">1915530006</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/team/siddhu.jpg"class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                            <div class="">
                                                <h5 class="pt-3">SIDDHIVINAYAK DAHALE</h5>
                                                <p class="text-muted">@PROJECT MEMBER <span>| </span><span class="text-pink">1815530010</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="text-center card-box">
                                        <div class="member-card pt-2 pb-2">
                                            <div class="thumb-lg member-thumb mx-auto"><img src="../assets/images/team/rushi.jpg" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                            <div class="">
                                                <h5 class="pt-3">RUSHIKESH KADAM</h5>
                                                <p class="text-muted">@PROJECT MEMBER <span>| </span><span class="text-pink">1915530009</span></p>
                                            </div>
                                            <ul class="social-links list-inline">
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            if(isset($_POST['submit'])){
              include 'dbcon.php';
              $id=$_SESSION['id'];
              $emailsearch= " SELECT * FROM signup WHERE id='$id' ";
              $query = mysqli_query($con,$emailsearch);
              $emailcount = mysqli_num_rows($query);
              $row = mysqli_fetch_array($query);
              $name = $_POST['name'];
              $email = $row['email'];
              $message = $_POST['message'];
              $subject = $_POST['subject'];
              $content="From: $name \n Email: $email \n Message: $message";
              $recipient = "sspiparbhani5@gmail.com";
              $mailheader = "From: $email \r\n";
              if(mail($recipient, $subject, $content, $mailheader)){
                echo"<script>alert('Message Sent Successfully !');</script>";
              }else{
                echo"<script>alert('Message Sending Failed..');</script>";
              }
            }  
            ?>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-5">
                      <div class="col text-center">
                        <h1>CONTACT US</h1>
                      </div>
                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST"class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name"class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email"class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Subject</label>
                        <input type="text" name="subject"class="form-control" id="exampleInputCity1" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Message</label>
                        <textarea class="form-control" name="message"id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary btn-fw"name="submit">Submit</button>                      
                    </form>
                  </div>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-12 gird-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <footer class="mainfooter bg-light mt-0 " role="contentinfo">
                      <div class="footer-middle ">
                          <div class="row">
                            <div class="col-md-3 col-sm-4 ">
                              <div class="footer-pad">
                                <h4>Find  Us</h4>
                                <ul class="list-unstyled">
                                  <li><a>MSPM's Shri Shivaji Polytechnic Institute, Shri Shivaji College Campus, Vasmat Road [NH 222],
                                    arbhani, Maharashtra 431401</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                              <div class="footer-pad">
                                <h4>Call Us</h4>
                                <ul class="list-unstyled">
                                  <li>(02452) 234047, 234112</li>
                                  <li>(+91) 808 727 1670</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                              <div class="footer-pad">
                                <h4>Mail Us</h4>
                                <ul class="list-unstyled">
                                  <li><a href="#">principal.sspi@gmail.com</a></li>
                                  <li><a href="#">sspiparbhani5@gmail.com</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <h4>Follow Us</h4>
                                  <ul class="social-network social-circle">
                                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>				
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-12 copy">
                            <p class="footer-heart text-center">
                              Made with <g-emoji class="g-emoji" alias="heart" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png">
                              <img class="emoji" alt="heart" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"></g-emoji> by Our Team
                            </p>
                          </div>
                        </div>
                      </div>
                    </footer>
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