<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/jquery-3.5.1.js"></script>
</head>
<body>

<div class="container-fluid">
    <h4> My Dynanic Content</h4>
    <hr>
    <div class="left_col"></div>
    <div class="right_col"></div>
    <div class="clearfix"></div>
    <div class="my_button">
        <p>
            <input name="keyword" placeholder="Your Keyword" id="inp_keyword">
        </p>
        <button id="btn_create" class="btn btn-info">CREATE</button>
        <button id="btn_copy" class="btn btn-success">COPY</button>
        <button id="btn_save" class="btn btn-dark">SAVE</button>
        <button id="btn_backend" class="btn btn-danger">BACKEND</button>
        <button id="btn_lookup" class="btn btn-warning">LOOKUP</button>
    </div>
</div>


<style>
    .my_button{
        background-color: lightgray;
        border: 5px solid black;
        padding: 20px;
    }
    .container-fluid{
        text-align: center;
    }
    .left_col{
        background-color: #2e6da4;
        color: white;
        width: 50%;
        height: 586px;
        float: left;
        display: inline-block;
        border: 5px solid black;
        overflow: auto;
    }
    .right_col{
        background-color: #FF0000;
        color: white;
        width: 50%;
        height: 586px;
        float: right;
        display: inline-block;
        border: 5px solid black;
        overflow: auto;
    }
</style>

<script >
    $(function (){
        let html_text= "Take your writing from good to great\n" +
        "Microsoft Editor goes beyond checking spelling and grammar\n" +
        " so you can write with confidence. Get intelligent suggestions \n" +
        "in the Editor Overview pane in Word and let Editor assist you across \n" +
        "documents, email, and on the web."

        $("#btn_create").click(function (){
            $(".left_col").html(html_text);
        });

        $("#btn_copy").click(function (){
            let html = $(".left_col").html();
            $(".right_col").html(html);
        });

        $(".left_col").dblclick(function (){
            $(this).attr("contenteditable", true).css("background-color",'lightgray');
        })

        $("#btn_save").click(function (){
            $(".left_col").attr("contenteditable", false).css("background-color",'#2e6da4');;
        })

        $(".left_col").keydown(function (){
            let html = $(".left_col").html();
            $(".right_col").html(html);
        })
    });


</script>

</body>
</html>