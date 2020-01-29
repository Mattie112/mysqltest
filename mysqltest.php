<?php

$pdo_attr = [
    PDO::ATTR_PERSISTENT => true,
];

$pdo = new PDO("mysql:host=mysql;dbname=empty", "root", "iamreallysecure", $pdo_attr);

// The following will give a to many connections error after a few browser refreshes (connection limit is set to 10)
var_dump($pdo->exec("SELECT 1"));

// While the following does NOT leave >10 connections open and continues to work
//var_dump($pdo->query("SELECT 1")->fetchAll());
