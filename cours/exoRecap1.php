<?php

//Question 1
$user1 = "Julien";
$user2 = "Jule";
$user3 = "Aimable";
$user4 = "Andrea";
$user5 = "Lara";
$user6 = "James";
$user7 = "John";
$user8 = "Janine";
$user9 = "Loise";
$user10 = "Nina";

echo $user1 . "<br>" .$user2 ."\n" . $user3 . "\n" 
    . $user4 . "\n" . $user5 . "\n" . $user6 . "\n" . $user7 . "\n" 
    . $user8 . "\n" . $user9 . "\n" . $user10 . "\n"   ;

//Question 2 
// $users = ["Julien","Eric","Alphonse","Marc","Luc","Ad","Jp","Eve","Jean","Ali","Sylvain","Myriam", "Aissam","Elzan"];
// foreach($users as $user){
//     if($user == "Elzan"){
//         echo $user;
//     }else{
//         echo $user . ", ";
//     }  
// }

//Question 3
// $nombre = readline("Introduisez un nombre : ");
// if (is_numeric($nombre)){
//     if($nombre % 2 == 0){
//         echo "Le nombre ". $nombre . " est pair";
//     }else{
//         echo "Le nombre ". $nombre . " est impair";
//     }
// }else{
//     echo "Vous n'avez pas écris un nombre";
// }

//Question 4
// $mot = readline("Entrez un mot : ");
// $tab = [];
// while($mot != "quitter"){
//     $tab[]= $mot;
//     $mot = readline("Entrez un mot : ");
// }
// foreach($tab as $unMot) {
//     echo $unMot . "\n";
// }

//Question 5
// $mot = readline("Entrez un mot : ");
// $count = 0;
// while($mot != "fin"){
//     $mot = readline("Entrez un mot : ");
//     $count++;
// }
// echo "Vous avez introduis ". $count . " mots";

//Question 6
// $nombre = readline("Veuillez introduire un nombre : ");
// if (is_numeric($nombre)){
//     if($nombre <= 200 AND $nombre >= 100){
//         echo "vous avez bien introduis le montant ". $nombre . " entre 100 et 200 euros";
//     }else if ($nombre < 100){
//         echo "Nous n'avons pas de petite coupure (billet)";
//     }else{
//         echo "Vous avez depassé la limite";
//     }
// }else{
//      echo "Vous n'avez pas écris un nombre";
// }

//Question 7
// $action =  readline("Ecrivez un chiffre (1 = bonjour, 2 = aurevoir, 3 = bien joué, 4 = bonne nuit, 5 = a tantot, 6 = arrête un peu, 7 = 10+10=20, autre surprise):  ");
// switch ($action) {
//     case 1:
//         echo "Bonjour";
//         break;
//     case 2:
//         echo "Aurevoir";
//         break;
//     case 3:
//         echo "Bien joué";
//         break;
//     case 4:
//         echo "Bonne nuit";
//         break;
//     case 5:
//         echo "A tantot";
//         break;
//     case 6:
//         echo "Arrête un peu";
//         break;
//     case 7: 
//         echo "10+10=20";
//         break;
//     default :
//         echo "La terre est plate";
// }

//Tableau Q8,Q9, Q10, Q11, Q12
// $users = [
//     [
//         "prenom" => "Lara",
//         "sexe" => "F",
//         "notes" => [59, 25, 95, 42, 68]
//     ],
//     [
//         "prenom" => "Alicia",
//         "sexe"  => "F",
//         "notes" => [63, 75, 69, 82, 90]
//     ],
//     [
//         "prenom" => "Kevin",
//         "sexe"  => "H",
//         "notes" => [95, 89, 98, 87, 92]
//     ],
//     [
//         "prenom" => "Mohamed",
//         "sexe"  => "H",
//         "notes" => [94, 90, 99, 84, 82]
//     ],
//     [
//         "prenom" => "Julien",
//         "sexe"  => "H",
//         "notes" => [100, 99, 95, 98, 92]
//     ]
// ];

//Question 8
// foreach($users as $user){
//     if($user["sexe"] == "H"){
//         echo $user["prenom"] . " ". $user["sexe"] . "</br>";
//     }
// }

//Question 9
// foreach($users as $user){
//         if($user["sexe"] == "F"){
//             echo $user["prenom"] . " ". max($user["notes"]) . "</br>";
//         }
// }

//Question 10
// foreach ($users as $user) {
//     echo $user["prenom"] . " [";
//     $tab = array_reverse($user["notes"]);
//     foreach($tab as $note) { 
//         echo $note. " ";
//     }
//     echo " ]<br>";
// }

//Question 11
// foreach($users as $user){
//     $moyenne = array_sum($user["notes"])/sizeof($user["notes"]);
//     echo $user["prenom"] . " a une moyenne de ". $moyenne. " <br>";
// }

//Question 12
// foreach($users as $user){
//     echo $user["prenom"] . " [";
//     foreach($user["notes"] as $note){
//         echo $note . "/100 ";
//     }
//     echo "] ". $user["sexe"]. "<br>";
// }

//Question 13
// $tab = [];
// $nombre = readline("Entrez un nombre : ");
// while($nombre != 0){
//     if(is_numeric($nombre)){
//         $tab[] = $nombre;
//     }else{
//         echo "Veuillez introduire un nomre !!! \n";
//     }
//     $nombre = readline("Entrez un nombre : ");
// }
// echo "Les elements du tableau : [";
// foreach($tab as $valeur){
//     echo $valeur . " ";
// }
// echo " ] \n";
// echo "Les elements du tableau trié par ordre décroissant : [";
// rsort($tab);
// foreach($tab as $valeur){
//     echo $valeur . " ";
// }
// echo "] \n";

// for ($i=0; $i < sizeof($tab); $i++) { 
//     if($tab[$i] % 2 == 0){
//         echo $tab[$i]. " est un multiple de 2\n";
//     }
//     if($tab[$i] % 3 == 0){
//         echo $tab[$i]. " est un multiple de 3\n";
//     }
//     if($tab[$i] % 5 == 0){
//         echo $tab[$i]. " est un multiple de 5\n";
//     }
// }
