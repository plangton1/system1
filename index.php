<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include('./include/script.php');?>
<?php include('./connection/connection.php');?>
<?php include('./include/head.php');?>
<?php include('./css/css.php');?>
<?php include('./include/menu.php');?>
<?php include('./include/slidebar.php');?>
<?php include('./include/header.php');?>
<body class="font">
<?php 
      if (!isset($_GET['page']) && empty($_GET['page'])) {
        include('dashboard.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'index') {
        include('dashboard.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'insert') {
        include('insert.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'status') {
        include('status.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'report') {
        include('report.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'dash') {
        include('dashboard.php');
    }
    ?>

<?php include('./include/footer.php');?>
</body>
</html>