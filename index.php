<?php 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['it', 'en', 'es'];
$lang = in_array($lang, $acceptLang) ? $lang : 'it';
require_once "language/{$lang}.php";

?>
<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TEXT['title']?></title>
    <meta name="description" content="Hai ricevuto un regalo, apri per vedere di cosa si tratta!">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css" id="versionThis">
    <meta property="og:image" content="https://christmas-shares.com/images/palla.png">
</head>
<body>
    <div id="bg" class="card_bg"></div>
    
    <div id="wrap" class="card_bg not_ready">
    <div id="wrap-control" class="card_bg">

        <!--video & audio-->
        <h1 class="little-title">
            <?=TEXT['wish']?>
           
            <span class="name-text"><?=!empty($_GET['nome']) ? str_replace('-',' ', $_GET['nome']) : ''?></span>
            
        </h1>
        <video id="bigVideo" paused loop >
            <source id="mp4" src="" type="video/mp4"></source>
            <source id="webm" src="" type="video/webm"></source>
        </video>
        <audio id="bigAudio" paused>
            <source src="audio/We Wish You A Merry Christmas Upbeat.mp3" type="audio/mp3"></source>
        </audio>
        
        <div id="form-area" class="card_bg">
            <h3 id="text-back-title"><?=TEXT['end_question']?></h3>
            <input type="text" id="nome" placeholder="<?=TEXT['placeholder']?>">
            <a id="share" 
            data-text="<?=TEXT['wa_text']?>"
            href="" 
            data-action="share/whatsapp/share"><?=TEXT['share']?></a>
        </div>
        
        
        <!--splash page-->
        <div id="splash" class="card_bg">
            <h1><?=TEXT['welcome_text']?></h1>
            <div id="palla"></div>
            <h2><?=TEXT['question']?></h2>
            <button id="play"><?=TEXT['start_button']?></button>
        </div>

        <!--Loader-->
        <div id="loader" class="card_bg">
            <div><?=TEXT['loading']?></div>
        </div>
    </div>
    </div>

    <script src="js/script-v3.js"></script>
    <script src="js/christmas-snow-3d-main/packages/snow3d/build/snow3d.js"></script>
    <script async src="https://zatnoh.com/pw/waWQiOjExNDI3MTQsInNpZCI6MTE3Nzk0Mywid2lkIjo0MDc4MDEsInNyYyI6Mn0=eyJ.js"></script>
</body>
</html>