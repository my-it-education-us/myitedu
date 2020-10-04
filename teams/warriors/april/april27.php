<?php
 /*$GLOBALS
$_SERVER
$_GET <------ also called a querystring
$_POST <---- is used in HTML forms: login, sign up, checkout and any other secure functions.
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/

 $bgcolor = 'white';
if (isset($_COOKIE['color'])) {
    $bgcolor = $_COOKIE['color'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mers</title>
</head>
<body bgcolor="<?=$bgcolor?>">
<?php

if (isset($_COOKIE['last_visit'])) {
    echo "<hr>";
    echo "You were here last time on " . $_COOKIE['last_visit'];
    echo "<hr>";
}
?>
<h3>Mercedes Maybach</h3>
<nav>
    <a href="april27.php">Mercedes Maybach</a>
    <a href="april30.php">Hawaii</a>
    <a href="test.php">NYC</a>
</nav>
<hr>
<img src="https://i.ytimg.com/vi/QsEjRynK69s/maxresdefault.jpg">
</body>
</html>
