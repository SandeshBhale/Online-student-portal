<?php
include "dbcon.php"; 
$id = $_GET['id']; 
$del = mysqli_query($con,"DELETE FROM event WHERE id = '$id'"); 
if($del)
{
    mysqli_close($con); 
    header("location:addevents.php"); 
    echo "<script>window.location.href=window.location.href;</script>";
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>  