<?php
// session_start();

$title = "Dashboard";
$nav = "dashboard";
require_once 'header.php';

//verifie si on n'est pas connecté
if(!is_connected()):
    header("Location: login.php");
endif;
?>
    <h1>Bienvenu <?php echo $_SESSION['pseudo'] ;?> sur votre Dashboard</h1>

<?php
require_once 'footer.php';
?>