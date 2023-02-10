<?php
    //Reponse du controle d'algorithmie
    //Q1 
    // $nom = readline("Veuillez introduire votre nom : ");
    // $origine = readline("Veuillez introduire votre origine : ");
    // echo "Votre nom est ". $nom . " et votre origine ". $origine;
   
    //Q2
    // $bel = readline("Veuillez introduire la capitale de la Belgique :");
    // if($bel === "Bruxelles"){
    //     echo "Bienvenue a vous";
    // }else{
    //     echo "Vous etes un robot";
    // }

    //Q3
    // $capitale1 = "Bruxelles";
    // $capitale2 = "Paris";
    // $capitale3 = "Kinshasa";
    // $pays1 = "Belgique";
    // $pays2 = "France";
    // $pays3 = "RDC";
    // echo $capitale1 . " est la capitale de la ". $pays1 ."\n";
    // echo $capitale2 . " est la capitale de la ". $pays2."\n";
    // echo $capitale3 . " est la capitale de la ". $pays3;

    //Q4
    // $a = 12;
    // $b = 5;
    // $c = 6;
    // $somme = $a+$b+$c;
    // $moyenne = $somme/3;
    // echo "La somme de ". $a ."+".$b ."+".$c ." donne ". $somme. "\n";
    // echo "La moyenne de ". $a .", ".$b ." et ".$c ." donne ". $moyenne. "\n";

    //Q5
    // $nr = (int)readline("Entrez un numéro : ");
    // if($nr % 7 == 0){
    //     echo $nr. " est divisible par 7";
    // }else{
    //     echo $nr. " n'est pas divisible par 7";
    // }

    //Q6
    // $nb = 0;
    // while ( $nb > -1000){
    //     echo $nb. "\n";
    //     $nb = $nb -5;
    // }

    //Q7
    // $langue = readline("Veuillez entrer la langue (fr,nl,es,ar ou en) : ");
    // if($langue == "fr"){
    //     echo "Bonjour";
    // }elseif($langue == "nl"){
    //     echo "Goedendag";
    // }elseif($langue == "es"){
    //     echo "Buenos Dias";
    // }elseif($langue == "en"){
    //     echo "Hello";
    // }elseif($langue == "ar"){
    //     echo "Salam";
    // }else{
    //     echo "Je n'ai pas trouvé la langue";
    // }

    //Q8
    // $langue = readline("Veuillez entrer la langue (fr,nl,es,ar ou en) : ");
    // while($langue != "fr" && $langue != "nl" && $langue != "en" && $langue != "ar" && $langue != "es"){
    //     echo "Je n'ai pas trouvé la langue";
    //     $langue = readline("Veuillez entrer la langue (fr,nl,es,ar ou en) : ");
    // }
    // if($langue == "fr"){
    //         echo "Bonjour";
    //     }elseif($langue == "nl"){
    //         echo "Goedendag";
    //     }elseif($langue == "es"){
    //         echo "Buenos Dias";
    //     }elseif($langue == "en"){
    //         echo "Hello";
    //     }elseif($langue == "ar"){
    //         echo "Salam";
    //     }

    //Q9
    // $bot = 30;
    // $nombre = (int)readline("Veuillez introduire nombre : ");
    // if($nombre < $bot){
    //     echo "Ce nombre est plus petit";
    // }elseif($nombre > $bot){
    //     echo "Ce nombre est plus grand";
    // }else{
    //     echo "Vous avez trouvé le bon nombre";
    // }
            
    //Q10
    // $nb = 30;
    // $nombre = (int)readline("Veuillez introduire nombre : ");
    // while($nb != $nombre ){
    //     if ($nombre > $nb){
    //         echo "Le nombre est trop grand\n";
    //     }else{
    //         echo "Le nombre est trop petit\n";
    //     }
    //     $nombre = (int)readline("Veuillez introduire nombre : ");
    // }
    // echo "Votre nombre ". $nombre . " est bien égale à ". $nb;

    //Q11
    $nb = 30;
    $nombre = (int)readline("Veuillez introduire nombre : ");
    $n = 1;
    while($nb != $nombre && $n < 5){ 
        if ($nombre > $nb){
            echo "Le nombre est trop grand\n";
        }else{
            echo "Le nombre est trop petit\n";
        }
        $nombre = (int)readline("Veuillez introduire nombre : ");
        $n++; // ->   $n = $n +1
    }
    if($nombre === $nb){
        echo "Vous avez trouvé en ". $n . " fois";
    }else{
        echo "Vous avez tenté trop de fois";
    }
    
?>