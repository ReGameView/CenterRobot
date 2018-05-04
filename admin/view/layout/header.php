<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/admin/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/admin" class="logo">
            Центр роботехники
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="/admin/index.php"><i class=""></i> <span>Главное меню</span></a></li>
                <li><a href="/admin/view/child.php"><i class="fa fa-reddit"></i> <span>Дети</span></a></li>
                <li><a href="/admin/view/group.php"><i class="fa fa-users"></i> <span>Группа</span></a></li>
                <li><a href="/admin/view/lector.php"><i class="fa fa-user"></i> <span>Лектор</span></a></li>
                <li><a href="/admin/view/parent.php"><i class="fa fa-users"></i> <span>Родители</span></a></li>
                <li><a href="/admin/view/raspisanie.php"><i class="fa fa-table"></i> <span>Расписание</span></a></li>
                <li><a href="/admin/exit.php"><i class="fa fa-power-off"></i> <span>Выход</span></a></li>

<!--                <li class="treeview">-->
<!--                    <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>-->
<!--                        <span class="pull-right-container">-->
<!--                <i class="fa fa-angle-left pull-right"></i>-->
<!--              </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="#">Link in level 2</a></li>-->
<!--                        <li><a href="#">Link in level 2</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php if($page_header)
                    echo $page_header;
                ?>
                <small>
                <?php if($small_header)
                    echo $small_header;
                ?>
                </small>
            </h1>
<!--            <ol class="breadcrumb">-->
<!--                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
<!--                <li class="active">Here</li>-->
<!--            </ol>-->
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
