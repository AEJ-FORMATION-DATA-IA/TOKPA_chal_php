<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
</head>
<body>
    <?php
        include_once ('connexion.php');
        include_once ('traitement_inscription.php');
    ?>

    <div class="jnt-arriere-plan">
        <div class="container">
            <h2 class="jnt-titre">INSCRIPTION</h2>
            <div class="jnt-message">
            <?php
                if (isset($message))
                {
                    echo $message;
                }
            ?>
            </div>
            <div class="jnt-form">
                <form action="" method="POST">
                    <div class="row jnt-insc-par">           
                        <label for="pseudo" class="col-md-offset-1 col-md-4 jnt-position">Pseudo </label>
                        <input type="text" class="col-md-3 jnt-chp-insc" name="pseudo" id="pseudo"  value="<?php if(isset($_POST['pseudo'])) { echo $_POST['pseudo'];} ?>">
                    </div>
                    <div class="row jnt-insc-par">
                        <label for="mail" class="col-md-offset-1 col-md-4 jnt-position">Email </label>
                        <input type="email" class="col-md-3 jnt-chp-insc" name="mail" id="mail"  value="<?php if(isset($_POST['mail'])) { echo $_POST['mail'];} ?>">
                    </div>
                    <div class="row jnt-insc-par">
                        <label for="mdp" class="col-md-offset-1 col-md-4 jnt-position">Mot de passe </label>
                        <input type="password" class="col-md-3 jnt-chp-insc" name="mdp" id="mdp" >
                    </div>
                    <div class="row jnt-insc-par">
                        <label for="mdp_conf" class="col-md-offset-1 col-md-4 jnt-position">Confirmer le mot de passe </label>
                        <input type="password" class="col-md-3 jnt-chp-insc" name="mdp_conf" id="mdp_conf" >
                    </div>
                    <div class="row jnt-insc-par">
                        <input type="submit" name="inscription" value="S'inscrire" class="btn btn-success btnInscription col-md-offset-5 col-md-2">
                    </div>
                </form>
                <div class="lien">
                    <a href="page_connexion.php" class="jnt-lien-connect">Se Connecter</a>
                </div>
            </div>
            
        </div>
        </div>
    </div>
    
</body>
</html>