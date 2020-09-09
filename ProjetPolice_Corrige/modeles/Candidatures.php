<?php
class Candidature {
    
    //déclaration des variables

    /**
     * Clé primaire
     *
     * @var int
     */
    private $idCandidature;

    /**
     * nom de la candidature
     *
     * @var string
     */
    private $nom;

    /**
     * nom de la candidature
     *
     * @var string
     */
    private $prenom;

   
    /**
     * Get the value of idCandidature
     */ 
    public function getIdCandidature()
    {
    return $this->idCandidature;
    }

    /**
     * Lit le nom
     *
     * @return string
     */
    public function getNom() : string
    {
    return $this->nom;
    }

    /**
     * ecrit dans le "nom"
     *
     * @param string $nom
     * @return self
     */
    public function setNom(string $nom) : self
    {
    $this->nom = $nom;

    return $this;
    }

    /**
     * Lit le prenom
     *
     * @return string
     */
    public function getPrenom() : string
    {
    return $this->prenom;
    }

    /**
     * ecrit dans le "prenom"
     *
     * @param string $prenom
     * @return self
     */
    public function setPrenom(string $prenom) : self
    {
    $this->prenom = $prenom;

    return $this;
    }

    /**
     * Lit le email
     *
     * @return string
     */
    public function getEmail() : string
    {
    return $this->email;
    }

    /**
     * ecrit dans le "email"
     *
     * @param string $email
     * @return self
     */
    public function setEmail(string $email) : self
    {
    $this->email = $email;

    return $this;
    }

    /**
     * Lit le telephone
     *
     * @return string
     */
    public function getTelephone() : string
    {
    return $this->telephone;
    }

    /**
     * ecrit dans le "email"
     *
     * @param string $email
     * @return self
     */
    public function setTelephone(string $telephone) : self
    {
    $this->telephone = $telephone;

    return $this;
    }

    /**
     * Lit le code postal
     *
     * @return string
     */
    public function getCodePostal() : string
    {
    return $this->codePostal;
    }

    /**
     * ecrit dans le "email"
     *
     * @param string $email
     * @return self
     */
    public function setCodePostal(string $codePostal) : self
    {
    $this->codePostal = $codePostal;

    return $this;
    }
    /**
     * Lit l'Adresse
     *
     * @return string
     */
    public function getAdresse() : string
    {
    return $this->Adresse;
    }

    /**
     * ecrit dans le "Adresse"
     *
     * @param string $Adresse
     * @return self
     */
    public function setAdresse(string $adresse) : self
    {
    $this->Adresse = $adresse;

    return $this;
    }

    /**
     * Lit la ville
     *
     * @return string
     */
    public function getVille() : string
    {
    return $this->Ville;
    }

    /**
     * ecrit dans la "ville"
     *
     * @param string $ville
     * @return self
     */
    public function setVille(string $ville) : self
    {
    $this->Ville = $ville;

    return $this;
    }

    /**
     * Retourne l'ensemble des continents
     *
     * @return Candidature[] tableau d'objet candidature
     */
    public static function findAll() :array
    {
        $req=MonPdo::getInstance()->prepare("Select * from candidatures");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'candidature');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }

    /**
     * Trouve un candidature par son idCandidature
     *
     * @param integer $id numéro du candidature
     * @return Candidature objet candidature trouvé
     */
    public static function findById(int $id) :Candidature
    {
        $req=MonPdo::getInstance()->prepare("Select * from candidature where idCandidature= :id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Candidature');
        $req->bindParam(':id', $id);
        $req->execute();
        $leResultats=$req->fetch();
        return $leResultats;
    }

    /**
     * Permet d'ajouter une candidature
     *
     * @param Candidature $candidature candidature à ajouter
     * @return integer resultat (1 si l'opération a réussi, 0 sinon)
     */
    public static function add(Candidature $candidature) :int
    {
        $req=MonPdo::getInstance()->prepare("insert into candidature(`nom`, `prenom`, `email`, `telephone`, `adresse`, `ville`, `codePostal`) values(:nom, :prenom, :email, :telephone, :adresse, :ville, :codePostal)");
        $nom=$candidature->getNom();
        $prenom=$candidature->getPrenom();
        $email=$candidature->getEmail();
        $telephone=$candidature->getTelephone();
        $adresse=$candidature->getAdresse();
        $ville=$candidature->getVille();
        $codePostal=$candidature->getCodePostal();
        //affectation des valeurs aux paramètres
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':email', $email);
        $req->bindParam(':telephone', $telephone);
        $req->bindParam(':adresse', $adresse);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':codePostal', $codePostal);
        $nb=$req->execute();
        return $nb;  
    }

    /**
     * permet de modifier un candidature
     *
     * @param Candidature $candidature candidature à modifier
     * @return integer resultat (1 si l'opération a réussi, 0 sinon)
     */
    public static function update(Candidature $candidature) :int
    {
        $req=MonPdo::getInstance()->prepare("update candidature set nom= :nom where idCandidature= :id");
        $idCandidature=$candidature->getIdCandidature();
        $nom=$candidature->getNom();
        $req->bindParam(':id', $idCandidature);
        $req->bindParam(':nom', $nom);
        $nb=$req->execute();
        return $nb;  
    }

    /**
     * Permet de supprimer un candidature
     *
     * @param Candidature $candidature
     * @return integer
     */
    public static function delete(Candidature $candidature) :int
    {
        $req=MonPdo::getInstance()->prepare("delete from candidature where idCandidature= :id");
        $idCandidature=$candidature->getIdCandidature();
        $req->bindParam(':id', $idCandidature);
        $nb=$req->execute();
        return $nb; 
    }


    /**
     * Set numero du candidature
     *
     * @param  int  $idCandidature  numero du candidature
     *
     * @return  self
     */ 
    public function setNum(int $idCandidature) :self
    {
        $this->idCandidature = $idCandidature;

        return $this;
    }
}