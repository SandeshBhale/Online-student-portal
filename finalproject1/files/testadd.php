<?php
session_start();
error_reporting(1);
?>
<html>
<head>
</head>
<body class="bg-white">
<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
require("dbcon.php");

include("header.php");


echo "<h2 class='text-center'>ADD SUBJECT</h2>";
$branch = $_POST['branch'];
if($_POST['submit']=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysqli_query($con,"insert into mst_test(branch,sub_id,test_name,total_que) values ('$branch','$subid','$testname','$totque')",$cn) or die(mysqli_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
echo "Please Enter Subject Name";
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
echo "Please Enter Total Question";
document.form1.totque.value;
return false;
}
return true;
}
</script>
      <form name="form1" method="post" onSubmit="return check();"class="mt-4">
        <div class="form-group col-md-10 mx-auto">
          <label for="department">Select Department: </label>
          <select requried name="branch"class="form-control" id="department">
            <option>Select Department..</option>
            <option value="COMP">COMPUTER DEPARTMENT</option>
            <option value="CIVIL">CIVIL DEPARTMENT</option>
            <option value="E&TC">ELECTRONIC AND TELECOMMUNICATION DEPARTMENT</option>
            <option value="MECH">MECHANICAL DEPARTMENT</option>
          </select>
        </div>

        <div class="form-group col-md-10 mx-auto">
          <label for="subid">Select Department: </label>
          <select requried name="subid"class="form-control" id="subid">
          <option>Select Semester..</option>
          <?php
            $rs=mysqli_query($con,"Select * from mst_subject order by  sub_name",$cn);
                while($row=mysqli_fetch_array($rs))
            {
            if($row[0]==$subid)
            {
            echo "<option value='$row[0]' selected>$row[1]</option>";
            }
            else
            {
            echo "<option value='$row[0]'>$row[1]</option>";
            }
            }
          ?>
          </select>
        </div>

        <div class="form-group row col-md-10 mx-auto">
          <label for="testname" class="col-sm-3 col-form-label">Subject Name : </label>
            <input requried type="text" name="testname"class="form-control" id="testname" placeholder="Test Name">
        </div>

        <div class="form-group row col-md-10 mx-auto">
          <label for="totque" class="col-sm-3 col-form-label">Total Questions : </label>
            <input requried type="text" name="totque"class="form-control" id="totque" placeholder="Total Question">
        </div>

        <div class="form-group row col-md-10 mx-auto">
          <input requried class="btn btn-success col-md-12"type="submit" name="submit" value="Add This Subject" >
        </div>            
      </form>
</body>
</html>
