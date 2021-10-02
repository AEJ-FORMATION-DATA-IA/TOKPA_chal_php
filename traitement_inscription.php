<?php
    if(isset($_POST['inscription']))
    {   
        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp_conf']))
        {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = sha1($_POST['mdp']);
            $mdp_conf = sha1($_POST['mdp_conf']);

            $taillepseudo = strlen($pseudo);
            if($taillepseudo >255)
            {
                $message = "Votre pseudo ne doit pas contenir plus de 255 caracteres";
            }
            else
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    $select_mail->execute(array($mail));
                    $verif_mail_exist = $select_mail->rowCount();

                    if($verif_mail_exist != 0)
                    {
                        $message = "Cette adresse mail est déja utlisée";
                    }
                    else
                    {
                        if($mdp != $mdp_conf)
                        {
                            $message = "les mots de passe ne correspondent pas";
                        }
                        else
                        {
                            $inscription_membre->execute(array($pseudo, $mail, $mdp));
                            header('Location: page_connexion.php');
                        }
                    }
                }
                    
                else
                {
                    $message = "Votre email n'est pas valide";
                }
            }
        }
        else
        {
            $message = "Completez tous les champs";
        }
        
    }



?>