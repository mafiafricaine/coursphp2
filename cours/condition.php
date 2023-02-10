<?php
// $nombre = 7;
// if ($nombre > 10){
//     echo "Bien joué, vous avez réussi";
// }else{
//     echo "Dommage vous avez raté, vous feriez mieux la prochaine fois";
// }
// $note = 3;
// if ($note >= 10) {
//     if ($note == 10){
//         echo "Vous avez tout juste la moyenne";
//     }else{
//         echo "Bien joué vous avez réussi !";
//     }
// }else{
//         echo "C’est dommage, vous feriez mieux la prochaine fois";
// }

// $note = readline('Entrez une note : ');
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else if($note == 0) {
//     echo "Tu es nul";
// }else{
//     echo "C’est dommage, vous feriez mieux la prochaine fois";
// }

// //------------------Exo1 condition pdf2
// $age = 78;
// if ($age == 18){
//     echo "Vous avez ". $age . " ans, bienvenue dans l'age adulte !";
// }elseif($age < 18){
//     echo "Vous avez ". $age . " ans et n'etes pas encore adulte !";
// }else{
//     echo "Vous êtes un adulte et vous avez ". $age . " ans !";
// }

// //------------------Exo2 condition pdf2
// $age = readline("Entrez votre age : ");
// if (is_numeric($age)){
//     if ($age == 18){
//         echo "Vous avez ". $age . " ans, bienvenue dans l'age adulte !";
//     }elseif($age < 18){
//         echo "Vous avez ". $age . " ans et n'etes pas encore adulte !";
//     }else{
//         echo "Vous êtes un adulte et vous avez ". $age . " ans !";
//     }
// }else{
//     echo "Vous devez introduire un age";
// }

// //--------------exo3 condition pdf2
// $sexe = "Xsqfkqlsq";
// if ($sexe == "F"){
//     echo "Vous êtes une femme";
// }elseif($sexe == "M"){
//     echo "Vous êtes un homme";
// }elseif($sexe == "X"){
//     echo "Vous êtes un autre";
// }else{
//     echo "Veuillez introduire votre sexe ";
// }

// //--------------exo4 condition pdf2
// $sexe = readline("Entrez votre sexe : ");
// if ($sexe == "F"){
//     echo "Vous êtes une femme";
// }elseif($sexe == "M"){
//     echo "Vous êtes un homme";
// }elseif($sexe == "X"){
//     echo "Vous êtes un autre";
// }else{
//     echo "Veuillez introduire votre sexe ";
// }

// $age1 = 0;
// $age2 = (int)readline("Entrez votre age");
// if ($age1 === $age2){
//     echo "C'est vrai";
// }else{
//     echo "C'est faux";
// }

//     $action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
// switch($action){
//     case 1:
//         echo "Vous attaquez !";
//         break;
//     case 2:
//         echo "Vous défendez !";
//         break;
//     case 3:
//         echo "Vous vous soignez !";
//         break;
//     case 4:
//         echo "Vous fuyez !";
//         break;
//     case 5:
//         echo "Vous ne faites rien !";
//         break;
//     default:
//         echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }
// if ($action === 1){
//     echo "Vous attaquez";
// }else if($action === 2){
//     echo "Vous défendez";
// }elseif($action === 3){
//     echo "Vous vous soignez";
// }elseif($action === 4){
//     echo "Vous fuyez";
// }elseif($action === 5){
//     echo "Vous ne faites rien";
// }else{
//     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

//-------------------- EXO1 Switch
// $jour = readline("Entrez un jour de la semaine : ('1 : Lundi, 2 : Mardi, 3 : Mercredi, 4 : Jeudi, 5 : Vendredi , 6 : Samedi, 7 : Dimanche) : ");
// switch ($jour) {
//     case 1:
//         echo "Nous somme lundi!";
//         break;
//     case 2:
//         echo "Nous somme Mardi!";
//         break;
//     case 3:
//         echo "Nous somme Mercredi!";
//         break;
//     case 4:
//         echo "Nous somme Jeudi!";
//         break;
//     case 5:
//         echo "Nous somme Vendredi!";
//         break;
//     case 6:
//         echo "Nous somme samedi!";
//         break;
//     case 7:
//         echo "Nous somme dimanche!";
//         break;
//     default:
//         echo "Relancez le programme et Entrez un jour 1,2,3,4,5,6 ou 7";
// }

$age = 20;

//if ternaire
echo $age >= 18 ? "tu es majeur" : "tu es mineur";

//equivalent 
// if ($age >= 18){
//     echo "tu es majeur";
// }else{
//     echo "tu es mineur";
// }
