<?php

$siteurl = "http://webi/";

include 'db.php';

function viewPage($pagename) {
    include "$pagename";
}

function redirectTo($pagename) {
    header("Location: $pagename");
}

function confirmQuery($query) {
    global $connection;
    if(!$query) {
        die("QUERY FAILED: " . mysqli_error($connection));
    }
}

