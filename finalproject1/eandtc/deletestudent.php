<?php
include "dbcon.php"; 
$id = $_GET['id']; 
$del = mysqli_query($con,"DELETE FROM signup WHERE id = '$id'"); 
if($del)
{
    mysqli_close($con); 
    header("location:managestudentej.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>  