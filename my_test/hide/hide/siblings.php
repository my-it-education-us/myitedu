<!DOCTYPE html>
<html>
<head>
    <style>
        .siblings * {
            display: block;
            border: 2px solid lightgrey;
            color: lightgrey;
            padding: 5px;
            margin: 15px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("h2").siblings().css({"color": "red", "border": "2px solid red"});
        });
    </script>
</head>
<body class="siblings">

<div>div (parent)
    <p>p</p>
    <span>span</span>
    <h2>h2hhgbvcb</h2>
    <h3>h3gfhbvbv</h3>
    <p>pgfbfg</p>
</div>

</body>
</html>