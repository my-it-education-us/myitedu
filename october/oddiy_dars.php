<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div data-color="red" style="background-color: red" class="box"></div>
<div data-color="green" style="background-color: green" class="box"></div>
<div data-color="black" style="background-color: black" class="box"></div>
<div data-color="blue" style="background-color: blue" class="box"></div>
<div data-color="goldenrod" style="background-color: goldenrod" class="box"></div>
<div data-color="lightcoral" style="background-color: lightcoral" class="box"></div>
<div data-color="darkolivegreen" style="background-color: darkolivegreen" class="box"></div>
<div data-color="darkmagenta" style="background-color: darkmagenta" class="box"></div>


<style>
    .box{
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: inline-block;
        margin: 5px;
        cursor: pointer;
    }
</style>

<script>
    $(function (){

        $(".box").click(function (){
            let color = $(this).data('color');
            $("body").css("background-color",color);

        });


    });
</script>
</body>
</html>