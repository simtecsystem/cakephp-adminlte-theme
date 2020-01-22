<?php use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo Configure::read('Theme.title'); ?> | <?php echo $this->fetch('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <?php echo $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min'); ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <?php echo $this->Html->css('AdminLTE./plugins/chart.js/Chart.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/icheck-bootstrap/icheck-bootstrap.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/jqvmap/jqvmap.min'); ?>
    <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/overlayScrollbars/css/OverlayScrollbars.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/daterangepicker/daterangepicker'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/summernote/summernote-bs4'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/select2/css/select2.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/select2-bootstrap4-theme/select2-bootstrap4.min'); ?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <?php echo $this->fetch('css'); ?>

</head>
<body class="sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php echo $this->element('nav-top'); ?>

        <?php echo $this->element('aside-main-sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>

        </div>
        <!-- /.content-wrapper -->

        <?php echo $this->element('footer'); ?>

        <!-- Control Sidebar -->
        <?php echo $this->element('aside-control-sidebar'); ?>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <?php echo $this->Html->script('AdminLTE./plugins/jquery/jquery.min'); ?>
    <!-- Bootstrap 4 -->
    <?php echo $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min'); ?>
    <!-- overlayScrollbars -->
    <?php echo $this->Html->script('AdminLTE./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min'); ?>
    <!-- AdminLTE App -->
    <?php echo $this->Html->script('AdminLTE.adminlte.min'); ?>

    <!-- jQuery UI 1.11.4 -->
    <?php echo $this->Html->script('AdminLTE./plugins/jquery-ui/jquery-ui.min'); ?>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Sparkline -->
    <?php echo $this->Html->script('AdminLTE./plugins/sparklines/sparkline'); ?>
    <!-- jQuery Knob Chart -->
    <?php echo $this->Html->script('AdminLTE./plugins/jquery-knob/jquery.knob.min'); ?>
    <!-- daterangepicker -->
    <?php echo $this->Html->script('AdminLTE./plugins/moment/moment.min'); ?>
    <?php echo $this->Html->script('AdminLTE./plugins/daterangepicker/daterangepicker'); ?>
    <!-- Tempusdominus Bootstrap 4 -->
    <?php echo $this->Html->script('AdminLTE./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min'); ?>
    <!-- Summernote -->
    <?php echo $this->Html->script('AdminLTE./plugins/summernote/summernote-bs4.min'); ?>
    <!-- FastClick -->
    <?php echo $this->Html->script('AdminLTE./plugins/fastclick/fastclick'); ?>
    <!-- Select2 -->
    <?php echo $this->Html->script('AdminLTE./plugins/select2/js/select2.full.min'); ?>

    <?php echo $this->fetch('script'); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
</body>
</html>
   ui