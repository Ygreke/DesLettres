<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div id="border">
    <div>
        <h1 id="idh1">DES CHIFFRES ET DES LETTRES</h1>
    </div>
    <div class="container">
        <div id ="1" class="lettre lettre1"></div>
        <div id ="2" class="lettre lettre2"></div>
        <div id ="3" class="lettre lettre3"></div>
        <div id ="4" class="lettre lettre4"></div>
        <div id ="5" class="lettre lettre5"></div>
        <div id ="6" class="lettre lettre6"></div>
        <div id ="7" class="lettre lettre7"></div>
        <div id ="8" class="lettre lettre8"></div>
        <div id ="9" class="lettre lettre9"></div>
    </div>
    <br>
    <div class="containerbut">
        <button id="butconsonne" class="butconsonne">Consonne</button>
        <button id="butvoyelle" class="butvoyelle">Voyelle</button>
        <button class="reload">Reset</button>
    </div>
</div>
<h1 style="margin-top: 200px">

</h1>
<audio src="son.mp3" autoplay></audio>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>