<?php 
session_Start();
session_unset();
session_destroy();
header("location:index.php");
?>