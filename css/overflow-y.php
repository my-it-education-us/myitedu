<!DOCTYPE html>
<html>
<head>
    <style>
        div.ex1 {
            background-color: lightblue;
            height: 40px;
            width: 200px;
            overflow-y: scroll;
        }

        div.ex2 {
            background-color: lightblue;
            height: 40px;
            width: 200px;
            overflow-y: hidden;
        }

        div.ex3 {
            background-color: lightblue;
            height: 40px;
            width: 200px;
            overflow-y: auto;
        }

        div.ex4 {
            background-color: lightblue;
            height: 40px;
            width: 200px;
            overflow-y: visible;
        }
    </style>
</head>
<body>

<h1>The overflow-y Property</h1>

<p>The overflow-y property specifies whether to clip the content, add a scroll bar, or display overflow content of a block-level element, when it overflows at the top and bottom edges.</p>

<h2>overflow-y: scroll:</h2>
<div class="ex1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</div>

<h2>overflow-y: hidden:</h2>
<div class="ex2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</div>

<h2>overflow-y: auto:</h2>
<div class="ex3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</div>

<h2>overflow-y: visible (default):</h2>
<div class="ex4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</div>

</body>
</html>
