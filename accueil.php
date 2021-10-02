<?php
session_start();
    include_once ('connexion.php');
    include_once ('traitement_rapport.php');

   // if(isset($_GET['id']) AND $_GET['id'] > 0){
     //   $getId = intval($_GET['id']);
       // $select_membre->execute(array($_GET['id']));
       // $info_membre = $select_membre->fetch();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Accueil</title>
    </head>
    <body>
        <div>
            <h4 class="col-lg-12 text-align-end">Compte de <?php echo $_SESSION['pseudo']; ?><a href="deconnection.php"> | Se deconnecter</a></h4>
        </div>
        <div class=" form container jnt-pad-top">
            <h4 class="col-lg-12">AJOUTER UN RAPPORT</h4>
            <form class="form-horizontal style-form"  method="POST" action="">
                <!--div class="form-group ">
                    <label for="prenom_rapport" class="control-label col-lg-2">Pseudo*</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="prenom_rapport" name="prenom_rapport" minlength="2" type="text" required />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="mail_rapport" class="control-label col-lg-2">E-Mail*</label>
                    <div class="col-lg-10">
                        <input class="form-control " id="mail_rapport" type="email" name="mail_rapport" required />
                    </div>
                </div-->
                <div class="form-group ">
                    <label for="rapport" class="control-label col-lg-2">Votre rapport*</label>
                    <div class="col-lg-10">
                        <textarea class="form-control " id="rapport" name="rapport" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="valider" type="submit">Valider</button>
                    </div>
                </div>
            </form>
            <div>
                <?php
                    $select_rapport = $bdd->query($req_select_rapport);
                    include_once ('table_liste_rapport.php');
                ?>
            </div>
        </div>
        
    </body>
</html>