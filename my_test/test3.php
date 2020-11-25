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
    <div>
        <button id="droppable2" class="sher">PHP</button>
    </div>
    <div>
        <button id="droppable3" class="sher">CSS</button>
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
    }
</style>


</body>
</html>