<?php
// Récupérer la session
session_start();
// Vérification des données stockées dans la session, càd: le user est-il bien passé par l'identification ?
$is_logged = isset($_SESSION['login']) ? true: false;
// Si $is_logged > false > redirect post.php + ?error
if($is_logged == false) {
    header('Location: post.php?error=3');
    exit();
}
?>