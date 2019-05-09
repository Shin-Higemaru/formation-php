<?php
require 'session_check.php';
$cookie_etat_civil = isset($_COOKIE['etat_civil']) ? $_COOKIE['etat_civil']: null ;
$cookie_animaux = isset($_COOKIE['animaux']) ? unserialize($_COOKIE['animaux']): null ;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php if(in_array('chien',$cookie_animaux)) :?>
    //Chien
    <img src="https://media.giphy.com/media/mCRJDo24UvJMA/giphy.gif" alt="chien">
<?php endif ?>

<?php if(in_array('chat',$cookie_animaux)) :?>
//Chat
<img src="https://media.giphy.com/media/C9x8gX02SnMIoAClXa/giphy.gif" alt="chat">
<?php endif ?>

<?php if(in_array('poisson-rouge',$cookie_animaux)) :?>
    //Poisson-rouge
    <img src="https://media.giphy.com/media/Wrmiq7uZrieyc/giphy.gif" alt="poisson-rouge">
<?php endif ?>

<?php if(in_array('tortue',$cookie_animaux)) :?>
    //Tortue
    <img src="https://media.giphy.com/media/BcxV0Qs6Es3JK/giphy.gif" alt="tortue">
<?php endif ?>

<?php if($cookie_etat_civil == "celibataire") :?>
//banierre
    <a href="https://www.meetic.fr?tracking_id=44646" target="_blank">
<img src="img/meetic_banniere.gif" alt="">
    </a>
<?php endif ?>
</body>
</html>
