<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYITEDU Dictionary</title>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<?php
include "backend.php";
?>
<div class="container-fluid" id="dictionary">
    <div class="search_form">
        <h3>MYITEDU Dictionary</h3>
        <form>
            <p>
                <label>Search: </label>
                <input value="<?=$obj->keyword?>" name="keyword" type="text" placeholder="Your word">
                <button type="submit">GO</button>
                <br>
                <img class="divider" src="https://www.clipartkid.com/images/335/christian-page-divider-clip-art-CguTwd-clipart.png">
            </p>

        </form>
    </div>
        <div class="jumbotron">
            <h1 class="display-4"><?=ucfirst($dictionary->word)?></h1>

            <?foreach ($dictionary->results as $row=>$result):?>
            <div>
                <p class="lead">
                    <?=$dictionary->results[$row]->definition?>
                    <br>
                <h6><?=$dictionary->results[$row]->partOfSpeech?></h6>
                </p>
                <hr class="my-4">

                <?if (isset($dictionary->results[$row]->synonyms)):?>
                <p>
                <h6>Synonyms</h6>
                <ul>
                    <?foreach ($dictionary->results[$row]->synonyms as $synonym):?>
                        <li><?=$synonym?></li>
                    <?endforeach; ?>
                </ul>
                </p>
                <?endif;?>

            </div>

            <?endforeach;?>

            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>


            <pre>
                <?php
                print_r($dictionary);
                ?>
            </pre>

        </div>
</div>
<style>


    .divider{
        width: 40%;
    }

    .search_form{
        text-align: center;
    }

    #dictionary{
        background-color: whitesmoke;
        border-radius: 15px;
        margin: 10px auto;
        width: 95%;
    }

    body{
        color: #55150f;
        background-color: #13243d;
    }
</style>
</body>
</html>