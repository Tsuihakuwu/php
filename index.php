<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
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

<hr>

<h2>Sauvegarde</h2>

<?php
for ($a = 0; $a <= 500; $a++) { 
    echo "Je dois faire des sauvegardes régulières de mes fichiers";
} 
?>

<!--

    Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant :

Tableau HTML -->

<hr>

<h2>Table de multiplication</h2>

<?php

echo '<table border=1><thead><tr><th border=1></th>';

    for($th=0;$th<=12;$th++){
        echo '<th border=1><b>'.$th.'</b></th>';
    }

echo '</tr></thead><tbody>';

    for($tr=0;$tr<=12;$tr++){
        echo '<tr><td border=1><b>'.$tr.'</b></td>';
            for($td=0;$td<=12;$td++){
                echo '<td border=1>'.$td*$tr.'</td>';
            }
        echo '</tr>';
    }

echo '</table>';

?>

<hr>

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

echo '<table border=1><tbhead><tr><td><b>Mois</b></td>'.'<td><b>Nbr de jours</b></td></tr></thead><tbody>';

foreach ($taba as $month => $days)
{
   echo '<tr><td><b>'.$month.'</b></td>'.'<td>'.$days.'</td></tr>';
}

echo '</tbody></table>';

?>

<hr>

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

?>
<h3>Capitales par ordre alphabétique</h3>

<?php

ksort($capitales);

echo '<table border=1><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$cap.'</b></td>'.'<td>'.$pays.'</td></tr>';
}

echo '</tbody></table>';

?>

<h3>Pays par ordre alphabétique</h3>

<?php

asort($capitales);

echo '<table border=1><tbhead><tr><td><b>Pays</b></td>'.'<td><b>Capitale</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$pays.'</b></td>'.'<td>'.$cap.'</td></tr>';
}

echo '</tbody></table>';

$nb = count($capitales);

echo "<h3>Le tableau contient ".$nb." éléments.</h3>";

?>

<h3>Suppression des capitales commencant par B</h3>

<?php

echo '<table border=1><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

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

echo '</table>';

?>

<hr>
<h2>Départements</h2>

<?php
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>

<!-- A partir du tableau ci-dessus:

    Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements

-->

<h3>Région par ordre alphabétique</h3>

<?php 
    ksort($departements);

    echo '<table border=1><tbhead><tr><td><b>Région</b></td>'.'<td><b>Départements</b></td></tr></thead><tbody>';

    foreach($departements as $region => $ldep){
        for($i=0;$i<count($ldep);$i++){
            echo '<tr><td>'.$region.'</td>';
            echo '<td>'.$ldep[$i].'</td></tr>';
        }
    }

    echo '</table>';

?>

<!--
    Affichez la liste des régions suivie du nombre de départements -->

<h3>Région et nombre de départements</h3>

<?php 
    ksort($departements);
    
    echo '<table border=1><tbhead><tr><td><b>Région</b></td>'.'<td><b>Nombre de départements</b></td></tr></thead><tbody>';

    foreach($departements as $region => $ldep){
            echo '<tr><td>'.$region.'</td>';
            echo '<td>'.count($ldep).'</td></tr>';
    }

    echo '</table>';

?>

<hr>
<h1>Fonctions PHP</h1>

<h2>Fonction URL</h2>

<!-- Ecrivez une fonction qui permette de générer un lien. -->

<?php


function lien($url,$txt)
{
    echo '<a href="'.$url.'">'.$txt.'</a>';
}

lien("https://www.reddit.com/", "Reddit Hug");

?>

<hr>
<h2>Fonction Somme des valeurs d'un tableau</h2>

<!-- Ecrivez une fonction qui calcul la somme des valeurs d'un tableau-->

<?php

function somme($MyTab){
    static $somme=0;
    for($i=0;$i<count($MyTab);$i++){
        $somme += $MyTab[$i];
    }
    echo $somme;
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);

echo $resultat;

?>

<hr>
<h2>Complexité Mot de passe</h2>

<!-- Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :

    Faire au moins 8 caractères de long
    Avoir au moins 1 chiffre
    Avoir au moins une majuscule et une minuscule

$resultat = complex_password("TopSecret42");

$resultat doit contenir true.

    Aidez-vous des expressions régulières ! -->

<?php

function complex_password($MyPassword){
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
    return preg_match($pattern, $MyPassword);
}

$resultat = complex_password("TopSecret42");
$retour = ($resultat==True)?"True":"False";
echo $retour;
    
?>

<h1>Les dates et les heures</h1>

<?php 
        date_default_timezone_set("Europe/Paris"); 
        echo "Nous sommes le " . date("d/m/Y");

?>


<!-- Exercices

    Utilisez l'objet DateTime, sauf mention contraire.

    Trouvez le numéro de semaine de la date suivante : 14/07/2019. -->

    <h2>Numéro de la semaine</h2>

<?php
    $datestr = '14/07/2019';
    $ts = strtotime(str_replace("/", "-", $datestr));
    echo 'La date du 14/07/2019 correspond au timestamp '.$ts.' et à la '.idate('W',$ts).'em semaine de l\'année 2019';
?>

<hr>

    <!--Combien reste-t-il de jours avant la fin de votre formation ? -->

    <h2>Date de fin de formation</h2>

<?php

    $Now = new DateTime('now', new DateTimeZone('Europe/Paris'));
    $dtfin= new DateTime('2023-3-31');

    $diff=$Now->diff($dtfin);

    echo 'Jours restant avant fin du module : '.$diff->format('%a jours');

?>

    <!-- Comment déterminer si une année est bissextile ? -->
    <hr>
    <h2>Année bissextile</h2>

<?php

    $MyDate = 1900;

    if (date("L", mktime(0, 0, 0, 1, 1,$MyDate)) == 1) {
        echo 'L\'année '.$MyDate.' est bissextile';
    }
    else {
        echo 'L\'année '.$MyDate.' n\'est pas bissextile';
    }
?>

<!-- Montrez que la date du 32/17/2019 est erronée. -->
<hr>
    <h2>Date erronée</h2>

<?php

    function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
    }

    if(validateDate('2019-17-32')){
        echo 'Date valide';
    }else {
        echo 'Date invalide';
    }

?>

    <!-- Affichez l'heure courante sous cette forme : 11h25. -->
    <hr>
    <h2>Heure courante sous forme hhmm</h2>

<?php
    $Now = new DateTime('now', new DateTimeZone('Europe/Paris'));

    echo $Now->format("H")."h".$Now->format("i");

?>

    <!-- Ajoutez 1 mois à la date courante. -->
    <hr>
    <h2>Un mois plus tard</h2>

<?php

    $nextmonth = new DateTime('+1 month', new DateTimeZone('Europe/Paris'));

    echo $nextmonth->format('d-m-Y');

?>

    <!-- Que s'est-il passé le 1000200000 ? -->
    <hr>
    <h2>1000200000</h2>

<?php
    
    echo date('d-m-Y',1000200000);

?>
<hr>
<h1>Les formulaires et variables serveur</h1>

<a href="jarditou/contact.html">Page Formulaire Jarditou</a>

</body>
</html>