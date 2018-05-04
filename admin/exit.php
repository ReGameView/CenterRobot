<?php
session_start();
unset($_SESSION['token']);
unset($_SESSION['time_token']);
unset($_SESSION['username']);
header("Location: /admin/sign.php");