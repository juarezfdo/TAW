<?php include "../usuarios.php"; 

$usuario = new usuario();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Usuario</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../../ninja/dark/assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/sweet-alert/sweetalert.css">
    
    <!-- Percent Circle -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="../../ninja/dark/assets/styles/style-dark.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../../ninja/dark/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">


<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/77BEBF0F-8F6F-634B-8F51-5D8982CEEF33/main.js" charset="UTF-8"></script></head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="index.html" class="logo">NinjaTeam</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.html">Emily Stanley</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="current">
                    <a class="waves-effect" href="../clientes/index.php"><i class="menu-icon fa fa-home"></i><span>Clientes</span></a>
                </li>
                
            </ul>
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<!-- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
        <h4 class="box-title"></h4>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2>Editar Cliente</h2>
                    </div>
                    <div class="col-lg-2">
                        <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
                <hr>
                <?php
                    if (isset($_GET["id"])) {
                        $usuario->editar();
                    }
                ?>
            </div>
                    
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../ninja/dark/assets/script/html5shiv.min.js"></script>
        <script src="../../ninja/dark/assets/script/respond.min.js"></script>
    <![endif]-->
    <!-- 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../ninja/dark/assets/scripts/jquery.min.js"></script>
    <script src="../../ninja/dark/assets/scripts/modernizr.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/nprogress/nprogress.js"></script>
    <script src="../../ninja/dark/assets/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="../../ninja/dark/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Percent Circle -->
    <script src="../../ninja/dark/assets/plugin/percircle/js/percircle.js"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="../../ninja/dark/assets/plugin/chart/chartist/chartist.min.js"></script>
    <script src="../../ninja/dark/assets/scripts/chart.chartist.init.min.js"></script>

    <!-- FullCalendar -->
    <script src="../../ninja/dark/assets/plugin/moment/moment.js"></script>
    <script src="../../ninja/dark/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="../../ninja/dark/assets/scripts/fullcalendar.init.js"></script>

    <script src="../../ninja/dark/assets/scripts/main.min.js"></script>
    <!-- Data Tables -->
    <script src="../../ninja/dark/assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../ninja/dark/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
    <script src="../../ninja/dark/assets/scripts/datatables.demo.min.js"></script>

</body>
</html>