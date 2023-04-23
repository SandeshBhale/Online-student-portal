<?php
    session_start();
    include 'dbcon.php';
    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $updatequery = "update signup set status='active' where token='$token'";
        $query = mysqli_query($con,$updatequery);
        if($query){
            if(isset($_SESSION['msg'])){
                // $_SESSION['msg'] = "<script>alert('ACCOUNT ACTIVATED')</script>";
                header('location: ../index.php');
            }else{
                $_SESSION['msg'] = "<script>alert('YOU ARE LOGGED OUT')</script>";
                header('location: ../index.php');
            }
        }else{
            $_SESSION['msg'] = "<script>alert('ACCOUNT NOT ACTIVATED')</script>";
                header('location:register.php');
        }
    }
?>
