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
    <title>OSP | QUERY BOARD</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/qbco.css"> -->
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <style>
           
    .ans_sub{
        display: none;
        padding: 0 10px;
        height: 30px;
        line-height: 30px;
    }
    .pop{
        display: none;
        text-align: center;
        margin: 195.5px auto;
        font-size: 12px;
    }
    body {font-family: Arial, Helvetica, sans-serif;}
      .comment-form-container {
      background: #F0F0F0;
      border: #e0dfdf 1px solid;
      padding: 20px;
      border-radius: 2px;
    }

    .input-row {
      margin-bottom: 20px;
    }

    .input-field {
      width: 100%;
      border-radius: 2px;
      padding: 10px;
      border: #e0dfdf 1px solid;
    }

    .btn-submit {
      padding: 10px 20px;
      background: linear-gradient(to right, #da8cff, #9a55ff);
      border: #1d1d1d 0px solid;
      color: #f0f0f0;
      font-size: 0.9em;
      width: 100%;
      /* border-radius: 1px; */
        cursor:pointer;
        font-family: "ubuntu-bold", sans-serif;
    }
    .btn-submit:hover{
      opacity: 0.8;
    }
    ul {
      list-style-type: none;
    }

    .comment-row {
      border-bottom: #e0dfdf 1px solid;
      margin-bottom: 15px;
      padding: 15px;
      font-weight: bold;
    }
    .comment-row1 {
      border-bottom: #e0dfdf 1px solid;
      margin-bottom: 15px;
      padding: 15px;
      font-size: 0.9em;
    }

    .outer-comment {
      background: #F0F0F0;
      padding: 20px;
      border: #dedddd 1px solid;
      margin-top: 10px;
    }

    span.commet-row-label {
      font-style: italic;
    }

    span.posted-by {
      color: #09F;
    }

    .comment-info {
      font-size: 1em;
    }
    .comment-text {
        margin: 10px 0px;
        font-size: 1.3em;
    }

    .btn-reply {
      font-size: 1rem;
        /* text-decoration: underline; */
        color: #CF19A1;
        cursor:pointer;
    }
    #comment-message {
        margin-left: 20px;
        color: #189a18;
        display: none;
    }
        </style>
  </head>
    <?php
            include 'dbcon.php';
            $id=$_SESSION['id'];
            $emailsearch= " SELECT * FROM signup WHERE id='$id' ";
            $query = mysqli_query($con,$emailsearch);
            $emailcount = mysqli_num_rows($query);
            $row = mysqli_fetch_array($query);
    ?>
  <body id="ask">
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
              <a class="nav-link" href="#">
                <span class="menu-title"style="color:#b66dff;font-weight:bold;">Query Board</span>
                <i class="mdi mdi-comment-question-outline menu-icon"style="color:#b66dff;"></i>
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
          <div class="content-wrapper pl-5 pr-5">
            <div class="comment-form-container bg-white">
              <form id="frm-comment">
                <div class="input-row"style="font-size:0.8rem;">
                    <input required type="hidden" name="comment_id" id="commentId"placeholder="Name" /> <input required class="input-field form-control"type="text" name="name" id="name" placeholder="Full Name"/>
                </div>
                <div required class="input-row" style="margin-top: -15px;">
                  <label for="subject"></label>
                  <select name="subject" class="form-control"style="width: 100%; padding: 12px 8px; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;font-size:0.8rem;"required>                                                              
                    <optgroup label="First Semester">
                      <option>Select Subject....</option>
                      <option value="ICT">Fundamental of ICT</option>
                      <option value="EGG">Engineering Graphics</option>
                      <option value="ENG">English</option>
                      <option value="BSC">Bsic Science (Physics & Chemistry)</option>
                      <option value="BMS">Basic Mathematics</option>
                    </optgroup>

                    <optgroup label="Second Semester">
                      <option value="EEC">Elements of Electrical Engineering</option>
                      <option value="AME">Applied Mathematics</option>
                      <option value="CPR">C Programming Language</option>
                      <option value="BCC">Business Communication Using Computers</option>
                    </optgroup>

                    <optgroup label="Third Semester">
                      <option value="DTE">Digital Techniques</option>
                      <option value="AEL">Applied Electronics</option>
                      <option value="ECN">Electric Circuits and Networks</option>
                      <option value="EMI">Electronic Measurements and Instrumentation</option>
                      <option value="PEC">Principal of Electronic Communication</option>
                    </optgroup>

                    <optgroup label="Fourth Semester">
                      <option value="LIC">Linear Integrated Circuits</option>
                      <option value="CEL">Consumer Electronics</option>
                      <option value="MAA">Microcontroller and Applications</option>
                      <option value="BPE">Basic Power Electronics</option>
                      <option value="DCS">Digital Communication System</option>
                      <option value="MET">Maintenance of Electonics Equipment and EDA Tools Practices</option>
                    </optgroup>

                    <optgroup label="Fifth Semester">
                      <option value="EST">Environmental Studies</option>
                      <option value="CSP">Control System and PLC</option>
                      <option value="ESY">Embedded Systems</option>
                      <option value="MWC">Mobile and Wireless Communication</option>
                      <option value="ITR">Industrial Training</option>
                      <option value="CPP">Capstone Project Planning</option>
                      <option value=""></option>
                    </optgroup>
                    <optgroup label="Sixth Semester">
                      <option value="MAN">Management</option>
                      <option value="CND">Computer Networking and Data Communication</option>
                      <option value="ETE">Emerging Trends in Electronics</option>
                      <option value=""></option>
                      <option value=""></option>
                    </optgroup>
                  </select>
                </div>
                <div class="input-row"style="font-size:0.8rem;">
                    <textarea class="input-field form-control" type="text" name="comment"id="comment" placeholder="Add Question Here"></textarea>
                </div>
                <div>
                    <input required type="button" class="btn-submit" id="submitButton"value="Publish" /><div id="comment-message"> Added Successfully!</div>
                </div>
              </form>
            </div>
            <div id="output"></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment  bg-white text-dark'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span> <span class='commet-row-label'>Subject</span> <span class='posted-at'>" + data[i]['subject'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row1'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span> <span class='commet-row-label'>Subject</span> <span class='posted-at'>" + data[i]['subject'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
  </body>
</html>