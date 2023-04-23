<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | REGISTER</title>
    <link rel="stylesheet"href="../assets/css/register.css"></link>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $branch = mysqli_real_escape_string($con, $_POST['branch']);
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        $image="../assets/images/sspi-logo.png";    
        $token = bin2hex(random_bytes(15));
        $emailquery = "select * from signup where email='$email' ";
        $query = mysqli_query($con,$emailquery);
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            echo"<script>alert('EMAIL ALREADY EXISTS')</script>";
        }else{
            if($password===$cpassword){
                        $subject = "Activate Your Account";
                        $body = "Hi, $username, Click here to activate your account
                        http://localhost/finalproject1/files/activate.php?token=$token";
                        $sender = "From: sspiparbhani5@gmail.com";
                        if (mail($email, $subject, $body, $sender)) {
                                // <script>alert('YOU ARE LOGGED OUT')</script>
                            $insertquery = "insert into signup(username, email, password, cpassword, branch, token, status, image,teacherstatus) values('$username','$email','$pass','$cpass','$branch','$token','inactive','$image','inactive')";
                            $iquery = mysqli_query($con,$insertquery);
                            $_SESSION['msg']="<script>alert('PLEASE, CHECK YOUR MAIL TO ACTIVATE YOUR ACCOUNT $email')</script>";
                            header('location:../index.php');
                        } else {
                            echo "<script>alert('Email sending failed...')</script>";
                        }
            }else{
                echo"<script> alert('PASSWORD ARE NOT MATCHING');</script>";
            }
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
<div>
    <p id="text"></p>
</div>
<div class="container1" id="container1">
	<div class="form register">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br>Student Portal</h1>
            <h2>Create Account</h2>
            <input type="text" placeholder="Name" name="name" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<input type="password" placeholder="Confirm Password" name="cpassword" required/>
            <select name="branch"class="select"style="width:100%;padding: 1.1rem 1rem;background-color: #eee;border:none;outline:none;">
                <option selected>Select Branch..</option>
                <option value="COMP">Computer Engineering</option>
                <option value="MECH">Mechanical Engineering</option>
                <option value="E&TC">E & TC Engineering</option>
                <option value="CIVIL">Civil Engineering</option>
            </select>
			<!-- <input type="text" placeholder="Enrollment No." name="enroll" required/> -->
            <button type="submit"name="submit">Register</button>
            <a href="../index.php"style="cursor:pointer">Have you already registered ? Click Here</a>
		</form>
	</div>
	<div class="overlay">
                <img src="../assets/images/sspi-logo.png">
                <h3>Shri Shivaji Polytechnic Institute,Parbhani</h3> 
	</div>
</div>
</body>
</html>