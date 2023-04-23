<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ONLINE QUIZ | ADD SEMESTER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="../assets/quiz.css" rel="stylesheet" type="text/css">
<link href="../assets/css/main1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/> -->

<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</div>
</head>
<body class="bg-white">
	<?php
	// include("header.php");
	include("dbcon.php");
	?>

	
<a class='text-decoration-none text-dark' href='subadd.php'><button class="btn btn-success text-dark d-block mx-auto mt-4 col-xl-2 col-lg-4 col-md-8 col-md-5">ADD SEMESTER</button></a>
	<div class="container">
		<table class="mt-3 table table-striped table-dark text-center border-3 table-responsive-sm"style="width:100%;">
			<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Semester Deatails </th>
				<th>Update</th>
				<th>Delete</th>                                                                                
			</tr>
			</thead>
			<tbody>
			<?php
				
				$sql=mysqli_query($con,"select * from mst_subject");	
				while($result=mysqli_fetch_assoc($sql)){
				$id=$result['sub_id'];
			?>
			<tr>
				<td><?php echo $result['sub_id']; ?></td>
				<td><?php echo $result['sub_name']; ?></td>
				<td><a href='subupdate.php?sub_id=$id'><i class="fas fa-pen text-info"></i></a></td>
				<td><a href='subdelete.php?sub_id=$id'><i class="fas fa-trash text-danger"></i></a></td>                                                                                                                                               
			</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	


</body>
</html>
