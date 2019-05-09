<?php
/*****************************************
*  Constantes et variables
*****************************************/
define('LOGIN','Rasmus');  // Login correct
define('PASSWORD','lerdorf');  // Mot de passe correct
$message = '';      // Message à afficher à l'utilisateur

/*****************************************
*  Vérification du formulaire
*****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
// Le login est-il rempli ?
if(empty($_POST['login']))
{
$message = 'Veuillez indiquer votre login svp !';
}
// Le mot de passe est-il rempli ?
elseif(empty($_POST['motDePasse']))
{
$message = 'Veuillez indiquer votre mot de passe svp !';
}
// Le login est-il correct ?
elseif($_POST['login'] !== LOGIN)
{
$message = 'Votre login est faux !';
}
// Le mot de passe est-il correct ?
elseif($_POST['motDePasse'] !== PASSWORD)
{
$message = 'Votre mot de passe est faux !';
}
else
{
// L'identification a réussi
$message = 'Bienvenue '. LOGIN .' !';
}
}
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
<?php if(!empty($message)) : ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>
</body>
</html>

