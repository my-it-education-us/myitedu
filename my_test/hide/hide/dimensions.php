<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                var txt = "";
                txt += "Width of div: " + $("#div1").width() + "</br>";
                txt += "Height of div: " + $("#div1").height();
                $("#div1").html(txt);
            });
        });
    </script>
    <style>
        #div1 {
            height: 120px;
            width: 320px;
            padding: 10px;
            margin: 3px;
            border: 1px solid blue;
            background-color: lightblue;
        }
    </style>
</head>
<body>

<div id="div1"></div>
<br>

<button>Display dimensions of div</button>

<p>width() - returns the width of an element.</p>
<p>height() - returns the height of an element.</p>

</body>
</html>
