<?php
ob_start();

include 'app/general.php';
include 'app/user.php';
session_start();
userLogOut();