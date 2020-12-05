<?php
$file = file_get_contents("file.txt");
$pattern = "#([a-z\:]{1,100})..(\w{1,100}\.?)(\w{1,100}\.?)(\w{1,100}\.?)?#";
$jon = preg_match_all($pattern, $file, $area_codes);
echo "<pre>";
print_r($area_codes);