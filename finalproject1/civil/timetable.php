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
    <title>OSP | TIMETABLE</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <style>
   .filterElements {
      float: left;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-size: 20px;
      color: #ffffff;
      width: 100px;
      line-height: 100px;
      text-align: center;
      margin: 2px;
      display: none;
   }
   .show {
      display: block;
   }
   .container {
      margin-top: 20px;
      overflow: hidden;
   }
   .btn {
      border: none;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-size: 14px;
      outline: none;
      padding: 12px 16px;
      background-color: #d6e5ec;
      cursor: pointer;
   }
   .btn.active {
      color: white;
   }
   @media(max-width:412px){
    .container{
      display:inline-block;
      width:100% !important;
    }
    .container .second{
      margin-top:-5rem !important;
    }
   }
</style>
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
          <a class="navbar-brand brand-logo"style="color:#b66dff;" href="civil.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>
          <a class="navbar-brand brand-logo-mini"style="color:#b66dff;" href="civil.php"><i class="mdi mdi-book-open-page-variant mr-3"></i><h3 class="pl-2 d-inline-block font-weight-bold">OSP</h3 ></a>        
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
              <a class="nav-link" href="civil.php">
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
              <a class="nav-link" href="ceer.php">
                <span class="menu-title">E-Resources</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orce.php">
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
              <a class="nav-link" href="qbce.php">
                <span class="menu-title">Query Board</span>
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Time Table</span>
                <i class="mdi mdi-table-large menu-icon"style="color:#b66dff;"></i>
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
            <div class="filterBtns row">
                <button style="border-radius:0%;"class="btn active bg-primary text-white mr-2 mb-1 col-md-3 mx-auto"onclick="filterSelection('all')">Show all</button>
                <button style="border-radius:0%;"class="btn bg-primary text-white mr-2 mb-1 col-md-3 mx-auto" onclick="filterSelection('thirdyear')">Third Year</button>
                <button style="border-radius:0%;"class="btn bg-primary text-white mr-2 mb-1 col-md-3 mx-auto" onclick="filterSelection('secondyear')">Second Year</button>
                <button style="border-radius:0%;"class="btn bg-primary text-white mr-2 mb-1 col-md-3 mx-auto" onclick="filterSelection('firstyear')">First Year</button>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="filterElements thirdyear w-100 bg-primary mt-3">
                        <div class="card p-5"style="border-radius:0;">
                            <table class="table table-bordered table-hover table-responsive-md table-responsive-lg table-responsive-xl">
                                <thead>
                                <tr>
                                    <th><b>Day/Time</b></th>
                                    <th><b>10:00-11:00</b></th>
                                    <th><b>11:00-12:00</b></th>
                                    <th><b>12:00-1:00</b></th>
                                    <th><b>1:00-1:30</b></th>
                                    <th><b>1:30-2:30</b></th>
                                    <th><b>2:30-3:30</b></th>
                                    <th><b>3:30-4:30</b></th>
                                    <th><b>4:30-5:30</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>MON</b></td>
                                    <td>CAA</td>
                                    <td>ETC</td>
                                    <td>SWM</td>                     
                                    <td>R</td>                     
                                    <td>MRS</td>                     
                                    <td colspan="2">CPE</td>                     
                                    <td>LIB</td>                     
                                                        
                                </tr>
                                <tr>
                                    <td><b>TUE</b></td>
                                    <td>CAA</td>
                                    <td>MAN</td>
                                    <td>SWM</td>                     
                                    <td>E</td>                     
                                    <td>EDE</td>                     
                                    <td>MRS</td>                                                     
                                    <td colspan="2">SWM B1 & CMA B2</td>                                          
                                </tr>
                                <tr>
                                    <td><b>WED</b></td>
                                    <td>MRS</td>
                                    <td colspan="2">SWM</td>                
                                    <td>C</td>                     
                                    <td>CMA</td>                     
                                    <td>EDP</td>                     
                                    <td colspan="2">CPE</td>                                         
                                </tr>
                                <tr>
                                    <td><b>THU</b></td>
                                    <td>ETC</td>                
                                    <td>SWM</td>                
                                    <td>MAN</td>                
                                    <td>E</td>                     
                                    <td colspan="2">EDP-B1 & MRS-B2</td>                                                           
                                    <td colspan="2">CAA B1 & B2</td>                                                           
                                </tr>
                                <tr>
                                    <td><b>FRI</b></td>
                                    <td>CMA</td>
                                    <td>ETC</td>
                                    <td>CAA</td>                     
                                    <td>S</td>                     
                                    <td colspan="2">EDP B2 & MRS B1</td>                    
                                    <td colspan="2">CPE</td>                 
                                </tr>
                                <tr>
                                    <td><b>SAT</b></td>
                                    <td>CAA</td>
                                    <td>MAN</td>
                                    <td>MRS</td>                     
                                    <td>S</td>                     
                                    <td colspan="2">SWM B2 & CMA B1</td>                                      
                                    <td>P.T.</td>                     
                                    <td>W.T.</td>                     
                                </tr>
                                </tbody>
                            </table>
                            <div class="container">
                              <table class="mt-3 table table-bordered table-hover table-responsive-md table-responsive-lg table-responsive-xl first">
                                  <thead>
                                    <tr>
                                        <th><b>Subject Abbrevation</b></th>
                                        <th><b>Subject Name</b></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>MAN</td>
                                      <td>MANAGEMENT</td>
                                    <tr>
                                    <tr>
                                      <td>SWP</td>
                                      <td>SOLID WASTE MANAGEMENT</td>
                                    <tr>
                                    <tr>
                                      <td>CAA</td>
                                      <td>CONTRACTS AND ACCOUNTS</td>
                                    <tr>
                                    <tr>
                                      <td>MRS</td>
                                      <td>MAINTENACE & REPAIRS OF STRUCTURES</td>
                                    <tr>
                                    <tr>
                                      <td>ETC</td>
                                      <td>EMERGING TRENDS IN CIVIL ENGINEERING</td>
                                    <tr>
                                    <tr>
                                      <td>CPE</td>
                                      <td>CAPSTONE PROJECT AND EXECUTION</td>
                                    <tr>
                                    <tr>
                                      <td>EDP</td>
                                      <td>ENTREPRENUERSHIP DEVELOPMENT</td>
                                    <tr>
                                    <tr>
                                      <td>CMA</td>
                                      <td>CONSTRUCTION MANAGEMENT</td>
                                    <tr>
                                  </tbody>
                              </table>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                              <table class="mt-3 table table-bordered table-hover table-responsive-md table-responsive-lg table-responsive-xl second">
                                <thead>
                                  <tr>
                                      <th><b>NAME OF THE STAFF</b></th>
                                      <th><b>Subject</b></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Mrs. Navtakke S.</td>
                                    <td>MAN</td>
                                  <tr>
                                  <tr>
                                    <td>Mr. Bendsure A.R.</td>
                                    <td>CMA</td>
                                  <tr>
                                  <tr>
                                    <td>Mr. Ansari M.A.</td>
                                    <td>ETC</td>
                                  <tr>
                                  <tr>
                                    <td>Mr. Rankhamb P.W.</td>
                                    <td>MRS</td>
                                  <tr>
                                  <tr>
                                    <td>Ms. Sanghai S.S.</td>
                                    <td>EDE, CPE</td>
                                  <tr>
                                  <tr>
                                    <td>Mr. Kadam A.H.</td>
                                    <td>CAA</td>
                                  <tr>
                                  <tr>
                                    <td>Ms. Sawane S.N.</td>
                                    <td>SWM</td>
                                  <tr>
                                </tbody>
                              </table>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="filterElements secondyear w-100 bg-primary mt-3">
                        <div class="card p-5"style="border-radius:0;">
                            <table class="table table-bordered table-responsive-md table-responsive-lg table-responsive-xl">
                                <thead>
                                <tr>
                                    <th><b>Day/Time</b></th>
                                    <th><b>10:00-11:00</b></th>
                                    <th><b>11:00-12:00</b></th>
                                    <th><b>12:00-1:00</b></th>
                                    <th><b>1:00-1:30</b></th>
                                    <th><b>1:30-2:30</b></th>
                                    <th><b>2:30-3:30</b></th>
                                    <th><b>3:30-4:30</b></th>
                                    <th><b>4:30-5:30</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>MON</b></td>
                                    <td>DCC</td>
                                    <td>SEN</td>
                                    <td>MIC</td>                     
                                    <td>R</td>                     
                                    <td colspan="2">MIC-PR</td>                                        
                                    <td>GAD</td>                     
                                    <td>JPR</td>                     
                                </tr>
                                <tr>
                                    <td><b>TUE</b></td>
                                    <td>MIC</td>
                                    <td colspan="2">SEN-PR</td>                   
                                    <td>E</td>                     
                                    <td>DCC</td>                     
                                    <td>JPR</td>                     
                                    <td colspan="2">DCC-PR</td>                                   
                                </tr>
                                <tr>
                                    <td><b>WED</b></td>
                                    <td>DCC</td>
                                    <td colspan="2">SEN-PR</td>                   
                                    <td>C</td>                     
                                    <td>JPR</td>                     
                                    <td colspan="2">GAD-PR</td>                     
                                    <td>SPORT</td>                     
                                </tr>
                                <tr>
                                    <td><b>THU</b></td>
                                    <td>SEN</td>
                                    <td>DCC</td>
                                    <td>JPR</td>                     
                                    <td>E</td>                     
                                    <td colspan="2">JPR-PR</td>                                        
                                    <td colspan="2">GAD-PR</td>                                          
                                </tr>
                                <tr>
                                    <td><b>FRI</b></td>
                                    <td>SEN</td>
                                    <td>GAD</td>
                                    <td>MIC</td>                     
                                    <td>S</td>                     
                                    <td colspan="2">DCC-PR</td>                                       
                                    <td colspan="2">MIC-PR</td>                                         
                                </tr>
                                <tr>
                                    <td><b>SAT</b></td>
                                    <td>MIC</td>
                                    <td colspan="2">JPR-PR</td>                    
                                    <td>S</td>                     
                                    <td>DCC</td>                     
                                    <td>SEN</td>                     
                                    <td>P.T.</td>                     
                                    <td>W.T.</td>                     
                                </tr>
                                </tbody>
                            </table>
                            <div class="container">
                              <table class="mt-3 table table-bordered table-hover table-responsive-md table-responsive-lg table-responsive-xl">
                                  <thead>
                                    <tr>
                                        <th><b>Subject Abbrevation</b></th>
                                        <th><b>Subject Name</b></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>JPR</td>
                                      <td>JAVA PROGRAMMING</td>
                                    <tr>
                                    <tr>
                                      <td>SEN</td>
                                      <td>SOFTWARE ENGINEERING</td>
                                    <tr>
                                    <tr>
                                      <td>DCC</td>
                                      <td>DATA COMMUNICATION & COMPUTER NETWORK</td>
                                    <tr>
                                    <tr>
                                      <td>MIC</td>
                                      <td>MICROPROCESSOR</td>
                                    <tr>
                                    <tr>
                                      <td>GAD</td>
                                      <td>GUI APPLICATION DEVELOPMENT USING VB.NET</td>
                                    <tr>
                                  </tbody>
                              </table>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                              <table class="mt-3 table table-bordered table-hover table-responsive-md table-responsive-lg table-responsive-xl">
                                <thead>
                                  <tr>
                                      <th><b>NAME OF THE STAFF</b></th>
                                      <th><b>Subject</b></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>New Staff</td>
                                    <td>MIC</td>
                                  <tr>
                                  <tr>
                                    <td>Prof. Rathod P.S.</td>
                                    <td>GAD</td>
                                  <tr>
                                  <tr>
                                    <td>Prof. Shelke M.G.</td>
                                    <td>DCC</td>
                                  <tr>
                                  <tr>
                                    <td>Prof. Thawre K.B.</td>
                                    <td>SEN</td>
                                  <tr>
                                  <tr>
                                    <td>Prof. Shinde S.S.</td>
                                    <td>JPR</td>
                                  <tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="filterElements firstyear w-100 bg-primary mt-3">
                        <div class="card"style="border-radius:0;">
                            <table class="table table-bordered table-responsive-md table-responsive-lg table-responsive-xl">
                                <thead>
                                <tr>
                                    <th><b>Day/Time</b></th>
                                    <th><b>10:00-11:00</b></th>
                                    <th><b>11:00-12:00</b></th>
                                    <th><b>12:00-1:00</b></th>
                                    <th><b>1:00-1:30</b></th>
                                    <th><b>1:30-2:30</b></th>
                                    <th><b>2:30-3:30</b></th>
                                    <th><b>3:30-4:30</b></th>
                                    <th><b>4:30-5:30</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>MON</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                <tr>
                                    <td><b>TUE</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                <tr>
                                    <td><b>WED</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                <tr>
                                    <td><b>THU</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                <tr>
                                    <td><b>FRI</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                <tr>
                                    <td><b>SAT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                    <td></td>                     
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
    filterSelection("all");
    function filterSelection(c) {
        var x, i;
        x = document.querySelectorAll(".filterElements");
        if (c == "all") c = "";
        Array.from(x).forEach(item => {
            removeActiveClass(item, "show");
            if (item.className.indexOf(c) > -1) addActiveClass(item, "show");
        });
    }
    function addActiveClass(ele, name) {
        var i, arr1, arr2;
        arr1 = ele.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                ele.className += " " + arr2[i];
            }
        }
    }
    function removeActiveClass(ele, name) {
        var i, arr1, arr2;
        arr1 = ele.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        ele.className = arr1.join(" ");
    }
    var filterBtns = document.querySelector(".filterBtns");
    var btns = filterBtns.getElementsByTagName("button");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
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