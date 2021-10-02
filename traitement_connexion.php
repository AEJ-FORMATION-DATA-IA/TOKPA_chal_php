<?php

    if(isset($_POST['connexion']))
    {   
        if(!empty($_POST['mail_connect']) AND !empty($_POST['mdp_connect']))
        {
            $mail_connect = htmlspecialchars($_POST['mail_connect']);
            $mdp_connect = sha1($_POST['mdp_connect']);
            $select_compte->execute(array($mail_connect, $mdp_connect));
            $compte_exist= $select_compte->rowCount();
            if($compte_exist != 1){
                $message = "Erreur sur les parametres de connexion ou Compte inexistant.";
            }
            else{
                $info_membre = $select_compte->fetch();
                $_SESSION['id'] = $info_membre['id'];
                $_SESSION['pseudo'] = $info_membre['pseudo'];
                $_SESSION['mail'] = $info_membre['mail'];
                header('Location: accueil.php?id='.$_SESSION['id']);
            }
        } 
        else
        {
            $message = "Completez tous les champs";
        }       
    }
    
        

?>