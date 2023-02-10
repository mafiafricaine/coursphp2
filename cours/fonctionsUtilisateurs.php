<?php

// function rand1(){
//     echo "rand<br>";
// }
// rand1();
// rand2();
// echo rand();
// function rand2(){
//     echo "Bien le bonjour <br>";
// }
//echo rand1(). " ". rand2(). " ".  rand() ;

// function hello(): void {
//     echo "Hello World !!!";
// }
// hello();

// function helloR(): string{
//     return 10.5;
// }
// var_dump(helloR());

// function test(): string{
//     return "Julien";
// }
// echo test();





// function addition($nb1, $nb2): int{
//     return $nb1 + $nb2;
// }
// echo addition(78,86);

//     function addition2($nb1, $nb2): void{
//         echo $nb1 + $nb2;
//     }
//    addition2(4.5,2);

// function estUneFemme($sexe): bool{
//     if ($sexe == "F"){
//         return true;
//     }
//     return false; 
// }
// echo estUneFemme('F');

// function estMajeur2($age): void{
//     if($age >= 18){
//         echo "Tu es majeur";
//     }else{
//         echo "Tu n'es pas \"majeur\"";
//     } 
// }
// function verificationAge($age): string
// {
//     if ($age > 18) {
//         return "est Majeur";
//     }
//     if ($age == 18) {
//         return "à 18 ans";
//     }
//     return "n'est pas majeur";
// }
// $motAuClavier = readline("Veuillez introduire votre age : ");
// echo verificationAge($motAuClavier);
// function estMajeur($age): bool
// {
//     if ($age >= 18) {
//         return true;
//     }
//     return false;
// }
// $motAuClavier = readline("Veuillez introduire votre age : ");
// if (estMajeur($motAuClavier)) {
//     echo "Tu es majeur";
// } else {
//     echo "Tu n'es pas majeur";
// }

//Question 1
// function salutation($prenom): void {
//     echo "Hello ".$prenom . " !!!<br>";
// }
// salutation("Rajae");
// salutation("Julien");
// salutation("Eric");
// salutation("Zakaria");
// salutation("Myriam");

//Question 2
// $tab = ["Ikrima","Julien","Eric","Zakaria","Myriam","Nina", "Sylvain", "Mounir"];
// foreach($tab as $valeur){
//     salutation($valeur);
// }

// function hello($prenom = "Julien"): string {
//     return "Hello ".$prenom . " !!!\n";
// }
// $valeur = readline("entre ton prenom : ");
// echo hello($valeur);
// echo hello();

// function hello($prenom = " World"): string
// {
//         return "Hello " . $prenom . " !!!\n";
// }
//$valeur = readline("entre ton prenom : ");
// echo hello();

// function sommeTab($tab): int{
//     $somme = 0;
//     for ($i=0; $i < sizeof($tab); $i++) { 
//         $somme = $somme + $tab[$i];
//     }
//     return $somme;
// }
//$points= [15,12,13,8];
// echo array_sum($points);
//echo sommeTab($points);

// //Question 3
// function hello($prenom = null): string{
//     if($prenom != null){
//         return "Hello ". $prenom . " !!!"; 
//     }
//     return "Hello World !!!";
// }
// $motAuClavier = readline("Veuillez introduire votre prenom : ");
// echo hello($motAuClavier);

//Question 4.1
// function bienvenu($nom,$prenom,$email,$age): void{
//     echo "Bienvenu ". $nom . " ". $prenom . "\nVous avez ". $age . " ans.\nVoici votre email ". $email;
// }
// $valeur1 = readline("Veuillez introduire votre nom : ");
// $valeur2 = readline("Veuillez introduire votre prenom : ");
// $valeur3 = readline("Veuillez introduire votre email : ");
// $valeur4 = readline("Veuillez introduire votre age : ");
// bienvenu($valeur1,$valeur2,$valeur3,$valeur4);

