    <?php
include "dbcon.php"; 
$id = $_GET['id']; 
$del = mysqli_query($con,"DELETE FROM faculty WHERE id = '$id'"); 

if($del)
{
    mysqli_close($con); 
    header("location:faculty.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>  