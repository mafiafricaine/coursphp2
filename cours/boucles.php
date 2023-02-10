<?php
// $nb = 0;
// $cpt = 0;
// while ($nb <= 10){
//     echo $nb. "<br>";
//     //$nb++;
//     $cpt++;
//     $nb = $nb + 3;
// }
// echo $cpt;

// $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
// while($nombre !== 0){
//     echo "Voici votre nombre : ". $nombre . "\n";
//     $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
// }

// $nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
// $numéroGagnant = rand(0,10);
// while($nombre !== $numéroGagnant){
//     echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
//     $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : ");
// }
// echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro $numéroGagnant";

// //exo1 
// $mot =readline("Veuillez entrer un mot (entrez stop pour arrêter) : ");
// while($mot !== "stop"){
//     $mot=readline("Veuillez entrer un mot (entrez stop pour arrêter) : ");
// }
// echo "Vous avez quitté le programme !!!";

// for($i=0; $i <= 10;$i++){
//     echo $i . "<br>";
// }

// $i = 0;
// while($i <= 10){
//     echo $i . "<br>";
//     $i++;
// }

//  $notes = [18,13,5,9,10];
// echo $notes[0]."<br>";
// echo $notes[1]."<br>";
// echo $notes[2]."<br>";
// echo $notes[3]."<br>";
// echo $notes[4]."<br>";

// for ($i=0; $i < sizeof($notes); $i++) { 
//     echo $notes[$i]. "/20<br>";
// }

// for ($i=0; $i <= 8000; $i+=2) { 
//     echo $i."<br>";
// }

//exo 1 boucle for 
// $joursSemaine = ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"];
// for ($i=0; $i < sizeof($joursSemaine) ; $i++) { 
//     echo $joursSemaine[$i]."</br>";
// }

//exo 2 
// $mois = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
// for ($i=1; $i < sizeof($mois); $i+=2) { 
//     echo $mois[$i]." ";
// }

//exo 3
// $nombre = [11,18,99,17,65220,6485,78,97,48,2,112,84,57,42,15,14,158,615,681,6812,1,8613];
// for ($i=0; $i < sizeof($nombre); $i++) { 
//     if($nombre[$i] % 2 == 0){
//         echo $nombre[$i]. " est pair</br>"; 
//     }
// }

// $notes = [18,13,5,9,10];
// for ($i=0; $i < sizeof($notes) ; $i++) { 
//     echo $notes[$i]. "/20<br>";
// }
// echo "</br> foreach</br>";
// foreach($notes as $julien){
//         echo $julien . "/20<br>";
// }

// $joursSemaine = ["Lundi","Mardi","Mercredi", "Jeudi","Vendredi","Samedi", "Dimanche"];
// foreach($joursSemaine as $jour){
//     echo $jour."\n";
// }

// $users = [
//         'firstname' => 'Lara',
//         'lastname' => 'Croft',
//         'sexe' => 'F',
//         'dateOfBirth' => "23/10/1995",
//         'city'=> 'London'
//         ];

// foreach ($users as $cle => $valeur) {
//     echo $cle . " : ".$valeur ."</br>";
// }

// $users = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'sexe' => 'F',
//     'dateOfBirth' => "23/10/1995",
//     'notes' => [18, 13, 5, 10, 9],
//     'city' => 'London'
// ];
// foreach ($users as $cle => $valeur) {
//     if (is_array($valeur)) {
//         echo $cle . ' : [';
//         foreach ($valeur as $note) {
//             echo $note . "/20 ";
//         }
//         // for ($i=0; $i < sizeof($valeur) ; $i++) { 
//         //     echo $valeur[$i] . "/20 ";
//         // }
//         // $cpt = 0;
//         // while($cpt < sizeof($valeur)){
//         //     echo $valeur[$cpt] . "/20 ";
//         //     $cpt = $cpt + 1;
//         // }
//         echo "]<br>";
//     } else {
//         echo $cle . ' : ' . $valeur . '<br>';
//     }
// }

//exo 1 foreach
// $mois = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
// foreach($mois as $month){
//     if($month == "Janvier"){
//         echo $month ;
//     }else{
//         echo "-".$month ;
//     }
// }

//exo 2 
// $notes = [18,13,5,9,10];
// foreach($notes as $note){
//     if($note > 10){
//         echo "Vous avez réussi avec la note de ". $note."/20</br>";
//     }elseif($note < 10){
//         echo "Vous avez raté avec la note de ". $note."/20</br>";
//     }else{
//         echo "Vous avez eu tout pile la moitié ".$note."/20";
//     }
// }

// $mot = readline("Veuillez entrer un mot (entrez stop pour arrêter) : ");
// $tab = [];
// while($mot !== "stop"){
//     $tab[]=$mot;
//     $mot=readline("Veuillez entrer un mot (entrez stop pour arrêter) : ");
// }
// foreach($tab as $element){
//     echo $element.", ";
// }
// for ($i=0; $i < sizeof($tab); $i++) { 
//     echo $tab[$i].", ";
// }
// $i =0;
// while($i < sizeof($tab)){
//     echo $tab[$i].", ";
//     $i++;
// }

// $classe = [
//     [
//         'firstname' => "Julien",
//         'lastname' => "Dunia",
//         'notes' => [8, 15, 12]
//     ],
//     [
//         'firstname' => "Hakima",
//         'lastname' => "Darmouch",
//         'notes' => [18, 5, 10]
//     ],
//     [
//         'firstname' => "Christian",
//         'lastname' => "Bale",
//         'notes' => [7, 19, 5]
//     ]
// ];
/*echo array_sum($classe[2]['notes'])/ sizeof($classe[2]['notes']);*/
// foreach ($classe as $user) {
//     foreach($user as $key => $element) {
//         if(is_array($element)) {
//             echo $key . ' ';
//             $somme = 0;
//             foreach ($element as $note) {
//                 $somme = $note + $somme;
//             }
//             $moyenne = $somme/sizeof($element);
//             echo "Moyenne : ".$moyenne."</br>";
//         } else {
//             echo $key . ' : ' . $element . '<br>';
//         }
//     }
// }
$tab = ["Julien","Sylvain", "Ketina"];
foreach ($tab as $prenom) {
    if($prenom == "Julien"){
        echo $prenom;
    }else{
        echo " - ". $prenom;
    }
}



