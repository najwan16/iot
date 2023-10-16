<?php 
 
session_start();
session_unset();//menghapus data sesi
session_destroy();//menghapus data sesi
header("Location: login.php");
 
?>