<?php
require_once 'class/class.php';
header("Content-Type: application/json; charset=UTF-8");
$con = new connect();
$con->connect_();
$con->createJson_dentag();
?>