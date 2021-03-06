<?php
include "header.php";
include "connexionPdo.php";

$req=$monPdo->prepare("select n.num, n.libelle as libNation, c.libelle as libContinent from nationalite n, continent c where n.numContinent=c.num");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll(); //aller chercher ce qui a été récupérer par la requête

if(!empty($_SESSION['message'])){
  $mesMessages=$_SESSION['Message'];
  foreach($mesMessages as $key->$message){
    echo '<div class="container pt-5" >
    <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'    
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>';
}
$_SESSION['message']=[];
}
?>
<div class="row mt-2">
  <form action="" method="get" class="border border-primary rounded p-3">

  </form>
</div>

<div class="container pt-5">

    <div class="row pt-3">
      <div class="col-9"><h2>Liste des nationalités<h2></div>
      <a href='formNationalite.php?action=Ajouter' class="col-3"><div class=" btn btn-success"><i class="fas fa-plus-circle"></i> Créer une nationalité</div></a>
    </div>
   
    <table class="table table-hover table-striped table-dark">
  <thead>
    <tr class="d-flex">
      <th scope="col"  class="col-md-2">Numéro</th>
      <th scope="col" class="col-md-5">Libellé</th>
      <th scope="col" class="col-md-3">Continent</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
  //génération de la table
  foreach($lesNationalites as $nationalite){
    echo "<tr class='d-flex'>";
        echo "<td class='col-md-2'>$nationalite->num</td>";
        echo "<td class='col-md-5'>$nationalite->libNation</td>";
        echo "<td class='col-md-3'>$nationalite->libContinent</td>";
        echo "<td class='col-md-2'>
            <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='fas fa-pen'></i></a>
            <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer cette nationalité ?' data-suppression='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
        </td>";
        echo "</tr>";
  }
    ?>
  </tbody>
</table>
<div id="modalSuppression" class="modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
      </div>
      <div class="modal-body">
        <p>Voulez-vous supprimer cette nationalité ?</p>
      </div>
      <div class="modal-footer">
        <a href="" type="button" class="btn btn-primary">Supprimer</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ne pas supprimer</button>
      </div>
    </div>
  </div>
</div>
  </div>
<?php
include "footer.php";
?>