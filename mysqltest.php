<?php
$pdo_attr = [
    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8;",
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
];
$database_host = "mysql";
$database_name = "empty";
$database_user = "root";
$database_pwd = "iamreallysecure";

$pdo = new PDO("mysql:host=" . $database_host . ";dbname=" . $database_name . ";charset=utf8", $database_user, $database_pwd, $pdo_attr);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// The following will give a to many connections error after a few browser refreshes (connection limit is set to 10)
var_dump($pdo->exec("SELECT 1;"));
// While the following does NOT leave >10 connections open and continues to work
//var_dump($pdo->query("SELECT 1;")->fetchAll());

