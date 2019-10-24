<?php
    ob_start();
    session_start();
    include 'app/general.php';
    include 'app/user.php';

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'login';
    }

    if(isLoggedIn() == true) {
        redirectTo("dashboard.php");
    } else {

    }
?>

<!doctype html>
<html>
<head>
    <title>Webi - <?php echo ucfirst($page); ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
    <?php

    if($page === 'login') {
        viewPage('views/user/login.php');
    } else if($page === 'register') {
        viewPage('views/user/register.php');
    } else {
        viewPage('views/404.php');
    }

    ?>

</body>
</html>