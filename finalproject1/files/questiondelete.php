<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../assets//quiz.css" rel="stylesheet" type="text/css">
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
	
	<a class='text-decoration-none text-dark' href='questionadd.php'><button class="btn btn-success text-center text-dark d-block mx-auto mt-2 col-xl-2 col-lg-4 col-md-8 col-md-5">ADD Question</button></a>
	<div class="container">
		<table class="mt-3 mx-auto table table-striped table-dark text-center border-3 table-responsive-sm"style="width:100%;">
			<thead class="thead-dark">
			<tr>
				<th>Id</th>
				<th>Question</th>				
				<th>Update</th>                                                                                
				<th>Delete</th>                                                                                
			</tr>
			</thead>
			<tbody>
			<?php
				
				$sqli=mysqli_query($con,"select * from mst_question where branch='COMP'");
				while($result=mysqli_fetch_assoc($sqli)){
				$id=$result['que_id'];
			?>
			<tr>
				<td><?php echo $result['que_id']; ?></td>
				<td><?php echo $result['que_desc']; ?></td>
				<td><a href='queupdate.php?que_id=$id'><i class="fas fa-pen text-info"></i></a></td>
				<td><a href='quedelete.php?que_id=$id'><i class="fas fa-trash text-danger"></i></a></td>                                                                                                                                               
			</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
