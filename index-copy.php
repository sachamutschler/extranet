<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
<?php  
    
    // if the user is not connected, we display the login and the register page

    if(!isset($_SESSION['id'])){
        
        ?>
        <div id="dossier_link">
            <a href="inscription.php"><img src="resources/img/ra16.png" alt="image" class="dossier"><!-- image par freepik --></a>
            <a href="inscription.php"><h1 id="titre" class="titre">Inscription</h1></a>
        </div>
        <div id="dossier_link">
            <a href="connexion.php"><img src="resources/img/ra16.png" alt="image" class="dossier"></a>
            <a href="connexion.php"><h2 id="titre" class="titre">Connexion</h2></a>
        </div>
        <?php
    }
    //if the user is connected and the user is admin, we display the dashboard and the notepad link
    if (isset($_SESSION['id']) && $_SESSION['admin'] == 1) {
        ?>
        <div id="dossier_link">
            <a href="dashboard.php"><img src="resources/img/my_computer.png" alt="image" class="dossier"><!-- image par freepik --></a>
            <a href="dashboard.php"><h1 id="titre" class="titre">Dashboard</h1></a>
        </div>
        <div id="dossier_link">
            <a href="notepad.php"><img src="resources/img/editor.png" alt="image" class="dossier"></a>
            <a href="notepad.php"><h2 id="titre" class="titre">Notepad</h2></a>
        </div>
        <!-- Deconnexion link -->
        <div id="dossier_link">
            <a href="deconnexion.php"><img src="resources/img/Shutdown_Box_Red.png" alt="image" class="dossier"></a>
            <a href="deconnexion.php"><h2 id="titre" class="titre">Déconnexion</h2></a>
        </div>
        <?php
    }
    //if the user is connected and the user is not admin, we only display the notepad link

    else if (isset($_SESSION['id']) && $_SESSION['admin'] == 0) {
        ?>
        <div id="dossier_link">
            <a href="notepad.php"><img src="resources/img/editor.png" alt="image" class="dossier"></a>
            <a href="notepad.php"><h2 id="titre" class="titre">Notepad</h2></a>
        </div>
        <div id="dossier_link">
            <a href="deconnexion.php"><img src="resources/img/Shutdown_Box_Red.png" alt="image" class="dossier"></a>
            <a href="deconnexion.php"><h2 id="titre" class="titre">Déconnexion</h2></a>
        </div>
        <?php
        
        
    }
    
    ?>

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