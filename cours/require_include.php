<?php




require_once "fonctionsReq.php";



// if (ouiOuNon("Voulez vous faire une addition : ")){
//     echo addition(10,15);
// }else{
//     echo "Vous avez refusé de faire une addition. \nAurevoir !!!";
// }

//Question 1 
// if (ouiOuNon("Voulez vous faire une soustraction : ")){
//     echo soustraction(10,15);
// }else{
//     echo "Vous avez refusé de faire une soustraction. \nAurevoir !!!";
// }

//Question 2
// if (ouiOuNon("Voulez vous faire une multiplication : ")){
//     echo multiplication(10,15);
// }else{
//     echo "Vous avez refusé de faire une multiplication. \nAurevoir !!!";
// }

//Question 3
// if (ouiOuNon("Voulez vous faire une division : ")){
//     echo division(10,15);
// }else{
//     echo "Vous avez refusé de faire une division. \nAurevoir !!!";
// }

//Question 4
// if (ouiOuNon("Voulez vous faire une addition : ")){
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     if (is_numeric($nb1) && is_numeric($nb2)){
//         echo $nb1. " additioné avec ". $nb2 . " donne " .addition($nb1,$nb2);
//     }else{
//         echo "Veuillez introduire deux nombres";
//     }   
// }else{
//     echo "Vous avez refusé de faire une addition. \nAurevoir !!!";
// }

//Question 4 Bonus
// if (ouiOuNon("Voulez vous faire une addition : ")){
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     while(!is_numeric($nb1) || !is_numeric($nb2)){
//         echo "Vous n'avez pas introduit deux nombres !!\n";
//         $nb1 = readline("Veuillez introduire un premier nombre : ");
//         $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     }
//         echo $nb1. " additioné avec ". $nb2 . " donne " .addition($nb1,$nb2);
// }else{
//     echo "Vous avez refusé de faire une addition. \nAurevoir !!!";
// }

//Question 5 
//soustraction
// if (ouiOuNon("Voulez vous faire une soustraction : ")){
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     while(!is_numeric($nb1) || !is_numeric($nb2)){
//         echo "Vous n'avez pas introduit deux nombres !!\n";
//         $nb1 = readline("Veuillez introduire un premier nombre : ");
//         $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     }
//         echo $nb1. " moins ". $nb2 . " donne " .soustraction($nb1,$nb2);
// }else{
//     echo "Vous avez refusé de faire une soustraction. \nAurevoir !!!";
// }
//multiplication
// if (ouiOuNon("Voulez vous faire une multiplication : ")){
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     while(!is_numeric($nb1) || !is_numeric($nb2)){
//         echo "Vous n'avez pas introduit deux nombres !!\n";
//         $nb1 = readline("Veuillez introduire un premier nombre : ");
//         $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     }
//         echo $nb1. " multiplié par ". $nb2 . " donne " .multiplication($nb1,$nb2);
// }else{
//     echo "Vous avez refusé de faire une multiplication. \nAurevoir !!!";
// }

// //Question 6 Bonus
// if (ouiOuNon("Voulez vous faire une division : ")) {
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     while (!is_numeric($nb1)) {
//         echo "Vous n'avez pas introduit un nombre !!\n";
//         $nb1 = readline("Veuillez introduire un premier nombre : ");
//     }
//     while (!is_numeric($nb2) || $nb2 == 0) {
//         if ($nb2 == 0) {
//             echo "Vous avez tentez une division par 0, recommencez !!!\n";
//             $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//         } else {
//             echo "Vous n'avez pas introduit un nombre !!\n";
//             $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//         }
//     }
//     echo $nb1 . " divisé par " . $nb2 . " donne " . division($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une division. \nAurevoir !!!";
// }
echo "Une addition : " . addition(12,2). "\n";
require 'separateur.php';
echo "Une soustraction : " . soustraction(12,2). "\n";
require 'separateur.php';
echo "Une division : " . division(12,2). "\n";
