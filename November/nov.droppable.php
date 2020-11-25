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
                $("#Tesla").draggable();
                $("#chevrolet").draggable();
                $("#mercedes_benz").draggable();
                $("#ferrari").draggable();
                $("#mustang").draggable();
                $("#subaru").draggable();
                $("#toyota").draggable();
            <!-- rasimlarni harakatga kiltirish  -->
            $('#chevrolet').animate({right:'25px'},1200);
            $('#Tesla').animate({right:'135px'},1200);
            $('#ferrari').animate({right:'235px'},1200);
            $('#mercedes_benz').animate({right:'335px'},1200);
            $('#toyota').animate({right:'445px'},1200);
            $('#mustang').animate({right:'555px'},1200);
            $('#subaru').animate({right:'665px'},1200);
            <!-- background_images harakkatga kiltirish-->
            $('#right_background').animate({left:'563px'},1800);
            $('#left_background').animate({width:'563px'},1800);

            for (a = 1; a <= 8; a++){
            $("#droppable" + a).mouseup(function (){
                alert("This box empty");
            });
            }
                for (i = 1; i <= 8; i++) {
                    <!-- droppable  -->
                        $("#droppable" + i).droppable({
                            drop: function (event, ui) {
                                $(this)
                                    .addClass('ui-state-disabled')
                                    .find("p")
                                    .html()
                                    .class();
                            }
                        });
                }
        } );

    </script>
</head>
<body>
<!-- images images and id -->
<div id="">
<div>
    <img class="sher" id="Tesla" src="https://cdn.iconscout.com/icon/free/png-256/tesla-11-569489.png"/>
</div>
<div>
    <img class="sher" id="chevrolet" src="https://cdn.iconscout.com/icon/free/png-512/chevrolet-16-569591.png"/>
</div>
<div>
    <img class="sher" id="mercedes_benz" src="https://www.freepnglogos.com/uploads/mercedes-logo-png/mercedes-logo-take-care-novembro-2.png"/>
</div>
<div>
    <img class="sher" id="ferrari" src="https://cdn.iconscout.com/icon/free/png-512/ferrari-16-569500.png"/>
</div>
<div>
    <img class="sher" id="toyota" src="https://freepngimg.com/thumb/toyota_logo/6-2-toyota-logo-png-image.png"/>
</div>
<div>
    <img class="sher" id="subaru" src="https://image.flaticon.com/icons/png/512/806/806038.png"/>
</div>
<div>
    <img class="sher" id="mustang" src="https://www.carlogos.org/logo/Mustang-logo.png"/>
</div>

</div>

<!--background and id-->
<pre>
<img id="right_background" src="https://i.dlpng.com/static/png/4862732_preview.png"/>
<img id="left_background" src="https://i.pinimg.com/originals/a0/b1/84/a0b1848238a335ae32f1ae32d4f40a07.jpg"/>
</pre>
<!-- droppable -->
<div id="">
<div id="droppable1" class="text">
    <p>Tesla</p>
</div>
<div id="droppable3" class="text">
    <p>Chevrolet</p>
</div>
<div id="droppable4" class="text">
    <p>Mercedes-Benz</p>
</div>
<div id="droppable5" class="text">
    <p>Ferrari</p>
</div>
<div id="droppable6" class="text">
    <p>Toyota</p>
</div>
<div id="droppable7" class="text">
    <p>Subaru</p>
</div>
<div id="droppable8" class="text">
    <p>Mustang</p>
</div>
</div>


<style>
    #right_background{
        width: 55%;
        height: 100%;
        z-index: 200;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    #left_background{
        width: 90%;
        height: 100%;
        z-index: 200;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .sher{
        width: 100px;
        height: 100px;
        position: absolute;
        top: 250px;
        z-index: 202;
    }
    img{
        width: 100px;
        height: 100px;
        position: absolute;
        z-index: 202;
    }
    .text{
        border: 1px solid black;
        color: #333333;
        font-weight: bold;
        display: block;
        width: 100px;
        height: 100px;
        padding: 0.5em;
        float: left;
        margin: 10px;
        z-index: 201;
        position: relative;
    }
</style>


</body>
</html>