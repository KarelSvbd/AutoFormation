<?php
$action=$_GET['action'];
switch($action){
    case 'list' :
            $LesCandidatures=Candidature::findAll();
            require('../vues/listeCandidatures.php');
        break;
    case 'add' : 
        break;
    case 'update' : 
        break;
    case 'delete' : 
        break;
}
?>