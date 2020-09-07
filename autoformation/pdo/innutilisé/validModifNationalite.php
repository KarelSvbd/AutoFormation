<?php
include "header.php";
include "connexionPDO.php";

$num=$_POST['num']; //je récupère le libellé du formulaire
$libelle=$_POST['libelle'];

$req=$monPdo->prepare("update nationalite set libelle = :libelle WHERE num = :num"); //requête paramètrée
$req->bindParam(':num', $num); //définition des paramètres
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();

echo '<div class="contener mt-5">';
echo '<div class="row">
  <div class="col mt-4">';
  
if($nb == 1){
    echo "<div class='alert alert-success ' role='alert'>
    La nationalité a bien été amodifiée !
  </div>";
}else{
    echo '<div class="alert alert-danger" role="alert">
        La nationalité n\'a pas été modifiée !
        </div>';
}
?>
</div>
</div>
<a href="listeNationalite.php" class="btn btn-primary">Revenir à la liste des nationalités</a>
<main role="main">



<?php
include "footer.php";
?>