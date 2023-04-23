<?php
session_start();
require("dbcon.php");
include("header.php");
error_reporting(1);
?>
<html>
<head>
<style>
body{
  background-color:white;
}
</style>
</head>
<body class="bg-white">
<!-- <link href="../assets/css/quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
echo "<h1 class='text-center'>ADD SEMESTER</h1>";

echo "<table class='text-center'>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysqli_query($con,"select * from mst_subject where sub_name='$subname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Semester already exist</div>";
	exit;
}
mysqli_query($con,"insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysqli_error());
echo "<p align=center>Semestar  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Semestar details");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

<div>
<title>Add Semestar</title>
<form name="form1" method="post" onSubmit="return check();">
  <div class="form-group row col-md-8 mx-auto mt-3">
    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
      <input type="text" name="subname"class="form-control ml-n3"placeholder="Enter semestar details"id="subname">
    </div>
  </div>

  <!-- <div class="form-group text-center">
    <label for="exampleInputName1">Name</label>
    <input type="text" name="subname"class="form-control col-md-4 mx-auto"placeholder="Enter semestar details"id="subname">
  </div> -->
        <!-- <input class="form-control mt-3 pl-3"style="width:25rem;" name="subname" placeholder="Enter semestar details" type="text" id="subname"> -->
  <button class="btn btn-danger mx-auto mt-3 d-block"type="submit" name="submit">Add This Sem</button>
</form>
<p>&nbsp; </p>
</div>
</body>
</html>