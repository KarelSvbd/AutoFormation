<?php
include "header.php";
include "connexionPdo.php";
$action=$_GET['action']; // soit Ajouter soit Modifier

if($action == "Modifier"){
  $num=$_GET['num'];
  $req=$monPdo->prepare("select * FROM nationalite where num= :num");
  $req->setFetchMode(PDO::FETCH_OBJ);
  $req->bindParam(':num', $num);
  $req->execute();
  $laNationalite=$req->fetch();
}
?>
<div class="container mt-5">
<h2 class="pt-5 text-center"><?php echo $action ?> une nationalité</h2>
<form action="validFormNationalite.php?action=<?php echo $action ?>" method="post" class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="labelle">Libellé</label>
    <input type="text" class="form-control" id="libelle" placeholder="Saisir un libellé" name='libelle' value='<?php if($action == "Modifier"){echo $laNationalite->libelle;} ?>'>
  </div>
  <input type="hidden" id="num" name="num" value='<?php if($action == "Modifier"){echo $laNationalite->num;} ?>'>
  <div class="row">
    <div class="col"><a href='listeNationalite.php' class='btn btn-warning btn-block'>Revenir à la liste</a></div>
    <div class="col"><button type="submit" class="btn btn-primary btn-block"><?php echo $action ?></button></div>
  </div>
  
</form>
</div>

<?php
include "footer.php";
?>