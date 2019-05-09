<?php

// Les tableaux à indices numériques

$notes_eleves = array(12,5,6,17,12,14,13);

// Autres syntaxes

$notes_eleves = [12,5,6,17,12,14,13];
?>
<!-- Somme de toutes les notes-->
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
<p><?php echo "La somme des notes = " . array_sum($notes_eleves); ?></p>

<!--Nombre de toutes les notes-->

<p><?php echo "Le nombre des notes = " .count ($notes_eleves); ?></p>

<!--Total notes diviser par nbre de notes-->
<p><?php echo "La moyenne des notes est " .round(array_sum($notes_eleves)/count($notes_eleves),1); ?></p>

<!--Afficher la meilleur note-->

<p><?php echo "La meilleur note est " .max($notes_eleves)?></p>

<!--Afficher la moins bonne-->

<p><?php echo "La moins bonne note est " .min($notes_eleves)?></p>

<!--Est-ce que le tableau de notes contient la note maximale 20?-->
<?php if(in_array(20,$notes_eleves)) :?>
    <p style="color:green">Un/une élève à eu 20 !!!</p>
<?php else :?>
    <p style="color:red">Personne n'a eu 20 :(</p>
<?php endif ?>

</body>
</html>