//Question 4.2
// function bienvenu($nom,$prenom,$email,$age): string{
//     return "Bienvenu ". $nom . " ". $prenom . "\nVous avez ". $age . " ans.\nVoici votre email ". $email;
// }
// $valeur1 = readline("Veuillez introduire votre nom : ");
// $valeur2 = readline("Veuillez introduire votre prenom : ");
// $valeur3 = readline("Veuillez introduire votre email : ");
// $valeur4 = readline("Veuillez introduire votre age : ");
// echo bienvenu($valeur1,$valeur2,$valeur3,$valeur4);

//Question 5
// function adulte($age): string{
//     if ($age < 18){
//         return "Vous êtes mineur !";
//     }
//     return "Vous êtes majeur !";
// }
// $age = readline("Veuillez introduire votre age : ");
// echo adulte($age);

//Question 6.1
// $nb1 = readline("Veuillez introduire un premier nombre : ");
// $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// function addition($nombre, $nombre2): string{
//     return $nombre . " additioné à " . $nombre2 . " donne " . $nombre+$nombre2;
// }
// echo addition($nb1,$nb2);

//Question 6.2
// function addition($nombre, $nombre2): int{
//     return $nombre+$nombre2;
// }
// $nb1 = readline("Veuillez introduire un premier nombre : ");
// $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// echo $nb1 . " additioné à " . $nb2 . " donne " . addition($nb1,$nb2);

//Question 7
// function soustraction($nombre, $nombre2): int{
//     return $nombre-$nombre2;
// }
// $nb1 = readline("Veuillez introduire un premier nombre : ");
// $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// echo $nb1 . " soustrait à " . $nb2 . " donne " . soustraction($nb1,$nb2);

//Question 8
// function multiplication($nombre, $nombre2): int{
//     return $nombre*$nombre2;
// }
// $nb1 = readline("Veuillez introduire un premier nombre : ");
// $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// echo $nb1 . " multiplié à " . $nb2 . " donne " . multiplication($nb1,$nb2);

//Question 9
// function division($nombre, $nombre2): float{
//     return $nombre/$nombre2;
// }
// $nb1 = readline("Veuillez introduire un premier nombre : ");
// $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// while($nb2 == 0){
//     echo "Vous avez tentez une division par 0, recommencez !!!\n";
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
// }
// echo $nb1 . " divisé par " . $nb2 . " donne " . division($nb1,$nb2);

// function addition(float $nb1, float $nb2): float
// {
//     return $nb1 + $nb2;
// }
// function moyenne2nombre(float $nb1, float $nb2):float
// {
//     return addition($nb1, $nb2)/2;
// }
// $nbr1 = readline("Veuillez introduire un premier nombre : ");
// $nbr2 = readline("Veuillez introduire un deuxième nombre : ");
// echo "La moyenne de " . $nbr1 . " et " . $nbr2 . " donne " 
//     . moyenne2nombre($nbr1, $nbr2);

//Question 10
function estFemme(string $sexe): bool
{
    if ($sexe == "F") {
        return true;
    }
    return false;
}
function estAdulte(int $age): bool
{
    if ($age >= 18) {
        return true;
    }
    return false;
}
function traitement(array $tab): void
{
    echo $tab["Prenom"] . " est ";
    if (estFemme($tab["Sexe"])) {
        echo " une femme ";
    }else{
        echo " un homme ";
    }
    if(estAdulte($tab["Age"])){
        echo " majeur(e) agé(e) de ". $tab["Age"] . " ans.<br>";
    }else{
        echo " mineur(e) agé(e) de ". $tab["Age"]. " ans.<br>";
    }
}
$users = [
    [
        "Prenom" => "Sarah",
        "Sexe"  => "F",
        "Age" => 35
    ],
    [
        "Prenom" => "Eric",
        "Sexe"  => "M",
        "Age" => 15
    ],
    [
        "Prenom" => "Elisabeth",
        "Sexe"  => "F",
        "Age" => 17
    ],
    [
        "Prenom" => "Karim",
        "Sexe"  => "M",
        "Age" => 45
    ]
];
foreach ($users as $tableau) {
    traitement($tableau);
}
// for ($i=0; $i < sizeof($users) ; $i++) { 
//     traitement($users[$i]);
// }