<?php
require ('Class/Autoloader.php');
require ('SQL/connexion_bdd.php');
Autoloader::register();


?>

<form action="notepad.php" method="post" class="form-notepad">
    <p>
        <label for="pseudo">Pseudo</label> : <input readonly="readonly" type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['identifiant'] ?>" /> <br/>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" name="envoyer" value="Envoyer" />
    </p>
</form>
<div class="tchat">
    <?php

    if (isset($_POST['envoyer'])) {
        // insert into table notepad pseudo message and id_user
        $message = htmlspecialchars($_POST['message']);
        $pseudo = $_SESSION['identifiant'];
        $id_user = $_SESSION['id'];

        $req = $conn->prepare("INSERT INTO notepad (id_user, pseudo, message) VALUES ( :id_user, :pseudo, :message)");

        $req->bindValue(1, $_POST['pseudo']);
        $req->bindValue(2, $_POST['message']);
        $req->bindValue(3, $id_user);
        $req->execute(  array(
            'id_user' => $id_user,
            'pseudo' => $pseudo,
            'message' => $message
        ));

        //$req->fetch();
        $req->closeCursor();
        //header("Location: notepad.php");
    }

    // if there is a message display all messages of the user
    $id_user = $_SESSION['id'];

    $req = $conn->prepare("SELECT * FROM notepad WHERE id_user = $id_user ORDER BY id DESC");
    $req->execute(array('id_user' => $id_user));


    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = $req->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['message']) . '</p>';
    }

    $req->closeCursor();

    ?>
</div>
