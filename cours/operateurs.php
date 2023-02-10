<?php

// $heure = (int)readline('Entrez une heure : ');
// if(($heure > 8 && $heure <= 12) || ($heure >= 14 && $heure < 18)){
//     echo "Le magasin sera ouvert à ". $heure ." heures";
// }else{
//     echo "Le magasin sera fermé à " . $heure ." heures";
// }

//exo 1 pdf3 operateurs
// if(!(($heure > 8 && $heure <= 12) || ($heure >= 14 && $heure < 18))){
//     echo "Le magasin sera fermé à " . $heure ." heures";
// }else{
//     echo "Le magasin sera ouvert à $heure heures";
// }

// $mot = readline("Veuillez introduire un mot : ");
// $mot2 = readline("Veuillez introduire un mot : ");
// $mot = "Bonjour";
// $mot2 = "Julien";
// $mot3 = $mot . "<br> " . $mot2;
// echo $mot3;

//exo 2 pdf 3 
$users1 = [
    'firstname' => 'Will',
    'lastname' => 'Smith',
    'sexe' => 'M',
    'age' => "53",
    'vaccinated' => true
];
$users2 = [
    'firstname' => 'Lara',
    'lastname' => 'Croft',
    'sexe' => 'F',
    'age' => "17",
    'vaccinated' => false
];
$users3 = [
    'firstname' => 'Marion',
    'lastname' => 'Cotillard',
    'sexe' => 'F',
    'age' => "46",
    'vaccinated' => true
];
$users = $users1;
if(($users['age'] >= 18) AND ($users['vaccinated'] === true)){
    echo "Bienvenue dans le club ". $users['firstname']." ". $users['lastname']."<br>";
    if ($users['sexe'] == 'F'){
        echo "Prenez un bracelet rose";
    }else{
        echo "Prenez un bracelet bleu";
    }
}else{
    echo "Negatif";
}
