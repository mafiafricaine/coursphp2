<?php

$title = "Jeu du Hasard";
$nav = "jeuDuHasard";
require_once "header.php";
is_connected();
if (!isset($_SESSION['numeroGagnant'])):
    $_SESSION['numeroGagnant'] = rand(0, 10);
endif;


?>
<h1>Jeu du Hasard</h1>

<?php 
if (isset($_POST["nombre"])) :
    
    if ($_POST["nombre"] > 10 || $_POST["nombre"] < 0) : ?>
         Vous avez introduis un chiffre non compris entre 0 et 10 
    <?php elseif($_POST['nombre'] > $_SESSION['numeroGagnant']) : ?>
        Votre nombres est trop grand !
    <?php elseif ($_POST['nombre'] < $_SESSION['numeroGagnant']) : ?>
        Votre nombres est trop petit !
    <?php else : ?>
        Vous avez bien trouver le bon nombre <?php echo $_SESSION['numeroGagnant']; 
        unset($_SESSION['numeroGagnant']); 
        //session_unset();?>
<?php endif;
endif;
?>
<form action="/coursphp2/jeuDuHasard.php" method="POST">
    <input type="number" name="nombre" placeholder="Entre 0 et 10">
    <button type="submit">Deviner</button>
</form>

<?php require_once "footer.php"; ?>