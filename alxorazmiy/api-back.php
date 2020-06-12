<?php
$city = $_GET ['city']??'New_York';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://aladhan.p.rapidapi.com/timingsByCity?city=$city&country=USA",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: aladhan.p.rapidapi.com",
        "x-rapidapi-key: 72204e66e6msh4e1c94f0f32771dp187593jsnf23e6cc7060d"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
     $result = json_encode($response);

}

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
   <div class="container-fluid">

       <table>
           <tr><td>sunrise</td><td><?=$result[0]->sunrise?></td></tr>
       </table>
   </div>

</body>
</html>
