<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_psw']  = '';
$db['db_name'] = 'webproject';

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, '', DB_NAME) or die ("Connection failed!");
