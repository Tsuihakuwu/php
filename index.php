<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Boucles PHP</title>
</head>
<body>

<!-- Exercices

    Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...

-->

<h1>Boucles PHP</h1>

<h2>Nombres Impairs</h2>

<?php
for ($a = 0; $a <= 150; $a++) { 
    if($a%2!=0){echo "$a "; }
} 
?>

<!--
    Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
-->

<h2>Sauvegarde</h2>

<?php
for ($a = 0; $a <= 500; $a++) { 
    echo "Je dois faire des sauvegardes régulières de mes fichiers";
} 
?>

<!--

    Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant :

Tableau HTML -->

<h2>Table de multiplication</h2>

<?php

echo '<table style=\'border:solid black 1px\'><thead><tr><th style=\'border:solid black 1px\'></th>';

    for($th=0;$th<=12;$th++){
        echo '<th style=\'border:solid black 1px\'><b>'.$th.'</b></th>';
    }

echo '</tr></thead><tbody>';

    for($tr=0;$tr<=12;$tr++){
        echo '<tr><td style=\'border:solid black 1px\'><b>'.$tr.'</b></td>';
            for($td=0;$td<=12;$td++){
                echo '<td style=\'border:solid black 1px\'>'.$td*$tr.'</td>';
            }
        echo '</tr>';
    }

echo '</table>';

?>


<h1>Tableau PHP</h1>

<!-- Exercices
1. Mois de l'année non bissextile

Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

Utilisez le nom des mois comme clés de votre tableau associatif.

Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat. -->

<h2>Mois de l'année non bissextile</h2>

<?php

$taba = array(
    "Janvier" => 31,
    "Fevrier" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aout" => 30,
    "Septembre" => 31,
    "Octobre" => 30,
    "Novembre" => 31,
    "Decembre" => 30
);

asort($taba);

echo '<table style=\'border:solid black 1px\'><tbhead><tr><td><b>Mois</b></td>'.'<td><b>Nbr de jours</b></td></tr></thead><tbody>';

foreach ($taba as $month => $days)
{
   echo '<tr><td><b>'.$month.'</b></td>'.'<td>'.$days.'</td></tr>';
}

echo '</tbody></table>';

?>

<h2>Capitales</h2>

<!-- 2. Capitales

A partir du tableau ci-dessus:

    Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.

    Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.

    Affichez le nombre de pays dans le tableau.

    Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau. -->


<?php

$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

echo '<h3>Capitales par ordre alphabétique</h3>';

ksort($capitales);

echo '<table style=\'border:solid black 1px\'><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$cap.'</b></td>'.'<td>'.$pays.'</td></tr>';
}

echo '</tbody></table>';


echo '<h3>Pays par ordre alphabétique</h3>';

asort($capitales);

echo '<table style=\'border:solid black 1px\'><tbhead><tr><td><b>Pays</b></td>'.'<td><b>Capitale</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$pays.'</b></td>'.'<td>'.$cap.'</td></tr>';
}

echo '</tbody></table>';

$nb = count($capitales);

echo "<h3>Le tableau contient ".$nb." éléments.</h3>";

echo '<h3>Suppression des capitales commencant par B</h3>';

echo '<table style=\'border:solid black 1px\'><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

ksort($capitales);
$i=0;
foreach ($capitales as $cap => $pays)
{
    $i++;
    if (substr($cap,0,1)=='B'){
        echo '<tr><td><b>Ligne supprimée</b></td>'.'<td>-----</td></tr>';
        unset($capitales[$i]);
    }
    else {
        echo '<tr><td><b>'.$cap.'</b></td>'.'<td>'.$pays.'</td></tr>';
    }
}

?>


</body>
</html>