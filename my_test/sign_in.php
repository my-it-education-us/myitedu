<?php
session_start();

session_start();
$_SESSION['is_user_logged_in'] = -1;
unset($_SESSION['is_user_logged_in']);
session_destroy();
redirect("Your have been sign in", 'login.php', 1);
function redirect($msg=null, $url, $error=1){
    header("Location: $url?error=$error&msg=$msg");
    exit($msg);
}
include "login.php";
$pass = password_hash('sherbek', PASSWORD_BCRYPT);
$lname = $_POST['lname']??null;
$fname = $_POST['fname']??null;
$email = $_POST['email']??null;
$password = $_POST['password']??null;


include "../database.php";
$db = new \Database\database("myitedu");
$sql = "INSERT INTO users (last_name, first_name, email, password) VALUES('$lname','$fname','$email','$pass');";
$user = $db->sql($sql);
;
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
