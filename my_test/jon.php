<?php
$password2 = password_hash('abc123', PASSWORD_BCRYPT);
include "../database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT id, email, password FROM users WHERE email='sherbeknayimov2001@gmail.com' limit 1;";
$user = $db->sql($sql);


$password1 = $user[0]['password'];
echo "<pre>";
print_r($password1);
echo "<hr>";
echo $password2;
echo "<hr>";
$password_matched  = password_verify('abc1234',$password1);
var_dump($password_matched);
exit;
?>
