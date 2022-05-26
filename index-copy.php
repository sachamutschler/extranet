<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
        <div id="dossier_link">
            <a href="menu-dossier.php"><img src="resources/img/ra16.png" alt="image" class="dossier" onclick="window.location.href='menu-dossier.php'"><!-- image par freepik --></a>
            <a href="menu-dossier.php"><h1 id="titre" class="titre" onclick="window.location.href='menu-dossier.php'">Inscription</h1></a>
        </div>
        <div id="dossier_link">
            <a href="index.php"><img src="resources/img/ra16.png" alt="image" class="dossier"></a>
            <a href="index.php"><h2 id="titre" class="titre">Connexion</h2></a>
        </div>';
    
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
    <script src="resources/js/navbar.js"> </script>
</body>
</html>