
<?php
/*
  Ví dụ:
  http://localhost:8080/api/action.php?sql=SELECT * FROM phanhoi

  http://localhost:8080/api/action.php?sql=INSERT INTO phanhoi 
  VALUES('6','duc','duc@gmail.com','01689470862','Ok','0')

  http://localhost:8080/api/action.php?sql=ALTER TABLE phanhoi ADD XacNhan int(1)

  http://localhost:8080/api/action.php?sql=UPDATE phanhoi SET XacNhan = 1 WHERE XacNhan IS NULL

  http://localhost:8080/api/action.php?sql= ALTER TABLE phanhoi DROP XacNhan
*/
require_once 'class/class.php';


header("Content-Type: application/json; charset=UTF-8");

$sql = $_GET['sql'];

$call = new connect();
$call->connect_();
$call->action($sql);
?>