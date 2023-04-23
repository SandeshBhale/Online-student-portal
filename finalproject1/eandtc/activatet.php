<?php
    session_start();
    include 'dbcon.php';
    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $updatequery = "update teacher set status='active' where token='$token'";
        $query = mysqli_query($con,$updatequery);
        if($query){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg'] = "<script>alert('ACCOUNT ACTIVATED')</script>";
                echo $_SESSION['msg'];
                echo"<script>location.replace('signinasteacher.php');</script>";
            }else{
                $_SESSION['msg'] = "<script>alert('YOU ARE LOGGED OUT')</script>";
                echo $_SESSION['msg'];
                echo"<script>location.replace('admin.php');</script>";
            }
        }else{
            $_SESSION['msg'] = "<script>alert('ACCOUNT NOT ACTIVATED')</script>";
            echo $_SESSION['msg'];
            echo"<script>location.replace('admin.php');</script>";
        }
    }
?>