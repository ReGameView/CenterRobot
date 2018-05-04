<?php
include '../../includes/database.php';
$db = new database();
if(isset($_GET['action']) and isset($_GET['id']))
{
    $query = "DELETE FROM `".$_GET['action']."` WHERE id = ".$_GET['id'];
    $db->query($query);
    header("Location: /admin/view/".$_GET['action'].".php");
}