<?php

    // //-----------exo 1
    // $notes = [18,13,5,9,10];
    // //$notes = array(18,13,5,9,10,19);
    
 // echo "La moyenne : ". ($notes[0]+$notes[1]+$notes[2]+$notes[3]+$notes[4])/5;
    // // echo "<br>";
    // // echo "La somme : ".$notes[0]+$notes[1]+$notes[2]+$notes[3]+$notes[4];
    // $somme = $notes[0]+$notes[1]+$notes[2]+$notes[3]+$notes[4];
    // $moyenne = $somme/5;
    // echo "La moyenne : ". $moyenne . "<br>";
    // echo "La somme : ". $somme;

    // //--------------exo 2
    // $animal = ["Chien","Chat","Elephant","Tortue"];
    // //$animaux = $animal[1]." ".$animal[3];
    // //echo $animaux;
    // echo $animal[1]. "\n". $animal[3];

    //------------exo 3
    // $semaine = ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"];
    // echo "Aujourd'hui nous sommes ". $semaine[2]. "<br> ".
    //  "Avant-hier nous etions " .$semaine[0]. " <br>".
    //  "Après-demain nous serons ". $semaine[4];

    // $tab = ["Jack", "Bauer",[18,13,5,9,10]];
    // echo $tab[2][3];

    // $tab2dim = [
    //     "James",
    //     "Bond",
    //     "M",
    //     "7/7/2007",
    //     ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"],
    //     "London"
    // ];
    // echo "Nom : ". $tab2dim[1].
    //     "<br>Prenom : ". $tab2dim[0].
    //     "<br>Sexe : ". $tab2dim[2].
    //     "<br>Date de naissance : ". $tab2dim[3].
    //     "<br>Ville : ". $tab2dim[5].
    //     "<br>Jour d'hier : ". $tab2dim[4][1]."<br>";

    //----------------exo1 tableau indexé pdf2 pg3
    // $users = [
    //     'firstname' => 'Lara',
    //     'lastname' => 'Croft',
    //     'sexe' => 'F',
    //     'dateOfBirth' => "23/10/1995",
    //     'notes' => [18,13,5,10,9],
    //     'city'=> 'London'
    //     ];
    // $users['firstname'] = "Edward";
    // $users['lastname'] = "Elric";
    // $users['notes'][4] = 17;
    // echo $users['firstname']."<br>";
    // echo $users['lastname']."<br>";
    // echo $users['notes'][4]."<br>";
    
    //-----------------exo2
    // $users2 = [
    //     'firstname' => 'Mario',
    //     'lastname' => 'Bros',
    //     'sexe' => 'M',
    //     'dateOfBirth' => "19/01/1980",
    //     'notes' => [18,13,5,10,9],
    //     'joursDeLaSemaine' => ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"],
    //     'city'=> 'MarioLand'
    //     ];
    //     $moyenne = ($users2['notes'][0]+$users2['notes'][1]+$users2['notes'][2]+$users2['notes'][3]+ $users2['notes'][4])/5;
    //echo "Prenom : ". $users2['firstname']."<br>". "Nom : ". $users2['lastname'] ."<br>"."La moyenne : ". $moyenne."<br>". "Le jour de demain : ". $users2['joursDeLaSemaine'][3];

    //-------------------exo3
    // $users2 = [
    //         'firstname' => 'Mario',
    //         'lastname' => 'Bros',
    //         'sexe' => 'M',
    //         'dateOfBirth' => "19/01/1980",
    //         'notes' => [18,13,5,10,9],
    //         'joursDeLaSemaine' => ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"],
    //         'city'=> 'MarioLand'
    //         ];
    // $users2['joursDeLaSemaine'][7] = "néant";
    // echo $users2['joursDeLaSemaine'][7];

    $classeUser = [
        [
        'firstname' => "Julien",
        'lastname' => "Dunia",
        'notes' => [8,15,12]
        ],
        [
        'firstname' => "Hakima",
        'lastname' => "Darmouch",
        'notes' => [18,5,10]
        ],
        [
        'firstname' => "Christian",
        'lastname' => "Bale",
        'notes' => [7,19,5]
        ]
        ];
        $moyenne = ($classeUser[2]['notes'][0] + $classeUser[2]['notes'][1] + $classeUser[2]['notes'][2])/3;
        echo "La moyenne du troisieme user est : ". $moyenne;




?>