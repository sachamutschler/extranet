<?php

//si on clique sur le bouton envoyer
if (isset($_POST['submit'])) {

    $errors = [];

    if  (isset($_POST['identifiant']) && !empty($_POST['identifiant'])){
        $selectExistInBdd = $conn->prepare('SELECT * FROM user WHERE identifiant = :identifiant');
        $selectExistInBdd->bindValue('identifiant', $_POST['identifiant']);
        $selectExistInBdd->execute();
        $selectExistInBdd = $selectExistInBdd->fetch();
        if (!preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $_POST['identifiant'])){
            $errors[] = "Votre nom d'utilisateur n'est pas conforme, il doit contenir entre 5 et 31 charactères sans charactères spéciaux";
        }elseif ($selectExistInBdd != NULL){
            $errors[] = "Cet identifiant est déjà utilisé";
        }
    }else{
    $errors[] = "Vous n'avez pas entré de nom d'utilisateur";
    }

    if  (isset($_POST['password']) && !empty($_POST['password'])){
        $pattern = '/^(?=.*[!@#$%^+&*-])(?=.*[0-9])(?=.*[A-Z]).{8,31}$/';
        if (!preg_match($pattern, $_POST['password'])){
            $errors[] = "Votre mot de passe n'est pas conforme, il doit contenir entre 8 et 31 charactères, avec une majuscule et un caractère spécial.";
            }
        }else{
        $errors[] = "Vous n'avez pas entré de mot de passe";
    }

    if (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])){
        if ($_POST['confirmPassword'] != $_POST['password']){
            $errors[] = "Votre confirmation ne correspond pas au mot de passe";
        }
    }else{
        $errors[] = "Vous n'avez pas confirmé votre mot de passe";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])){
        if (!preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['email'])){
            $errors[] = "Votre mail n'est pas conforme";
        }
    }else{
        $errors[] =  "Vous n'avez pas entré de mails";
    }

    if (!isset($_POST['telPort']) && empty($_POST['telPort'])){
        $errors[] = "Votre numéro de téléphone n'est pas conforme";
    }

    if ($errors){
        foreach ($errors as $error) {
            echo '<p style="color:white">' . $error . '</p><br>';
        }
    }else{
        $token = generateToken(30);
        $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = $conn->prepare("INSERT INTO user(identifiant, mot_de_passe, nom, prenom, mail, telephone_port, code_validation)
                                    VALUES(:identifiant, :mdp, :nom, :prenom, :email, :telephone_port, :code_validation)");
        $query->bindValue('identifiant', htmlspecialchars($_POST['identifiant']));
        $query->bindValue('mdp', $passwordHash);
        $query->bindValue('nom', htmlspecialchars($_POST['name']));
        $query->bindValue('prenom', htmlspecialchars($_POST['firstname']));
        $query->bindValue('email', htmlspecialchars($_POST['email']));
        $query->bindValue('telephone_port', htmlspecialchars($_POST['telPort']));
        $query->bindValue('code_validation', $token);
        $query->execute();

        $id = $conn->lastInsertId();

        $_SESSION['identifiant'] = $id;
        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['nom'] = htmlspecialchars($_POST['name']);
        $_SESSION['prenom'] = htmlspecialchars($_POST['firstname']);

        

        if(isset($_POST['id_produit_inscription'])) {
            header('Location: produit.php?id_produit='.$_POST['id_produit_inscription']);
        }else{
            header('Location: index-copy.php');
        }
    }
}
else{
//    echo("Bienvenue sur mon formulaire !");
}
