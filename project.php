<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

include("include.php");

?>
    <h1 class="proj">My project</h1>
    <div class="container" id="blur">
        <div class="card">
           <div class="containt">
              <h2>Project 1</h2>
              <p>Here is one of my projet a website witch i do with wordpress</p>
              <a href="#" onclick="toggle()">more info</a>
     
           </div>
           <img class="p1" src="image/internet.png" alt="inter">
        </div>
        <div class="card">
           <div class="containt">
              <h2>Project 2</h2>
              <p>The second projet is in developpement (brainstorming)</p>
              <a href="#" onclick="togglee()">more info</a>
     
           </div>
           <img src="image/coin.png" alt="">
        </div>
     </div>
     
        <div id="popup">
           <h2>75 styles</h2>
           <p>its a website who is about mode and how to dress in adquation with your morpho types a professional shopper will help whit that but of course not for free</p>
           <p>the challenge in this project was to satisfy all the client dessire whit wordpress who was limited and also to respect a certain budget</p>
           <p>if you want to take a look you can find the link below <br><a href="https://75styles.fr/">Go to</a></p>
           <a href="#" onclick="toggle()">Close</a>
        </div>
        <div id="popupp">
           <h2>Projet How To Make Money</h2>
           <p>im a man who always want something and we human are the only living creature who need to paye for living and get thing so i tink about ways to make easy money</p>
           <p>and im looking into crypto but for that you need a little bit of money so i want to do a list of all the free way to make money like tranlate a website teach math to a kid ...</p>
           <a href="#" onclick="togglee()">Close</a>
        </div>
     
     
     
         <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
             <script type="text/javascript" src="js/anime.js"></script>


</body>
</html>