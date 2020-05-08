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
<div>
    <h3>Contact Form</h3>
    <hr>
    <form action="backend.php" method="post">
        <p>Email: <input name="email" type="email" placeholder="Your Email Address"></p>
        <p>Subject: <input name="subject" type="text" placeholder="Your Email Subject"></p>
        <p>Message:<br>
        <textarea name="message" placeholder="Your Message"></textarea>
        </p>
        <p>
            <button type="reset">Start Over</button>
            <button type="submit">Send</button>
        </p>
    </form>
</div>

</body>
</html>