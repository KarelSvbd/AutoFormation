<?php

$action=$_GET['action'];
switch($action){
    case 'list' : //renvoie le list des utilisateurs
            $lesCandidatures=Candidature::findAll();
            require('./vues/listeCandidatures.php');
        break;
    case 'add' : 
        
        //recupération du formulaire 
        $candidature = new Candidature();
        $nom = filter_input(INPUT_POST, "nom", FILTER_DEFAULT);
        $prenom = filter_input(INPUT_POST, "prenom", FILTER_DEFAULT);
        $email  = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $telephone  = filter_input(INPUT_POST, "telephone", FILTER_VALIDATE_INT);
        $adresse = filter_input(INPUT_POST, "adresse", FILTER_DEFAULT);
        $ville  = filter_input(INPUT_POST, "ville", FILTER_DEFAULT);
        $codePostal = filter_input(INPUT_POST, "codePostal", FILTER_VALIDATE_INT);

       if(!empty($nom)){ // cas d'une création 
        
            //attribtions des vlaeurs pour 
            $candidature->setNom($nom);
            $candidature->setPrenom($prenom);
            $candidature->setEmail($email);
            $candidature->setTelephone($telephone);
            $candidature->setAdresse($adresse);
            $candidature->setVille($ville);
            $candidature->setCodePostal($codePostal);
            $nb=Candidature::add($candidature);

            //retour message de succès
            $succesEnvoie = 1;
            $_SESSION["succesEnvoie"]=$succesEnvoie;

            //renvoie vers la liste
            header('location: index.php?uc=postuler&action=list');
            
            
        }
        else{
            echo "bonjour";
           
        }

        require('./vues/postuler.php');
        break;
}
?>