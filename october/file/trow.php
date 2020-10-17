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
<form action="trow.php" method="post">

<?php

function getCars($file_name)
{


    try {
        if (!file_exists($file_name)) {
            throw new Exception("Siz ezlayotgan <del>\"$file_name\"</del> file mavjud emas:_: eltimoz tiksherib qayta urinib kuring!");
        }
        $cars = file_get_contents("$file_name");
        echo $cars;

    } catch (Exception $e) {
        echo "<b>An error :</b> " . $e->getMessage();
        echo "<hr>";
        echo "<u>File : </u> <b>" .$e->getFile(); echo ". </b>";
        echo "<b> on line : </b ><u>" . $e->getLine(); echo "</u>";



    }
}
echo "<hr>";

$file_name = $_POST['student'];
getCars($file_name);
echo "<hr>
";


?>
    <div>
    <input type="text" name="student" class="student" placeholder="file name">
    <button type="submit">submit</button>
    </div>
</form>

</body>
</html>
