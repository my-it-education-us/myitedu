<!DOCTYPE html>
<html>
<head>
    <style>
        div.ex1 {
            background-color: lightblue;
            width: 40px;
            overflow-x: scroll;
        }

        div.ex2 {
            background-color: lightblue;
            width: 40px;
            overflow-x: hidden;
        }

        div.ex3 {
            background-color: lightblue;
            width: 40px;
            overflow-x: auto;
        }

        div.ex4 {
            background-color: lightblue;
            width: 40px;
            overflow-x: visible;
        }
    </style>
</head>
<body>

<h1>The overflow-x Property</h1>

<p>The overflow-x property specifies whether to clip the content, add a scroll bar, or display overflow content of a block-level element, when it overflows at the left and right edges.</p>

<h2>overflow-x: scroll:</h2>
<div class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>

<h2>overflow-x: hidden:</h2>
<div class="ex2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</div>

<h2>overflow-x: auto:</h2>
<div class="ex3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>

<h2>overflow-x: visible (default):</h2>
<div class="ex4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>

</body>
</html>
