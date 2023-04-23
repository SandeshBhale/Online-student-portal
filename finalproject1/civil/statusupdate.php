<?php
include "dbcon.php"; 
$id = $_GET['id']; 
$update = mysqli_query($con," UPDATE signup SET teacherstatus='active' WHERE id='$id' "); 
if($update)
{
    mysqli_close($con); 
    header("location:managestudentce.php"); 
    echo "<script>window.location.href=window.location.href;</script>";
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>  