<?php
session_start();
require 'SQL/connexion_bdd.php';
require_once 'Class/Autoloader.php';
Autoloader::register();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include('head.php');

?>
<body>
<div class="fichier window" id="fichier">
    <div class="navbar_dossier">
        <div class="title-bar">
            <div class="title-bar-text">Portfolio Sacha Mutschler</div>
            <div class="title-bar-controls">
                <button aria-label="Maximize" onclick="maximize()"></button>
                <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
            </div>
        </div>
    </div>

    <div class="div-navbar-dossier">
        <ul class="navbar-dossier">
            <li><a href="#">Fichier</a></li>
            <li><a href="#">Edition</a></li>
            <li><a href="#">Affichage</a></li>
            <li><a href="#">Favoris</a></li>
            <li><a href="#">Outils</a></li>
            <li><a href="#">?</a></li>
        </ul>
        <div class="div-logo-nav">
            <img src="resources/img/Windows_logo.png" alt="" srcset="" class="logo-nav-dossier">
        </div>
    </div>
    <div class="div2-navbar-dossier">
        <div class="div-retour" onclick="window.location.href='e5.php'">
            <img src="resources/img/redo.png" class="">
            <p>Précédente</p>
        </div>
        <img src="resources/img/search.png" class="retour">
        <img src="resources/img/shared folder.png" class="retour">
    </div>
    <?php
    //Display the admin panel with the user's data and a form to edit it if the user is an admin or the user is the owner of the account

    //Check if the user is logged in
    if (!isset($_SESSION['identifiant'])) {
        header("Location: index-copy.php");
    }
    $identifiant = htmlspecialchars($_POST['nom_dashboard']);

    $select = $conn->prepare('SELECT * FROM user WHERE identifiant = :identifiant');
    $select->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
    $select->execute();


    //form to edit the user's data
    if (isset($_SESSION['identifiant'])) {
        echo '<form action="administration.php" method="post">';
        echo '<div class="div-form-user">';
        echo '<div class="div-form-user-left">';
        echo '<div class="div-form-user-left-top">';
        echo '<div class="div-form-user-left-top-left">';
        echo '<label for="identifiant">Identifiant</label>';
        echo '<input type="text" name="identifiant" id="identifiant" value="' . $select->fetch()['1'] . '">';
        echo '</div>';
        echo '<div class="div-form-user-left-top-right">';
        echo '<label for="nom">Nom</label>';
        echo '<input type="text" name="nom" id="nom" value="' . $select->fetch()['3'] . '">';
        echo '</div>';
        echo '</div>';
        echo '<div class="div-form-user-left-bottom">';
        echo '<label for="prenom">Prénom</label>';
        echo '<input type="text" name="prenom" id="prenom" value="' . $select->fetch()[4] . '">';
        echo '</div>';
        echo '</div>';
        echo '<div class="div-form-user-right">';
        echo '<div class="div-form-user-right-top">';
        echo '<label for="email">Email</label>';
        echo '<input type="text" name="email" id="email" value="' . $select->fetch()[5] . '">';
        echo '</div>';
        echo '<div class="div-form-user-right-bottom">';
        echo '<label for="password">Mot de passe</label>';
        echo '<input type="password" name="password" id="password" value="' . $select->fetch()[2] . '">';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="div-form-user-submit">';
        echo '<input type="submit" value="Modifier">';
        echo '</div>';
        echo '</div>';
        echo '</form>';


    }




    ?>



</div>

<div id="navbar">
    <?php
    require('menu.php');
    ?>
    <button class="logo-vert button-start-menu">
        <img src="resources/img/Windows_logo.png" alt="" class="logo-windows">
        start
    </button>
    <div class="blur-right-bar">
        <ul class="blur-right-bar-applications">
            <li onclick="window.location.href='error.php'"><img src="resources/img/msn.png" alt="internet explorer icon"></li>
            <li><img src="resources/img/my_computer.png" alt="internet explorer icon"></li>
            <li><img src="resources/img/my_network_places.png" alt="internet explorer icon"></li>
        </ul>
        <span class="time">
                    14:34
                </span>
    </div>
</div>
<script src="resources/js/main.js"></script>
</body>
</html>
