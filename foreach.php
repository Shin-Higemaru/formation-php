<?php

$produit = ['marque'=>'adidas',
             'modele'=>"Stan Smith",
             'prix_ht'=>55,
             'description'=>"super basket adidas",
             'is_online'=>true];

$produit2 = ['marque'=>'nike',
             'modele'=>"air max",
             'prix_ht'=>65,
             'description'=>"super basket Nike",
             'is_online'=>true];

$produit3 = ['marque'=>'New Balance',
             'modele'=>"MI373",
             'prix_ht'=>75,
             'description'=>"super basket New Balance",
             'is_online'=>false];

$images = ['stan_smith.jpg', 'air_max.jpg', 'mi373.jpg'];

$produits = [$produit,$produit2,$produit3];

// Ex foreach

foreach($produit as $key=> $value) {
    echo $key.": ".$value.PHP_EOL;
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
    <style>

        table {
            border-collapse: collapse;
            width: 900px;
        }
        table,tr,td,th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Gestion des produits</h1>
    <div>
    <table>
       <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
            <th>Description</th>
            <th>Photo</th>
            <th>En stock</th>
        </tr>
       </thead>
       <tbody>
       <?php foreach ($produits as $key => $value) :?>
<!--       --><?php //print_r($value); die(); ?>
        <tr>
            <td><?php echo strtoupper ($value['marque']) ?></td>
            <td><?= $value['modele']?></td>
            <td><?= number_format($value['prix_ht'],2) ?>€ HT</td>
            <td><?php echo number_format($value['prix_ht']*1.2,2)?>€ TTC</td>
            <td><?php echo substr($value['description'],0,10).'...'?></td>
            <td><img width="50" src="img/<?= $images[$key]  ?>" alt="<?= $value['modele']?>"></td>
            <td><img width="16"
                     src="img/diode_<?php echo $value['is_online'] ? 'verte' : 'rouge' ?>.png" alt="<?= $value['is_online'] ? 'en stock' : 'épuisé'  ?>">
            </td>
        </tr>
       <?php endforeach ?>
       </tbody>

    </table>
    </div>
</body>
</html>