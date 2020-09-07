<?php
include "header.php";
include "connexionPDO.php";

$libelle=$_POST['libelle']; //je récupère le libellé du formulaire

$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)"); //requête paramètrée
$req->bindParam(':libelle', $libelle); //définition des paramètres
$nb=$req->execute();

echo '<div class="contener mt-5">';
echo '<div class="row">
  <div class="col mt-4">';
  
if($nb == 1){
    echo "<div class='alert alert-success ' role='alert'>
    La nationalité a bien été ajoutée
  </div>";
}else{
    echo '<div class="alert alert-danger" role="alert">
        La nationalité n\'a pas été ajoutée !
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