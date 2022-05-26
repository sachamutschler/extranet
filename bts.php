<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <div class="navbar_dossier">
            <div class="title-bar">
                <div class="title-bar-text">Mon CV</div>
                    <div class="title-bar-controls">
                    <button aria-label="Maximize" onclick="maximize()"></button>
                    <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
                </div>
            </div>
        </div>
        <div class="bts">
            <div class="intro-bts">
                <p>Le BTS Services Informatiques aux Organisations est un diplôme recconu par l'état de niveau BAC+2.</p>
                <p>Il remplace depuis Septembre 2011, l'ancien BTS IG (Informatique de gestion).</p>
                <p>En effet, cette nouvelle formule réponds aux attentes de la profession en matière de qualification.</p>
                <p>Le programme a évolué en fonction de la place et du rôle des TIC (Technologies de l'Information et de la Communication)</p>
                <p>Et propose deux spécialités bien distinctes : Le BTS SIO Option SISR et le BTS SIO Option SLAM.</p>
            </div>
            <div class="bts-desc">
                <div class="bts-sisr">
                    <h3>OPTION A : SISR</h3>
                    <p>La spécialisation SISR du BTS SIO permet d’apprendre un métier qui consiste à installer, configurer et gérer les équipements et les réseaux informatiques. Cela signifie intervenir sur la conception, la mise en place, le déploiement et la maintenance de programmes destinés à la gestion au sein d’une organisation.</p>
                </div>
                <div class="bts-slam">
                    <h3>OPTION B : SLAM</h3>
                    <p>La spécialisation SLAM du BTS SIO est elle plus orientée Développement. Elle permet d'apprendre à réaliser des logiciels, sites webs, applications mobiles, mais aussi de rédiger des documentations techniques liées à celles-ci. De plus, elle permet d'apprendre à former des utilisateurs pour gérer la maintenance des applications.</p>
                </div>
            </div>
        </div>
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