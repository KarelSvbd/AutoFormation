<body>
                <div class="container">
                    <form method="post" class="mt-2" action="/ProjetPolice_Corrige/index.php?uc=postuler&action=add">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="inputCity">Nom</label>
                            <input type="text" class="form-control" name="nom">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">Prenom</label>
                            <input type="text" class="form-control" name="prenom">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="inputCity">Email</label>
                            <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">N° téléphone</label>
                            <input type="text" class="form-control" name="telephone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Adresse</label>
                            <input type="text" class="form-control" name="adresse" placeholder="Ex : chemin du Grand-Puis 12">
                            <div class="form-group col-md-6">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                            <label for="inputCity">Ville</label>
                            <input type="text" class="form-control" id="ville">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputZip">Code Postal</label>
                            <input type="text" class="form-control" name="codePostal" id="inputZip">
                            </div>
                        </div>
                        <a href="/ProjetPolice_Corrige/index.php?uc=postuler&action=add"><div class="btn btn-success  mb-5 mt-2">Envoyer ma candidature</div></a>
                    </form>
                </div>
</body>