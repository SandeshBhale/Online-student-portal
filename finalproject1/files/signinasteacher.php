<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSP | TEACHER</title>
	<link rel="stylesheet"href="../assets/css/signinasteacher.css"></link>
</head>
<body>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$data= "SELECT * FROM  teacher  WHERE email='$email' and status='active' ";
	$query = mysqli_query($con,$data);
	$datafound = mysqli_num_rows($query);
	$variable1="COMP";
	$variable2="MECH";
	$variable3="CIVIL";
	$variable4="E&TC";
	if($datafound){
		$datapass = mysqli_fetch_assoc($query);
		$dbpass = $datapass['password'];
		$branch = $datapass['branch'];
		$_SESSION["id"]=$datapass['id'];
		$_SESSION['username'] = $datapass['name'];
		$passdecode = password_verify($password,$dbpass);
		if($passdecode){
			if($variable1 == $branch){
				?>
				<script>
					location.replace("managestudent.php");
				</script>
				<?php
			}
			else if($variable2 == $branch){
				?>
				<script>
					location.replace("../mech/managestudentme.php");
				</script>
				<?php
			}
			else if($variable3 == $branch){
				?>
				<script>
					location.replace("../civil/managestudentce.php");
				</script>
				<?php
			}
			else if($variable4 == $branch){
				?>
				<script>
					location.replace("../eandtc/managestudentej.php");
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
	<div class="form signinasteacher">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
            <h1>Welcome to <br> Studnet Portal</h1>
			<h2>Teacher's Login</h2>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password" />
            <button type="submit"name="submit">Sign In</button>
			<a href="recovermailt.php">Forgot your password?</a>
			<span><a href="signinasadmin.php"> Admin |</a> <a href="../index.php"> Student</a></span>
		</form>
	</div>
	<div class="overlay">
                <img src="../assets/images/sspi-logo.png">
                <h3>Shri Shivaji Polytechnic Institute, Parbhani</h3>
	</div>
</div>
</body>
</html>