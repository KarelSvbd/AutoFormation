<div class="container mt-5">
    
    <div class="row pt-3">
        <div class="col-9"><h2>Liste des Candidatures</h2></div>
        <div class="col-3"><a href="index.php?uc=postuler&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer une candidature</a> </div>
        
    </div>
    <table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-1">id</th>
        <th scope="col" class="col-md-2">nom</th>
        <th scope="col" class="col-md-2">prenom</th>
        <th scope="col" class="col-md-3">email</th>
        <th scope="col" class="col-md-2">telephone</th>
        <th scope="col" class="col-md-2">Code Postal</th>
        </tr>
    </thead>
    <tbody>
    <?php
            foreach($lesCandidatures as $candidature){
                echo "<tr class='d-flex'>";
                echo "<td class='col-md-1'>". $candidature->getIdCandidature() ."</td>";
                echo "<td class='col-md-2'>". $candidature->getNom(). "</td>";
                echo "<td class='col-md-2'>". $candidature->getPrenom(). "</td>";
                echo "<td class='col-md-3'>". $candidature->getEmail(). "</td>";
                echo "<td class='col-md-2'>". $candidature->getTelephone(). "</td>";
                echo "<td class='col-md-2'>". $candidature->getCodePostal(). "</td>";
                echo "<a href='formNationalite.php?action=Modifier&num= " . $candidature->getIdCandidature() . " class='btn btn-primary'><i class='fas fa-pen'></i></a>
                    <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer cette nationalité ?' data-suppression='supprimerNationalite.php?num=" . $candidature->getIdCandidature() . " class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                </td>";
            echo "</tr>";
        }
    
    ?>
        
    </tbody>
    </table>

</div>