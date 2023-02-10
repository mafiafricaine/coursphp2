<?php 
    session_start();
    $_SESSION['role']= "admin";
    $_SESSION['user'] = [
        "firstname" => "Julien",
        "lastname" => "Dunia",
        "login" => "deoking",
        "password" => 1111
    ];
    
    $title = "Page d'accueil";
    $nav = "index";
    require_once 'header.php';
?>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Bienvenue sur ma page d'accueil</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </main><!-- /.container -->
<?php 
    require_once 'footer.php';
?>
    
