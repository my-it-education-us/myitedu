<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<?php

$email = $_POST['email']??null;
$password = $_POST['password']??null;
$formsubmitted = $_POST['formsubmitted']??false;

if ($formsubmitted){

    if ($email==='jon@jon.com' && $password === 'password'){
        session_start();
        $_SESSION['loggedin'] = true;
        header('Location: profile.php?msg=success');
        exit;
    }
    header('Location: login.php?msg=Your credentials are incorrect');
    exit;

}


?>

<div class="container-fluid">
    <h3>Members Login</h3>
    <div class="alert alert-danger">
        <?=$_GET['msg']??null?>
    </div>
    <div class="myform">
        <form name="loginform" method="post" action="login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input value="jon@jon.com" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input value="password" name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                <input value="1" name="formsubmitted" type="hidden">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>