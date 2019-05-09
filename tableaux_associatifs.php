<?php

$notes_eleves = ['gokû'=>15,
                 //'goku'=>13,
                 'vegeta'=>12,
                 'gohan'=>10,
                 'goten'=>7,
                 'trunks'=>8,
                 'yamcha'=>3];

//Afficher la note d'un élève
//echo $notes_eleves['goten'];
//affiche 7

$notes = [15,4,6,9,14];
$infos_eleve = ['prenon'=>'gokû',
                'nom'=>'kakarotto',
                'age'=>42,
                "notes"=>$notes];

$infos_eleve2 = ['prenon'=>'vegeta',
                 'nom'=>'vegeta_ôji',
                 'age'=>45,
                 "notes"=>$notes];

// 2 fonctions de debug qui permettent de parcourir un tableau

//print_r affiche seulement les valeurs
print_r($infos_eleve);

//var_dump permet d'afficher les types et la length de chaque valeur
//et de parcourir un objet
var_dump($infos_eleve);


$eleves = [$infos_eleve,$infos_eleve2];
print_r($eleves);