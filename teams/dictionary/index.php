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
                    <span class="mylabel">Definition:</span> <?=$result->definition?> <br>
                    <span class="mylabel">PartOfSpeech:</span> <?=$result->partOfSpeech?> <br>

                    <?if(isset($result->synonyms)):?>
                        <span class="mylabel">Synonyms:</span> <?print_r($result->synonyms,1)?> <br>
                    <?endif;?>
                    <?if(isset($result->similarTo)):?>
                        <span class="mylabel">Similiar To:</span>:
                        <ul>
                        <?foreach ($result->similarTo as $similarTo):?>
                        <li><?=$similarTo;?></li>
                        <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->antonyms)):?>
                        <span class="mylabel">Antonyms:</span>
                        <ul>
                            <?foreach ($result->antonyms as $antonym):?>
                                <li><?=$antonym;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->derivation)):?>
                        <span class="mylabel">Derivation:</span>
                        <ul>
                            <?foreach ($result->derivation as $derivation):?>
                                <li><?=$derivation;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->examples)):?>
                        <span class="mylabel">Examples:</span>
                        <ul>
                            <?foreach ($result->examples as $example):?>
                                <li><?=$example;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->also)):?>
                        <span class="mylabel">Also:</span>
                        <ul>
                            <?foreach ($result->also as $also):?>
                                <li><?=$also;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->typeOf)):?>
                        <span class="mylabel">Type Of:</span>
                        <ul>
                            <?foreach ($result->typeOf as $typeOf):?>
                                <li><?=$typeOf;?></li>
                            <?endforeach;?>
                        </ul>
                    <?endif;?>

                    <?if(isset($result->hasTypes)):?>
                        <span class="mylabel">Has Types:</span>
                        <ul>
                            <?foreach ($result->hasTypes as $hasTypes):?>
                                <li><?=$hasTypes;?></li>
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

    .mylabel{
        color: rgba(0, 0, 0, 0.98);
        text-decoration: underline;
    }

    #results{
        background-color: #ffdee7;
        border:1px solid black;
        width: 99%;
        margin: 10px auto;
        padding:5px;
        color: #333333;
    }


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