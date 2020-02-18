<?php
session_start();
$_SESSION['sess_user_id'] = "";
$_SESSION['sess_username'] = "";
$_SESSION['sess_name'] = "";
session_unset();
$_SESSION = array(); 
session_destroy();
if(empty($_SESSION['sess_user_id'])) header("location:../blog/blog_admin/index.php");
?>