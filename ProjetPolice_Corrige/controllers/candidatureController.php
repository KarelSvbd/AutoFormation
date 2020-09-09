<?php

$action=$_GET['action'];
switch($action){
    case 'list' :
            $lesCandidatures=Candidature::findAll();
            require('./vues/listeCandidatures.php');
        break;
    case 'add' : 
            
            require('./vues/postuler.php');
        break;
    case 'ajouter' :
        $candidature = new Candidature();
        if(empty($_POST['nom'])){ // cas d'une création
            $candidature->setNom($_POST['nom']);
            $candidature->setPrenom($_POST['prenom']);
            $candidature->setEmail($_POST['email']);
            $candidature->settelephone($_POST['telephone']);
            $candidature->setAdresse($_POST['adresse']);
            $candidature->setVille($_POST['ville']);
            $candidature->setCodePostal($_POST['codePostal']);
            $nb=Candidature::add($candidature);
            $message = "ajouté";
        }
        header('location: index.php?uc=continents&action=list');
        exit();
        break;
        break;
    case 'update' : 
        break;
    case 'delete' : 
        break;
}
?>