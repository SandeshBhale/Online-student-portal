<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
extract($_REQUEST);
 $id=$_GET['test_id'];
$q=mysqli_query($con,"select * from mst_test where test_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_test SET test_name='$testname',total_que='$totque' where test_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
	
	}



?>
  <form name="form1" method="post" onSubmit="return check();">
        <h2 class='text-center mb-3'>Update TEST</h2>
        <div class="form-group row col-md-10 mx-auto">
          <label for="testname">Enter Test Name : </label>
          <input requried type="text" name="testname"class="form-control" id="testname" value="<?php echo $res['test_name']; ?>">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <label for="totque">Enter Toral Question : </label>
          <input requried type="text" name="totque"class="form-control" id="totque" value="<?php echo $res['total_que']; ?>">
        </div>
        <div class="form-group row col-md-10 mx-auto">
        <input class="btn btn-primary" type="submit" name="Update" value="update" >
        </div>
  </form>

</body>
</html>