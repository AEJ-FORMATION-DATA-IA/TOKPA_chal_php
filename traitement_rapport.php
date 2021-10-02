<?php
    if(isset($_POST['valider']))
    {   
        if (!empty($_POST['rapport']))
        {
            $rapport = htmlspecialchars($_POST['rapport']);
            $ajouter_rapport->execute(array($_SESSION['pseudo'], $_SESSION['mail'], $rapport));
            $message = "Rapport enregistré";
            
        }      
    }
    
?>