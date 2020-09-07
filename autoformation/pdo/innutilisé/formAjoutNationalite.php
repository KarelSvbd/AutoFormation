<?php
include "header.php";
include "connexionPdo.php";
?>
<div class="container mt-5">
<h2 class="pt-5 text-center">Ajouter une nationalité</h2>
<form action="validAjoutNationalite.php" method="post" class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="labelle">Libellé</label>
    <input type="text" class="form-control" id="libelle" placeholder="Saisir un libellé" name='libelle'>
  </div>
  <div class="row">
    <div class="col"><a href='listeNationalite.php' class='btn btn-warning btn-block'>Revenir à la liste</a></div>
    <div class="col"><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
  </div>
  
</form>
</div>

<?php
include "footer.php";
?>