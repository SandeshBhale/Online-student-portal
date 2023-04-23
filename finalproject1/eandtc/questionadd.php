<?php
session_start();
require("dbcon.php");
include("header.php");
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
echo "<h2 class='text-center'>ADD Question</h2>";
if($_POST['submit']=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysqli_query($con,"insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans,branch) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue','E&TC')",$cn) or die(mysqli_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter option 1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter option 2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter option 3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter option 4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please enter Correct Option Number");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>

      <form name="form1" method="post" onSubmit="return check();">
        <div class="form-group col-md-10 mx-auto">
          <label for="testid">Select Subject: </label>
          <select requried name="testid"class="form-control" id="testid">
            <?php
              $rs=mysqli_query($con,"Select * from mst_test where branch='E&TC'",$cn);
                  while($row=mysqli_fetch_array($rs))
              {
              if($row[0]==$testid)
              {
              echo "<option value='$row[0]' selected>$row[2]</option>";
              }
              else
              {
              echo "<option value='$row[0]'>$row[2]</option>";
              }
              }
            ?>
          </select>
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Question: </label>
            <input requried type="text" name="addque"class="form-control" id="addque" placeholder="Question Name">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="ans1">Option 1 :</label>
            <input requried type="text" name="ans1"class="form-control" id="ans1" placeholder="Option 1">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="ans2">Option 2 :</label>
            <input requried type="text" name="ans2"class="form-control" id="ans2" placeholder="Option 2 :">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="ans3">Option 3 : </label>
            <input requried type="text" name="ans3"class="form-control" id="ans3" placeholder="Option 3 :">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="ans4">Option 4 :</label>
            <input requried type="text" name="ans4"class="form-control" id="ans4" placeholder="Option 4">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <label for="anstrue">Correct Option Number : </label>
            <input requried type="text" name="anstrue"class="form-control" id="anstrue" placeholder="Correct Option Number">
        </div>
        
        <div class="form-group row col-md-10 mx-auto">
          <input class="btn btn-success" type="submit" name="submit" value="Add This Question" >
        </div>
    </form>

</body>
</html>