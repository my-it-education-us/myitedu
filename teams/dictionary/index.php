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

            <div id="results">
                <?foreach ($dictionary->results as $row=>$result):?>
                    Definition: <?=$result->definition?> <br>
                    PartOfSpeech: <?=$result->partOfSpeech?> <br>

                    <?if(isset($result->synonyms)):?>
                    Synonyms: <?print_r($result->synonyms,1)?> <br>
                    <?endif;?>
                    <?if(isset($result->similarTo)):?>
                        Similiar To:
                        <ul>
                        <?foreach ($result->similarTo as $similarTo):?>
                        <li><?=$similarTo;?></li>
                        <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->antonyms)):?>
                        Antonyms:
                        <ul>
                            <?foreach ($result->antonyms as $antonym):?>
                                <li><?=$antonym;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->derivation)):?>
                        Derivation:
                        <ul>
                            <?foreach ($result->derivation as $derivation):?>
                                <li><?=$derivation;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->examples)):?>
                        Examples:
                        <ul>
                            <?foreach ($result->examples as $example):?>
                                <li><?=$example;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->also)):?>
                        Also:
                        <ul>
                            <?foreach ($result->also as $also):?>
                                <li><?=$also;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                <hr>
                <?endforeach;?>
            </div>





            <div id="syllables">
                <ol>
                    <?foreach ($dictionary->syllables->list as $row=>$syllable):?>
                    <li><?=$syllable?></li>
                    <?endforeach;?>
                </ol>
                <div class="clearfix"></div>
            </div>
            <?foreach ($dictionary->pronunciation as $row2=>$item):?>
                <div id="pronunciation">
                    <?=print_r($item,1)?>
                </div>
            <?endforeach;?>





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
        background-color: #872315;
        border-radius: 15px;
        margin: 10px auto;
        width: 95%;
        height: auto;
    }

    body{
        color: #55150f;
        background-color: #13243d;
    }
</style>
</body>
</html>