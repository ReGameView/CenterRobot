<?php
session_start();
if((time() - 3000) > $_SESSION['token_time'])
{
    $time = time() - $_SESSION['token_time'];
    header("Location: /admin/sign.php?error=time?time=".$time);
}
if(isset($_POST['token']))
{
    if($_POST['token'] == $_SESSION['token'])
    {
        $password = md5($_POST['password']);
        $db = new  PDO('mysql:host=localhost;dbname=robotRomanov', 'root', '');
//        $db->exec('set names utf8');
        $stmt = $db->prepare('SELECT * FROM `user` WHERE `login` = ? and `password` = ?');
        $stmt->bindValue(1, $_POST['login'], PDO::PARAM_STR);
        $stmt->bindValue(2, $password, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(isset($rows))
        {
            $_SESSION['token_time'] = null;
            $_SESSION['token'] = null;
            $_SESSION['username'] = $_POST['login'];
            if($_POST['check'])
            {
                $_SESSION['password'] = $password;
            }
            header('Location: /admin/index.php');
        }
    }else
    {
        var_dump($_POST); echo "<br/>";
        var_dump($_SESSION);
    }
}