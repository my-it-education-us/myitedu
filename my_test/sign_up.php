<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="mywrapper">
<form action="sign_in.php" method="post">
<div class="btn-grid">
    <input name="lname" type="text" class="form-control_last" placeholder="last name">
    <input name="fname" type="text" class="form-control_last" placeholder="first name">
        </div>
        <div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input name="email" placeholder="your email@gmail.com" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
</div>

<button type="reset" class="Reset">Reset</button>
<button type="submit" class="Submit">Sign in</button>


</form>
</div>

<style>
    body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: white;
        padding: 0;
        margin: 0;
        display: flex;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }
    .form-control_last{
        text-transform: capitalize;
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
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
    .btn-grid{
        display: grid;
        grid-template-columns: repeat(2, auto);
        gap: 30px;
        margin: 20px 0;
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
</style>
</body>
</html>