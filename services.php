<?php
ob_start();
session_start();
include 'app/general.php';
include 'app/user.php';
include 'app/service.php';

if(isLoggedIn() != true) {
    redirectTo("index.php");
}

if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

?>

<!doctype html>
<html>
<head>
    <title>Webi - Dashboard ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>

<?php
$userRole = $_SESSION['user']['role'];
if(isAdmin($userRole) === true) {
    ?>

    <?php viewPage("views/general/navbar.php"); ?>

    <div class="container">
        <h1 style="margin-top: 10px;">SERVICES</h1>
        <ul><li><a href="services.php">View all services</a></li><li><a href="?action=add">Add a service</a></li></ul>
        <?php
            switch($action){
                case "add":
                    viewPage("views/services/add.php");
                    break;
                case "edit":
                    viewPage("views/services/edit.php");
                    break;
                default:
                    viewPage("views/services/view-all.php");
                    break;
            }
        ?>
    </div>
<?php } else { ?>
    <div class="container">
        <h3 style="text-align: center; margin-top: 20px;">Sorry <?php $_SESSION['user']['fname'] ?>, but you're just a standard user. So, you don't have permissions to access the system. <a href="logout.php">Click here</a> </h3>
    </div>
<?php } ?>


</body>
</html>