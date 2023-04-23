<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ONLINE TEST | DELETE TEST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("dbcon.php");
 $id=$_GET['sub_id'];

$sql=mysqli_query($con,"delete from mst_subject where sub_id='$id'");
header('location:viewsub.php');
?>