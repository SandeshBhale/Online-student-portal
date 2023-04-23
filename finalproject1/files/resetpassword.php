<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | RESET PASSWORD</title>
    <?php echo "<link rel='stylesheet'href='../assets/css/resetpassword.css'"; ?>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            $newpassword = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            $pass = password_hash($newpassword, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
                if($newpassword===$cpassword){
                    $updatequery = "update signup set password='$pass' where token='$token' ";
                    $iquery = mysqli_query($con,$updatequery);
                    if($iquery){
                        $_SESSION['msg']="<script>alert('Your Password Has Been Updated');</script>";
                        header('location:../index.php');
                    }else{
                        $_SESSION['passmsg']="<script>alert('Password Updation Failed');</script>";
                        header('location:resetpassword.php');
                    }
                }else{
                    $_SESSION['passmsg']="<script>alert('Password Not Matching');</script>";
                }
        }else{
            echo"No Token Found";
        }
    }
?>
<div class="background"style="width: 100%;
	height: 100%;
	position: absolute;
	background-image: url(../assets/images/logo/clg3.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	filter: blur(3px);">
</div>
<div id="section"style="z-index:1;display:block;">  <!-- background-color:#81E979;border-radius:8px;padding: 0 8px; -->
    <p> 
        <?php 
            if(isset($_SESSION['passmsg'])) {
                echo $_SESSION['passmsg'];
            }else{
                echo $_SESSION['passmsg']="";
                ?>
                    <script> document.getElementById("section").style.display="none";</script>
                <?php
            }
        ?>
    </p>
</div><br>
<div class="container1" id="container1">
	<div class="form register">
		<form action=""method="POST">
            <h1>Reset Your Password</h1>
            <h4>Please Fill Password Properly.</h4>
			<input type="password" placeholder="New Password" name="password" required/>
			<input type="password" placeholder="Conform Password" name="cpassword" required/>
            <button type="submit"name="submit">Update Password</button>
		</form>
	</div>
	<div class="overlay">
                <img src="../assets/images/sspi-logo.png">
                <h3>Shri Shivaji Polytechnic Institute, Parbhani</h3> 
	</div>
</div>
</body>
</html>