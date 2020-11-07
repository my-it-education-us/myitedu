<!DOCTYPE html>
<html>
<head>
    <style>
        #div1 {
            position: relative;
            height: 150px;
            width: 150px;
            margin-left: 60px;
            border: 1px solid blue;
            perspective: 100px;
            perspective-origin: left;
        }

        #div2, #div4, #div6 {
            padding: 50px;
            position: absolute;
            border: 1px solid black;
            background-color: red;
            background: rgba(100,100,100,0.5);
            transform-style: preserve-3d;
            transform: rotateX(45deg);
        }

        #div3 {
            position: relative;
            height: 150px;
            width: 150px;
            margin-left: 60px;
            border: 1px solid blue;
            perspective: 100px;
            perspective-origin: bottom right;
        }

        #div5 {
            position: relative;
            height: 150px;
            width: 150px;
            margin-left: 60px;
            border: 1px solid blue;
            perspective: 100px;
            perspective-origin: -90%;
        }
    </style>
</head>
<body>

<h1>The perspective-origin Property</h1>

<h2>perspective-origin: left:</h2>
<div id="div1">DIV1
    <div id="div2">DIV2</div>
</div>

<h2>perspective-origin: bottom right:</h2>
<div id="div3">DIV3
    <div id="div4">DIV4</div>
</div>

<h2>perspective-origin: -90%:</h2>
<div id="div5">DIV5
    <div id="div6">DIV6</div>
</div>

<p><strong>Note:</strong> The perspective-origin property is not supported in Internet Explorer 9 and earlier versions.</p>

</body>
</html>

