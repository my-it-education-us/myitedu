<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<?php

include "../database.php";
$db = new \Database\database("myitedu");
$blogs = $db->sql("SELECT * FROM blogs;");

foreach ($blogs as $blog){
    echo "<div id=\"txt{$blog['id']}\" data-id=\"{$blog['id']}\"  class='textdiv' contenteditable='true'>{$blog['content']}
</div><button id=\"btn{$blog['id']}\" data-id=\"{$blog['id']}\" class='btn btn-success savebtn'>Save</button><br><hr>";

}
?>

<div id="counter">0</div>
<hr>
<div id="result"></div>


<style>
    body{
        background-color: antiquewhite;
        color: black;
    }
    .btn{
        color: white;
        background-color: darkgreen;
    }

    .textdiv{
        padding:5px;
        overflow: hidden;
        float: left;
        color: black;
    }
    .btn{
        display: none;
        color: black;
    }

    #counter{
        margin: auto;
        width: 75px;
        height: 75px;
        background-color: #2e6da4;
        color: white;
        font-size: 25px;
        text-align: center;
        line-height: 75px;
        border-radius: 55%


    }
    #result{
        color: red;


    }


</style>

<script>

    $(function (){
        $(".savebtn").click(function (){
            let id = $(this).data('id');
            let txt = $("#txt"+id).text();
            let data = {'id':id, 'txt':txt};
            let saved = $.post('jon2.php', data, function (response){
                console.log(response);
            });
            $(this).fadeOut("slow");
        });

        $(".textdiv").keypress(function (){
            let id = $(this).data('id');
            $("#btn"+id).fadeIn('slow');
        });

        let counter = 0;
        function callMyTimer(){
            counter++;
            $("#counter").html(counter);

            if (counter%35==0){
                $("#result").html("saved " + counter);

            }

        }

        setInterval(function(){ callMyTimer(); }, 1000);



    });








</script>


</body>
</html>