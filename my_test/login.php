<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
            $("#flip").radio(function(){
                $("#panel").slideUp("slow");
            });
        });

    </script>
<div class="container-fluid mywrapper">
<form action="backend.php" method="post">
    <?php

    if (isset($_GET['error']) && $_GET['error']==1)
    {
        ?>
        <div class="alert alert-danger"><?php echo $_GET['msg']??null?></div>
        <?php
    }
    ?>

    <div id="flip">
        Shu yerga kilib bosing
    </div>
    <div id="panel">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="reset" class="Reset">Reset</button>
    <button type="submit" class="Submit">Login</button>
    </div>
</form>
    <form method="post" action="sign_up.php">
        <button type="submit" class="sign_up">Register</button>
    </form>
</div>



    <style>
        .alert{
            border-radius: 25px;
            color: black;
            box-shadow: 0 0 2px 2px red;
            text-shadow: 0 0 0.2em white, 0 0 0.2em white;
        }
        .mywrapper{
            width: 700px;
            margin: 30px auto;
            background-color: #e5e5e5;
            border: 1px solid #000000;
            border-radius: 15px;
            padding: 5px;
            box-shadow: 0 15px 10px #777;
        }
        #panel, #flip {
            padding: 10px;
            margin: 10px;
            text-align: center;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
            border-radius: 25px;
        }
        #flip:hover{
            background-color: #a9d9a2;
        }

        #panel {
            margin: auto;
            padding: 50px;
            display: none;
            box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.6);
        }
        .Reset{
            color: white;
            background-color: darkblue;
            width: 75px;
            height: 33px;
            margin: 10px;
            border-radius: 35px;
            box-shadow: 0 0 5px 3px black;
            text-shadow: 0 0 0.2em blue, 0 0 0.2em white;
        }
        .Submit{
            color: white;
            background-color: blue;
            width: 75px;
            height: 33px;
            border-radius: 35px;
            box-shadow: 0 0 5px 3px blue;
            text-shadow: 0 0 0.2em black, 0 0 0.2em white;
        }
        .sign_up{
            margin: 20px;
            color: white;
            background-color: green;
            width: 95px;
            height: 33px;
            border-radius: 35px;
            box-shadow: 0 0 5px 3px green;
            text-shadow: 0 0 0.2em black, 0 0 0.2em white;
            display: grid;
        }
    </style>

</head>
</body>


