<?php

// Exo 1

$monthArray = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet",
    "aout", "septembre", "octobre", "novembre", "décembre"];

// Exo 2

echo $monthArray[2]."<br>";

// Exo 3

echo $monthArray[5]."<br>";

// Exo 4

$monthArray[7] = "Août";

// Exo 5

$HautDepartements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise",
    "62" => "Pas-De-Calais", "80" => "Somme"];

// Exo 6

echo $HautDepartements["59"]."<br>"."<br>";

// Exo 7

$HautDepartements["51"] = "Marne";

// Exo 8

foreach ($monthArray as $month) {
    echo $month."<br>";
}

// Exo 9

foreach ($HautDepartements as $departement) {
    echo $departement."<br>"."<br>";
}

// Exo 10

foreach ($HautDepartements as $key => $departement) {
    echo "Le département ".$departement." a le numero ".$key.".";
}