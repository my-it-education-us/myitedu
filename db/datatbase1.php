<?php

$mysql = mysqli_connect("localhost","root", "","myitedu");
if (!$mysql && !isset($mysql_->connect_error)){
    die("There is a DB connection error.");
}

$sql = "SELECT * FROM amazon WHERE color like '%black%;'";
$results = $mysql->query($sql);

echo "<pre>";
if (!$results->num_rows){
    die("No");
}

while ($row=$results->fetch_assoc()){
    print_r($row);
}