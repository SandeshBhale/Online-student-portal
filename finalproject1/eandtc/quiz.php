<?php
session_start();

if(!isset($_SESSION['username'])){
  header('location: ../index.php');  
}

include("dbcon.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
$rs=mysqli_query($con,"select * from mst_question where test_id=$tid");
if(isset($subid) && isset($testid))
{
$_SESSION['sid']=$subid;
$_SESSION['tid']=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION['sid']) || !isset($_SESSION['tid']))
{
	header("location: showtest.php");
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
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Online Test</span>
                <i class="mdi mdi-laptop menu-icon"style="color:#b66dff;"></i>
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
              <div class="row">
                <div class="col-md-12 mx-auto">
                <?php
                  include("header.php");
                  include("dbcon.php");



                  if(isset($subid) && isset($testid))
                  {
                  $_SESSION['sid']=$subid;
                  $_SESSION['tid']=$testid;
                  header("location:quiz.php");
                  }
                  if(!isset($_SESSION['sid']) || !isset($_SESSION['tid']))
                  {
                    header("location:showtest.php");
                  }

                  $query="select * from mst_question";

                  $rs=mysqli_query($con,"select * from mst_question where test_id=$tid",$cn) or die(mysqli_error());
                  if(!isset($_SESSION['qn']))
                  {
                    $_SESSION['qn']=0;
                    mysqli_query($con, "delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
                    $_SESSION['trueans']=0;
                    
                  }
                  else
                  {	
                      if($submit=='Next Question' && isset($ans))
                      {
                          mysqli_data_seek($rs,$_SESSION['qn']);
                          $row= mysqli_fetch_row($rs);	
                          mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysqli_error());
                          if($ans==$row[8])
                          {
                                $_SESSION['trueans']=$_SESSION['trueans']+1;
                          }
                          $_SESSION['qn']=$_SESSION['qn']+1;
                      }
                      else if($submit=='Get Result' && isset($ans))
                      {
                          mysqli_data_seek($rs,$_SESSION['qn']);
                          $row= mysqli_fetch_row($rs);
                          
                          mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]','$ans')") or die(mysqli_error());
                          if($ans==$row[8])
                          {
                                $_SESSION['trueans']=$_SESSION['trueans']+1;
                          }
                          echo "<div class='card-box'>";
                          echo "<h1 class='text-center'>Result</h1>";
                          $_SESSION['qn']=$_SESSION['qn']+1;
                          echo "<table class='table table-borderless w-25 mx-auto mt-2 h3'><tr class=tot><td>Total Questions : <td> $_SESSION[qn]";
                          echo "<tr class=tans><td>Correct Answer : <td>".$_SESSION['trueans'];
                          $w=$_SESSION['qn']-$_SESSION['trueans'];
                          echo "<tr class=fans><td>Wrong Answer : <td> ". $w;
                          echo "</table>";
           
                          $id=$_SESSION['id'];
                          $emailsearch= " SELECT * FROM signup WHERE id='$id' ";
                          $query = mysqli_query($con,$emailsearch);
                          $emailcount = mysqli_num_rows($query);
                          $row = mysqli_fetch_array($query);
                          $login=$_SESSION['username'];
                          $branch = $row['branch'];
                          mysqli_query($con,"insert into mst_result(login,test_id,test_date,score,branch) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans],'$branch')") or die(mysqli_error());
                          echo "<h1 align=center style='font-size:1.5rem;margin-top:15px;'><a class='text-decoration-none'href=result.php> View Result</a> </h1>";
                          unset($_SESSION['qn']);
                          unset($_SESSION['sid']);
                          unset($_SESSION['tid']);
                          unset($_SESSION['trueans']);
                          exit;
                      }
                  }
                  $rs=mysqli_query($con,"select * from mst_question where test_id=$tid",$cn) or die(mysqli_error());
                  if($_SESSION['qn']>mysqli_num_rows($rs)-1)
                  {
                  // unset($_SESSION['qn']);
                  echo "<h1 class=head1>Some Error  Occured</h1>";
                  // session_destroy();
                  echo "Please <a href=showtest.php> Start Again</a>";

                  exit;
                  }
                  mysqli_data_seek($rs,$_SESSION['qn']);
                  $row= mysqli_fetch_row($rs);
                  echo"<div class='card-box bg-white'>";
                  echo "<form name=myfm method=post action=quiz.php>";
                  echo "<table class='ml-0 mt-n1 table table-borderless'style='font-size:1rem;'>";
                  $n=$_SESSION['qn']+1;
                  echo "<tr><td colspan='2'><span class='pl-3 display-6 font-weight-bold text-primary'>Question Number :  ".  $n ."</td></tr>";
                  echo "<tr><td colspan='2'><span class='pl-3 h4 font-weight-bold'>$row[2]</td></tr>";
                  echo "<tr><td><span class='pl-3'><input type=radio name=ans value=1></span><span class='pl-2 h6'>1. $row[4]</span></td> <td><span class='pl-3'><input type=radio name=ans value=2></span><span class='pl-2 h6'>2. $row[5]</span></td></tr>";                
                  echo "<tr><td><span class='pl-3'><input type=radio name=ans value=3></span><span class='pl-2 h6'>3. $row[6]</span></td>  <td><span class='pl-3'><input type=radio name=ans value=4></span><span class='pl-2 h6'>4. $row[7]</span></td></tr>";
             

                  if($_SESSION['qn']<mysqli_num_rows($rs)-1)
                  echo "<tr><td colspan='2'><input type=submit name=submit value='Next Question' class='btn btn-info btn-sm '></form>";
                  else
                  echo "<tr><td colspan='2'><input type=submit name=submit value='Get Result'class='btn btn-success btn-sm '></form>";
                  echo "</table>";
                  echo"</div>";
                  ?>
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