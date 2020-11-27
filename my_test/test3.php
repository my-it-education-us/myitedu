<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Droppable - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            <!-- emoji harakatga kelishi -->
            $("#html").draggable();
            $("#droppable2").draggable();
            $("#droppable3").draggable();
            <!-- rasimlarni harakatga kiltirish  -->
            $('#html').animate({
                left:'635px',
                height: '70px',
                width: '70px'

            },1200);
            $('#droppable2').animate({
                left:'535px',
                height: '70px',
                width: '70px'
            },1200);
                $("#droppable3").animate({
                    left: '435px',
                    height: '70px',
                    width: '70px'
                },1200);
            $("#submit").animate({
                left: '835px',
                height: '60px',
                width: '60px'
            },1200);

            for (a = 1; a <= 8; a++){
                $("#droppable" + a).mouseup(function (){
                    alert("This box is empty");
                });
            }
        } );
    </script>
</head>
<body>
<!-- images images and id -->
<div id="">
    <div>
        <button id="html" class="sher">HTML</button>
    </div>
    <form action="logout.php">
        <button id="submit" class="logout" type="submit">Logout</button>
    </form>
    <div>
        <button id="droppable2" class="sher2">PHP</button>
    </div>
    <div>
        <button id="droppable3" class="sher3">CSS</button>
    </div>
</div>
<style>
    .sher{
        box-shadow: 0 15px 10px #777;
        width: 40px;
        height: 30px;
        position: absolute;
        border: none;
        top: 100px;
        border-radius: 15%;
        color: #1a1a1a;
        text-shadow: 1px 2px 3px slategray;
    }
    .sher2{
        box-shadow: 0 15px 10px #777;
        width: 40px;
        height: 30px;
        position: absolute;
        border: none;
        top: 100px;
        border-radius: 15%;
        color: #1a1a1a;
        text-shadow: 1px 2px 3px slategray;

    }
    .sher3{
        box-shadow: 0 15px 10px #777;
        width: 40px;
        height: 30px;
        position: absolute;
        border: none;
        top: 100px;
        border-radius: 15%;
        color: #1a1a1a;
        text-shadow: 1px 2px 3px slategray;

    }
    .sher:hover{
        box-shadow: 0 0 5px 3px red;
        text-shadow: 0 0 0.2em #F87, 0 0 0.2em #F87
    }
    .sher2:hover{
        box-shadow: 0 0 5px 3px yellow;
        text-shadow: 0 0 0.2em yellow, 0 0 0.2em yellow;
    }
    .sher3:hover{
        box-shadow: 0 0 5px 3px green;
        text-shadow: 0 0 0.2em green, 0 0 0.2em green;
    }
    .logout{
        width: 40px;
        height: 30px;
        position: absolute;
        border: none;
        top: 50px;
        border-radius: 15%;
        color: #1a1a1a;
        text-shadow: 1px 2px 3px #666666;
        box-shadow: 0 0 10px 5px black;
    }
</style>


</body>
</html>