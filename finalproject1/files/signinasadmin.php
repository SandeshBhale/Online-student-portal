<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | ADMIN</title>
	<link rel="stylesheet"href="../assets/css/signinasadmin.css"></link>
</head>
<body>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$data= "SELECT * FROM  admin WHERE username='$username'";
	$query = mysqli_query($con,$data);
	$datafound = mysqli_num_rows($query);
	if($datafound){
		$datapass = mysqli_fetch_assoc($query);
		$dbpass = $datapass['password'];
		$_SESSION["id"]=$datapass['id'];
		$_SESSION['username'] = $datapass['username'];
		if($dbpass==$password){
				?>
				<script>
					location.replace("admin.php");
				</script>
				<?php
		}else{
			?>
				<script>alert("Wrong Password");</script>
			<?php
		}
	}else{
		?>
			<script>alert("Email does not exists")</script>
		<?php
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
<div class="container2" id="container2">
	<div class="form signinasadmin">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br>Studnet Portal</h1>
			<h2>Admin Login</h2>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password"/>
            <button type="submit" name="submit">Sign In</button>
			<span><a href="signinasteacher.php"> Teacher |</a> <a href="../index.php"> Student</a></span>
		</form>
	</div>
	<div class="overlay">
                <img src="../assets/images/sspi-logo.png">
				<h3>Shri Shivaji Polytechnic Institute,Parbhani</h3>
	</div>
</div>
</body>
</html>