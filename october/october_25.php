<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>October 25 exercises</title>
</head>
<body>
<?php
$img_id = $_GET['img_id']??0;
$img_id = (int) $img_id;

$imgs = [
    'https://www.visittheusa.com/sites/default/files/styles/hero_l_x2/public/images/hero_media_image/2017-05/9dbea438bcd305129064e4a048cc6b52.jpeg?itok=fsRq3wyj',
    'https://static.rentcars.com/imagens/modules/localidade/about/983-desktop-location-description.png',
    'https://i.ytimg.com/vi/gYLQThUxpvQ/maxresdefault.jpg',
    'https://s.yimg.com/ny/api/res/1.2/JErH0hkC7onpTY8r2.s70Q--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/https://media-mbst-pub-ue1.s3.amazonaws.com/creatr-uploaded-images/2019-08/b9d6acb0-c2af-11e9-abf9-6f3c79947c52',
    'https://news.paasban.org/wp-content/uploads/2020/05/nyc-usa-corona-death-updates.jpg',
    'https://dynaimage.cdn.cnn.com/cnn/c_fill,g_auto,w_1200,h_675,ar_16:9/https%3A%2F%2Fcdn.cnn.com%2Fcnnnext%2Fdam%2Fassets%2F190304023003-0304-new-york-snow.jpg',
    'https://static01.nyt.com/images/2018/04/02/nyregion/02nytoday1/02nytoday1-superJumbo.jpg',
    'https://i.insider.com/55ce33b92acae717448bddf6?width=1100&format=jpeg&auto=webp',
    'https://scotscoop.com/wp-content/uploads/2019/09/photo-illustaton-900x701.jpg'
        ];
if (!in_array($img_id, array_keys($imgs))){
    $img_id = 0;
}
?>

<div class="container-fluid">
    <h3>New York, US</h3>
    <div class="imgsbox">
        <?php
        foreach ($imgs as $img_number=>$img){
            ?>
            <div class="mybox"><a href="october_25.php?img_id=<?php echo $img_number;?>"><img src="<?php echo $img;?>"></a></div>
            <?php
        }
        ?>
    </div>

    <div class="display">
        <img src="<?php echo $imgs[$img_id]?>">
        <br>
    </div>
</div>

<style>
    * {box-sizing: border-box;}

    .mybox img:hover {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
    }


    body{
        background-color: silver;
    }
    .imgsbox{
        text-align: center;
    }

    .display img{
        width: 100%;
        height: 600px;
        border: 3px solid red;
        border-radius: 25px;
    }

    .display{
        width: 80%;
        height: 300px;
        margin: 20px auto;
    }
    .mybox img{
        width: 100%;
        height: 100px;
        border: 4px solid darkred;
        border-radius: 25px;
    }
    .mybox{
        width: 120px;
        height: 100px;
        display: inline-block;
        margin: 5px;
    }
</style>

</body>
</html>