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
<script>
    let questions = [
        {
            prompt: "What color are apples?\n (a) Red/Green\n\
            (b) Purple (c) Orange",
            answer: "a"
        },
        {
            prompt: "What color are Bananas?\n (a) Teal\n\ (b) Magenta\n (c) Yellow",
            answer: "c"
        },
        {
            prompt: "What color are Gilos?\n (a) Green\n\ (b) Red\n (c) Yellow",
            answer: "b"
        },
    ]
    let score = 0;

    for (let i=0; i < questions.length; i++){
       let response = window.prompt(questions[i].prompt);
       if (response == questions[i].answer){
           score++;
           alert("Correct!");
       }else {
           alert("WRONG!");
       }
    }
    alert("you got " + score + "/" + questions.length);
</script>

</body>
</html>