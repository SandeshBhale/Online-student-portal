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
 $id=$_GET['que_id'];
$q=mysqli_query($con,"SELECT * FROM mst_question WHERE que_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_question SET que_desc='$addque',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$anstrue' where que_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
	
	}



?>
  <form name="form1" method="post" onSubmit="return check();">
  <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Question Name  </label>
          <input requried type="text" name="addque"class="form-control" id="addque">
        </div>
        <?php echo $res['que_desc']; ?>
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Answer 1  </label>
          <input required class="form-control"value="<?php echo $res['ans1']; ?>" name="ans1" type="text" id="ans1" size="85" maxlength="85">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Answer 2 </label>
          <input required class="form-control" value="<?php echo $res['ans2']; ?>" name="ans2" type="text" id="ans2" size="85" maxlength="85">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Answer 3  </label>
          <input required class="form-control" value="<?php echo $res['ans3']; ?>" name="ans3" type="text" id="ans3" size="85" maxlength="85">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter Answer 4  </label>
          <input required class="form-control" name="ans4"value="<?php echo $res['ans4']; ?>" type="text" id="ans4" size="85" maxlength="85">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <label for="addque">Enter True Answer </label>
          <input class="form-control"value="<?php echo $res['true_ans']; ?>" name="anstrue" type="text" id="anstrue" size="50" maxlength="50">
        </div>
        <div class="form-group row col-md-10 mx-auto">
          <input class="btn btn-primary" type="submit" name="update" value="UPDATE" >
        </div>
  </form>
</body>
</html>