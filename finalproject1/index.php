<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | SSPI</title>
	<style>
	<?php include('./assets/css/index.css') ?>
	</style>
	
</head>
<body>
<div class="background"style="width: 100%;
	height: 100%;
	position: absolute;
	background-image: url(assets/images/logo/clg3.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	filter: blur(3px);">
</div>
<?php
include 'files/dbcon.php';
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$variable1="COMP";
	$variable2="MECH";
	$variable3="CIVIL";
	$variable4="E&TC";
	$emailsearch= "select * from signup where email='$email' and status='active' and teacherstatus='active'";
	$query = mysqli_query($con,$emailsearch);
	$emailcount = mysqli_num_rows($query);
	if($emailcount){
		$emailpass = mysqli_fetch_assoc($query);
		$dbpass = $emailpass['password'];
		$branch = $emailpass['branch'];
		$_SESSION["id"]=$emailpass['id'];	
		$_SESSION['username'] = $emailpass['username'];
		$passdecode = password_verify($password, $dbpass);
		if($passdecode){
			if($variable1 == $branch){
				?>
				<script>
					location.replace("files/main.php");
				</script>
				<?php
			}
			else if($variable2 == $branch){
				?>
				<script>
					location.replace("mech/mech.php");
				</script>
				<?php
			}
			else if($variable3 == $branch){
				?>
				<script>
					location.replace("civil/civil.php");
				</script>
				<?php
			}
			else if($variable4 == $branch){
				?>
				<script>
					location.replace("eandtc/eandtc.php");
				</script>
				<?php
			}
		}else{
			?>
				<script>alert("Wrong Password");</script>
			<?php
		}
	}else{
		?>
			<script>alert("Account Not Activated From Teacher Side OR\nEmail Does Not Exists")</script>
		<?php
	}
}
?>
<!-- <div class="background"> -->
<!-- </div> -->
<div id="section"style="z-index:1;display:block;">
	<p> <?php 
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
	}else{
		?>
			<!-- <script>alert('YOU ARE LOGGED OUT')</script> -->
		<?php
	}
	?></p>
</div><br>
<div class="container" id="container">
	<div class="form signin">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br>Student Portal</h1>
			<h2>Sign in</h2>
			<input type="email" placeholder="Email" name="email"required/>
			<input type="password" placeholder="Password" name="password"required/>
            <button type="submit"name="submit">Sign In</button>
			<a href="./files/recovermail.php">Forgot your password? Click Here</a>
            <a href="./files/register.php">New User, Register Here</a>
			<span><a href="./files/signinasadmin.php"> Admin |</a> <a href="./files/signinasteacher.php"> Teacher</a></span>
		</form>
	</div>
	<div class="overlay">
                <img src="assets/images/sspi-logo.png"><br>
                <h3>Shri Shivaji Polytechnic Institute, Parbhani</h3>
	</div>
</div>
</body>
</html>