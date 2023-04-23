<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | RECOVER MAIL</title>
    <?php echo "<link rel='stylesheet'href='../assets/css/recovermail.css'>"; ?>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $emailquery = "select * from teacher where email='$email' ";
        $query = mysqli_query($con,$emailquery);
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            $userdata = mysqli_fetch_array($query);
            $username = $userdata['name'];
            $token = $userdata['token'];
                        $subject = "Resest Your Password";
                        $body = "Hi, $username, Click here to reset your password
                        http://localhost/finalproject1/files/resetpasswordt.php?token=$token";
                        $sender = "From: sspiparbhani5@gmail.com";
                        if (mail($email, $subject, $body, $sender)) {
                            $_SESSION['msg']="<script>alert('Please, Check your mail to reset your password $email');</script>";
                            header('location:../index.php');
                        } else {
                            echo "Email sending failed...";
                        }
        }else{
            echo "Email Not Found";
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
<div class="container1" id="container1">
	<div class="form register">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Recover Your Account</h1>
            <h4>Please Fill Email-ID Properly</h4>
			<input type="email" placeholder="Email" name="email" required/>
            <button type="submit"name="submit">Send Mail</button>
		</form>
	</div>
	<div class="overlay">
                <img src="../assets/images/sspi-logo.png">
                <h3>Shri Shivaji Polytechnic Institute, Parbhani</h3> 
	</div>
</div>
</body>
</html>