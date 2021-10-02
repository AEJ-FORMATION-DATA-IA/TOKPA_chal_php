<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion</title>
</head>
<body>
<?php
    include_once ('connexion.php');
    include_once ('traitement_connexion.php');
?>
    
    <div class="jnt-arriere-plan">
        <div class="container">
            <h2 class="jnt-titre">CONNEXION</h2>
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
                        <label for="mail_connect" class="col-md-offset-1 col-md-4 jnt-position">Email </label>
                        <input type="email" class="col-md-3 jnt-chp-insc" name="mail_connect" id="mail_connect"  value="<?php if(isset($_POST['mail'])) { echo $_POST['mail'];} ?>">
                    </div>
                    <div class="row jnt-insc-par">
                        <label for="mdp_connect" class="col-md-offset-1 col-md-4 jnt-position">Mot de passe </label>
                        <input type="password" class="col-md-3 jnt-chp-insc" name="mdp_connect" id="mdp_connect" >
                    </div>
                    <div class="row jnt-insc-par">
                        <input type="submit" name="connexion" value="Se connecter" class="btn btn-success btnInscription col-md-offset-5 col-md-2">
                    </div>
                </form>
                <div>
                    <a href="index.php" class="jnt-lien-connect">S'inscrire</a>
                </div>
            </div>
            
        </div>
        </div>
    </div>

</body>
</html>


