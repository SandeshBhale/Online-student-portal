<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: ../index.php');  
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | HOME</title>
    <link rel="stylesheet"href="../css/main.css"></link>
    <link rel="stylesheet"href="../css/slider.css"></link>
    <?php 
        include('links.php');
    ?>
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
    <input type="checkbox" id="check">
    <header>
      <div class="left">
        <h3>Online Student <span>Portal</span></h3>
      </div>
      <div class="right">
        <a href="logout.php" class="logoutbutton">Logout</a>
      </div>
    </header>
    <div class="main">
      <div class="navbar">
        <img src="<?php echo $row['image'];  ?>" class="profilephoto" alt="">
        <i class="fa fa-bars navbutton"onclick="pass1()"></i>
      </div>
      <div class="navicons">
        <a href="profileupdate.php">Profile<span><i class="fas fa-user"></i></span></a>
        <a href="#"class="active"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="newevents.php"><i class="fas fa-calendar-alt"></i><span>New Events</span></a>
        <a href="coer.php"><i class="fas fa-th"></i><span>E-Resources</span></a>
        <a href="#"><i class="fas fa-laptop-code"></i><span>Online Test</span></a>
        <a href="qbco.php"><i class="fas fa-question-circle"></i><span>Query Board</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Time Table</span></a>
        <a href="#"><i class="fas fa-search"></i><span>Curriculum Search</span></a>
        <a href="#"><i class="fas fa-chalkboard-teacher"></i><span>Faculty</span></a>
      </div>
    </div>
    <div class="sidebar">
      <div class="profile">
        <div class="profilefphoto1">
          <img src="<?php echo $row['image'];  ?>" class="profilephoto1" alt="profilephoto">
        </div>
        <div class="profiletext">
          <h4><?php echo $row['username']; ?></h4>
        </div>
      </div><br>
      <a href="profileupdate.php">Profile<span><i class="fas fa-user"></i></span></a>
      <a href="#"class="active">Home<span><i class="fas fa-home"></i></span></a>
      <a href="newevents.php">New Events<span><i class="fas fa-calendar-alt"></i></span></a>
      <a href="coer.php">E-Resources<span><i class="fas fa-book"></i></span></a>
      <a href="#">Online Test<span><i class="fas fa-laptop-code"></i></span></a>
      <a href="qbco.php">Query Board<span><i class="fas fa-question-circle"></i></span></a>
      <a href="#">Time Table<span><i class="fas fa-table"></i></span></a>
      <a href="#">Curriculum Search<span><i class="fas fa-search"></i></span></a>
      <a href="#">Faculty<span><i class="fas fa-chalkboard-teacher"></i></span></a>
      <span style="display:block;padding-top:150px"></span>
    </div>
    <!-- <div class="homepage-card-container">
      <div class="cards-container">
        <div class="card-01"><p><h3>Total Students<h3></p><img class="circle"src="../images/circle.svg"/></div>
        <div class="card-01"id="card2"><p><h3>Total Teachers<h3></p><img class="circle"src="../images/circle.svg"/></div>
        <div class="card-01"id="card3"><p><h3>Students Online<h3></p><img class="circle"src="../images/circle.svg"/></div>
      </div>
    </div> -->
    <?php
      $query = "SELECT id FROM signup ORDER BY id";  
      $query_run = mysqli_query($con, $query);
      $data = mysqli_num_rows($query_run);
      $query = "SELECT id FROM teacher ORDER BY id";  
      $query_run = mysqli_query($con, $query);
      $data1 = mysqli_num_rows($query_run);
    ?>
    <div class="homepage-card-container">
      <div class="cards-container">
        <div class="card-01"><br> <p><h3>Total Students<h3> <?php echo $data ?></p><img class="circle"src="../images/circle.svg"/></div>
        <div class="card-02"><br> <p><h3>Total Teachers<h3><?php echo $data1 ?></p><img class="circle"src="../images/circle.svg"/></div>
        <div class="card-03">
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
          <br><p><h3>Students Online<h3></p><?php echo $count_user_online ?><img class="circle"src="../images/circle.svg"/>
        </div>
      </div>
      <div class="cards-container">
        <div class="card-04">
          <div class="slider">
            <input type="radio" name="slider" title="slide1" checked="checked" class="sliderbutton"/>
            <input type="radio" name="slider" title="slide2" class="sliderbutton"/>
            <input type="radio" name="slider" title="slide3" class="sliderbutton"/>
            <input type="radio" name="slider" title="slide4" class="sliderbutton"/>
            <div class="sliderinner">
              <div class="slidercontent">
                <h2 class="slidercaption">WHO ARE WE</h2>
                <p class="slidertext">We are a group of highly motivated students and we are trying to solve the daily life problems of students which hinder them to be successful in their lives.</p>
              </div>
              <div class="slidercontent">
                <h2 class="slidercaption">WHAT WE PROVIDE</h2>
                <p class="slidertext">Online student portal is a web application which is useful for learners to choose right information. OSP provides services like, 
                  E-Resources, online Test, Query Board, news and events.
                </p>
              </div>
              <div class="slidercontent">
                <h2 class="slidercaption">OUR MISSION</h2>
                <p class="slidertext">We Aims to provide the student portal to college for maintain and keep track on students progress.
                  The main purpose behind developing student portal is to make the process of learning online more simpler.
                  Student become up-to-date by accessing student portal.
              </p>
              </div>
              <div class="slidercontent">
                <h2 class="slidercaption">Rushikesh</h2>
                <p class="slidertext"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-05">
          <p><b>Notice Board</b></p>
          <div class="marqueecontainer">
            <div class="holder">
              <ul id="ticker01">
                <?php  
                    $query = mysqli_query($con,"SELECT * FROM noticeboard");
                    while($row = mysqli_fetch_array($query)){
                ?>
                            <li><a style="text-decoration:none;color:royalblue;"href="<?php echo $row['file'] ?>"><?php echo $row['notice']?></a><br><span><?php $date = $row['date']; $date = strtotime($date); $date = date('d-m-Y',$date); echo $date ?></span></li>
                <?php } ?>
              </ul>
            </div>    
          </div>
        </div>
      </div>
      <div class="cards-container">
        <div class="card-06">s</div>
      </div>
    </div>
    <script type="text/javascript">
    // function ready(){
    //     document.querySelector(".navbutton").click(function(){
    //     document.querySelector(".navicons").toggleClass("active");
    // }
    // window.onload=function(){
    //     document.querySelector(".navbutton").click(function(){
    //         document.getElementById(".navicons").toggleClass("active");
    //     });
    // };
    // window.onload=function(){
    //     var a= document.querySelector(".navbutton");
    //     addEventListener("click",function(){
    //         document.querySelector(".navicons").toggleAttribute("active");
    //     })
    // };
        function pass1(){
            var ele=document.querySelector(".navicons");
            ele.classList.toggle("active");
        }
        // function pass1(){
        //   window.open("./sample.php","top");
        // }
    </script>
  <script src="../js/style.js" ></script>
  </body>
</html>