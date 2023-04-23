<?php
session_start();
session_destroy();
header('location: signinasteacher.php');
?>