<?php 
session_start();
session_unset();
    $nav = "apropos";
    require_once "header.php";
    ?>
    <h1>A propos de nous</h1>
    <h3>Qui sommes nous ?</h3>
    <p> Nous sommes un organisme de solidarité</p>
    <?php 
    require_once "footer.php";
    ?>   