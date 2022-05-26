<div class="contenu">

    <form class="row g-3" action="inscription.php" method="post">
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label">Nom <span style="color:red;">*</span></label>
            <input type="text" name="name" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Prenom <span style="color:red;">*</span></label>
            <input type="text" name="firstname"class="form-control" id="validationDefault02" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Identifiant <span style="color:red;">*</span></label>
            <input type="text" name="identifiant"class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault04" class="form-label">Mot de passe <span style="color:red;">*</span></label>
            <input type="password" name="password" class="form-control" id="validationDefault04" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault05" class="form-label">Confirmer mot de passe <span style="color:red;">*</span></label>
            <input type="password" name="confirmPassword"class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-md-8">
            <label for="mail" class="form-label">E-mail <span style="color:red;">*</span></label>
            <input type="email" name="email" class="form-control" id="mail"  aria-describedby="inputGroupPrepend2" required>
        </div>
        <div class="col-md-6">
            <label for="telPortable" class="form-label">Téléphone portable <span style="color:red;">*</span></label>
            <input type="number" name="telPort" class="form-control" id="telPortable" required>
        </div>
        <i style="color:white;"><span style="color:red;">*</span> Champs obligatoires</i>
        <br>
        <br>

        <div class="form-example">
            <input type="submit" name="submit" value="Envoyer" class="bouton">
        </div><br>

        <?php if(isset($_GET['id_produit_inscription'])) { ?>
            <input type="hidden" name="id_produit_inscription" value="<?php echo($_GET['id_produit_inscription']); ?>">
        <?php } ?>
    </form>
</div>
