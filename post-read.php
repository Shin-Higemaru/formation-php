<?php
// Récupérer les datas du formulaire
$login = isset($_POST['login']) ? trim($_POST['login']) : null ;
$password = isset($_POST['password']) ? password_hash($_POST['password'],PASSWORD_ARGON2I) : null ;

//die($password);


// Si login vide > redirect post.php + erreur
if(empty($login)) {
    header('Location: post.php?error=1');// bien ecrire comme ça en respectant les majuscule espace etc...
    exit();

}
// Si password vide > redirect post.php + erreur
//ou
// Si password !="aquatic" > redirect post.php + erreur
if(empty($password) || !password_verify("aquatic",$password)) {
    header('Location: post.php?error=2');
    exit();
}
// Démarage de session
session_start();
// Si tout est Ok >
// redirect vers bienvenue.php avec affichage du login

$_SESSION['login'] = $login;

//print_r($_SESSION);

header('Location: bienvenue.php');

