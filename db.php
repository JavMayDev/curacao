<?php

session_start();

$dbconn = mysqli_connect(
    'localhost',
    'root',
    '',
    'curacao_db'
);

/* var_dump($dbconn); */
if (!isset($dbconn)) {
    die('failed to connect database');
}
