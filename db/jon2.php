<?php
include "../database.php";
$db = new \Database\database("myitedu");
$sher = $_POST;
$id = (int) $sher['id'];
$txt = (string) $sher['txt'];

$sql = "UPDATE blogs SET content='$txt' WHERE id = $id";
$saved = $db->sql($sql);
echo "Your blog #$id has been updated";
