<?php session_start();

/* Projet      : Police
 * Version     : 2.0
 * Description : Correction du projet
 * Date        : 02.08.2020
 * 
 * 
 * Auteurs     : Karel V. Svoboda
 * Classe      : I.DA-P3B
*/

require('./modeles/connexionbdd.php');
require('./modeles/Candidatures.php');
//appel du header
require('./vues/header.inc.php');

//appel de la navigation
require('./vues/nav.inc.php');

$uc = empty($_GET['uc']) ? "accueil" : $_GET['uc']; //si $uc est vide alors on retourne accueil, si ce n'est pas le cas on retourne la veleur de $uc

switch($uc){
    case 'accueil' :
        require('./vues/accueil.php');
        break;
    case 'postuler' :
        require('./controllers/candidatureController.php');
        break;
    case 'listerCandidats' :
        
        break;
}

/**/


require('./vues/footer.inc.php');
?>


