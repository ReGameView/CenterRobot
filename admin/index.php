<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: /admin/sign.php");
}
$title = "Новости";
$page_header = "Новости";
$small_header = "";
include('view/layout/header.php');?>



<?php include('view/layout/footer.php');?>