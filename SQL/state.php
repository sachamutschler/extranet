<?php

//if the user is connected and is admin


if ($user->isAdmin && $user->connected){
    echo '  <div id="dossier_link">
                <a href="dashboard.php"><img src="resources/img/my_cumputer.png" alt="image" class="dossier"></a>
                <a href="dashboard.php"><h2 id="titre" class="titre">Dashboard</h2></a>
            </div>';

    echo '  <div id="dossier_link">
                <a href="note.php"><img src="resources/img/editor.png" alt="image" class="dossier"></a>
                <a href="note.php"><h2 id="titre" class="titre">Bloc-Netes</h2></a>
            </div>';
}


//if the user is connected and is not admin


if ($user->connected && !$user->isAdmin){
    echo '  <div id="dossier_link">
                <a href="note.php"><img src="resources/img/editor.png" alt="image" class="dossier"></a>
                <a href="note.php"><h2 id="titre" class="titre">Bloc-Netes</h2></a>
            </div>';
}

//if the user is not connected and is not admin


if (!$user->connected && !$user->isAdmin){
    echo '  <div id="dossier_link">
                <a href="index.php"><img src="resources/img/ra16.png" alt="image" class="dossier"></a>
                <a href="index.php"><h2 id="titre" class="titre">Inscription</h2></a>
            </div>';
    
    echo '  <div id="dossier_link">
                <a href="index.php"><img src="resources/img/ra16.png" alt="image" class="dossier"></a>
                <a href="index.php"><h2 id="titre" class="titre">Connexion</h2></a>
            </div>';
}