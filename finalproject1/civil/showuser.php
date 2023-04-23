<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="../assets/css/quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-white">
<?php
include("header.php");
include("dbcon.php");
?>


	<div class="container">
		<table class="mt-3 mx-auto table table-striped table-dark text-center border-3 table-responsive-sm"style="width:100%;">
			<thead class="thead-dark">
			<tr>
				<th>Name</th>
				<th>Test Id</th>				
				<th>Score</th>                                                                                				                                                                          
			</tr>
			</thead>
			<tbody>
			<?php
				
				$sql=mysqli_query($con,"Select * From mst_result where branch='CIVIL'");	
				while($result=mysqli_fetch_assoc($sql)){
				$id=$result['username'];
			?>
			<tr>
				<td><?php echo $result['login']; ?></td>
				<td><?php echo $result['test_id']; ?></td>				                                                                                                                                               
				<td><?php echo $result['score']; ?></td>				                                                                                                                                               
			</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
