<?php
$nav = "login";
$title = "Login";
$erreur = null;
require_once "header.php";
if(is_connected()):
    header('Location: dashboard.php');
endif;

if (!empty($_POST['pseudo']) || !empty($_POST['password'])) {
    if ($_POST['pseudo'] === "Julien" && $_POST['password'] === "12345") {
        $_SESSION['connected'] = true;
        $_SESSION['pseudo']= $_POST['pseudo'];
        header('Location: dashboard.php');
    } else {
        $erreur = "Identifiants incorrects !";
    }
}

if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
<?php endif;
?>
<div align="center">
    <h1>Login</h1>

    <form action="/coursphp2/login.php" method="POST">
        <input type="text" name="pseudo" placeholder="Votre Login">
        <br><br>
        <input type="password" name="password" placeholder="Votre mot de passe">
        <br><br>
        <button class="btn btn-primary" type="submit">Se connecter</button>
    </form>
</div>
<?php
require_once "footer.php";
?>