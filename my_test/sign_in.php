<?php
session_start();
include "login.php";

$lname = $_POST['lname']??null;
$fname = $_POST['fname']??null;
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$password2 = password_hash($password, PASSWORD_BCRYPT);
$password_matched  = password_verify($password2,$password);


include "../database.php";
$db = new \Database\database("myitedu");
$sql = "INSERT INTO users (last_name, first_name, email, password) VALUES('$lname','$fname','$email','$password_matched' limit 1;);";
$user = $db->sql($sql);
exit;

exit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="btn">
    Raxmat sign up qilganingiz uchun
</div>
<style>
    .btn{
        color: red;
        background-color: black;
        border-radius: 15px;
        display: flex;

    }

</style>
</body>
</html>
