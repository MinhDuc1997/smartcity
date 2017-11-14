
<?php
/*http://localhost:8080/api/userlogin.php?name=minhduc&password=01689470862
*/
require_once 'class/class.php';

header("Content-Type: application/json; charset=UTF-8");
$u = $_GET['name'];
$p = $_GET['password'];

$hash = hash( 'sha256', $p );

$call = new connect();
$call->connect_();
$call->login($u,$hash);
?>
