<?php
/**
 * En vous référent à la documentation en ligne de PHP (php.net), transformer les chaines de caractères suivantes
 * selon les directives indiquées
 *
 *
 * 1_ Transformer une chaîne en majuscule en minuscule
 * 2_ Transformer en majuscule le premier caractère d'une chaîne
 * 3_ Transformer en majuscule le premier caractère de chaque mot d'une chaîne
 * 4_ Calculer le nombre de caractère présent dans une chaîne
 * 5_ Supprimer les espaces en début et fin d'une chaîne
 * 6_ Supprimer la première lettre d'une chaîne
 * 7_ Remplacer des caractères présents dans une chaîne par d'autres caractères
 *
 *
 *
 */
$string = "VOITURE";
$gova = "voiture";
$mots = "Essai d'exercices php avec marie";
$words = "Well, excuse me princess"
?>

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
<h2>1_ Transformer une chaîne en majuscule en minuscule</h2>
<p>Transformer <?php echo $string?> en minuscule <?php echo strtolower($string); ?></p>

<h2>2_ Transformer en majuscule le premier caractère d'une chaîne</h2>
<p><?php echo ucwords($gova); ?></p>

<h2>3_ Transformer en majuscule le premier caractère de chaque mot d'une chaîne</h2>
<p><?php echo ucwords($mots)?></p>

<h2>4_ Calculer le nombre de caractère présent dans une chaîne</h2>
<p><?php echo strlen($mots)?></p>

<h2>5_ Supprimer les espaces en début et fin d'une chaîne</h2>
<p><?php echo $words = strtr($words, array(' '=>''));?></p>
<h2>6_ Supprimer la première lettre d'une chaîne</h2>
<p><?php echo $string = substr($string,1) ?></p>

<h2>7_ Remplacer des caractères présents dans une chaîne par d'autres caractères</h2>
<p><?php echo str_replace (  "d'exercices" ,  "d'exo" , $mots)?></p>

</body>
</html>
