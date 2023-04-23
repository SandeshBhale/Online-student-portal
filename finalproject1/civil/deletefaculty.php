<?php
include "dbcon.php"; 
$id = $_GET['id']; 
print_r($id);
$del = mysqli_query($con,"DELETE FROM faculty WHERE id= '$id'"); 
if($del)
{
    mysqli_close($con); 
    header("location:addfaculty.php"); 
    echo "<script>window.location.href=window.location.href;</script>";
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>  