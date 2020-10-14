<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form action="cube.php" method="get">

<div class="wrapper">
    <div class="cube">
        <b class="front"></b>
        <b class="back"></b>
        <b class="top"></b>
        <b class="bottom"></b>
        <b class="left"></b>
        <b class="right"></b>
        <i class="front"></i>
        <i class="back"></i>
        <i class="top"></i>
        <i class="bottom"></i>
        <i class="left"></i>
        <i class="right"></i>
    </div>
</div>



    <div class="button">
        <button name="start" class="start" type="reset">Start Over</button>
        <button class="go" type="submit">Start</button>
    </div>
    </div>

</form>


<style>


    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
        text-align: center;

    }
    .start{
        background-color: rgba(0,0,0,0.9);
        color: white;
        border-radius: 5px;
        margin-right: 15px;
        width: 130px;
    }
    .go{
        background-color: limegreen;
        width: 150px;
        border: 1px solid limegreen;
        border-radius: 5px;
        color: black;
    }



    @-webkit-keyframes spin {
        from { transform: rotateY(0); }
        to   { transform: rotateY(360deg); }
    }

    .wrapper{
        height: 300px;
        margin-top:50px;
        position:relative;
        perspective: 800px;
        perspective-origin: 50% 100px;
    }

    .cube{
        position: relative;
        margin: 0 auto;
        width: 200px;
        transform-style: preserve-3d;
        animation: spin 4s infinite linear;
        transition: all 1s linear;
    }
    b{
        position:absolute;
        width:200px;
        height:200px;
        display:block;
        background:rgba(255,255,255,0.1);
        box-shadow:inset 0 0 30px rgba(0,0,0,0.2);
        font-size:20px;
        text-align:center;
        line-height:200px;
        color:rgba(0,0,0,0.5);
        font-family:sans-serif;
        text-transform:uppercase;
        transition: all 1s linear;
    }
    b.back{
        transform: translateZ(-100px) rotateY(180deg);
    }
    b.right{
        transform:rotateY(-270deg) translateX(100px);
        transform-origin: top right;
    }
    b.left{
        transform:rotateY(270deg) translateX(-100px);
        transform-origin: center left;
    }
    b.top{
        transform:rotateX(-90deg) translateY(-100px);
        transform-origin: top center;
    }
    b.bottom{
        transform:rotateX(90deg) translateY(100px);
        transform-origin: bottom center;
    }
    b.front{
        transform: translateZ(100px);
    }

    i{
        position:absolute;
        top:50px;
        left:50px;
        width:100px;
        height:100px;
        display:block;
        transition: all 1s linear;
    }
    i.front{
        transform: translateZ(50px);
    }
    i.back{
        transform: translateZ(-50px) rotateY(180deg);
    }
    i.bottom{
        transform:rotateX(-90deg) translateY(50px);
        transform-origin: left bottom;
    }
    i.left{
        transform:rotateY(270deg) translateX(-50px);
        transform-origin: center left;
    }
    i.right{
        transform:rotateY(-270deg) translateX(50px);
        transform-origin: top right;
    }
    i.top{
        transform:rotateX(-270deg) translateY(-50px);
        transform-origin: left top;
    }


</style>

</body>
</html>
