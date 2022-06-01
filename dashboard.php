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

        // Display all users in the database if the user is admin on a GET button redirecting to administration.php


        if ($_SESSION['identifiant'] == 'administrateur') {
            $users = $conn->query('SELECT * FROM user');
            while ($user = $users->fetch()) {
                echo '<form action="administration.php" method="post">';
                echo '<input type="submit" name="nom_dashboard" value="' . $user['identifiant'] . '">';
                echo '</form>';
                
            }

        }
        else {
            echo "Vous n'avez pas accès à cette page";
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
