<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="mybox">
Sherbek
</div>

<style>
    #mybox{
        width: 400px;
        height: 400px;
        background-color: black;
        text-align: center;
        color: white;
        margin: 100px auto;
        font-size: 60px;
        line-height: 350px;
    }

</style>

<script>
    let name = prompt("What is your name?");
    if (name == 'sherbek'){
        name = "Student";
    }else if (name == 'Farkhod'){
        name = "brother";
    }
    document.getElementById("mybox").innerHTML = name;

</script>


</body>
</html>
