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
     * Permet d'ajouter un candidature
     *
     * @param Candidature $candidature candidature à ajouter
     * @return integer resultat (1 si l'opération a réussi, 0 sinon)
     */
    public static function add(Candidature $candidature) :int
    {
        $req=MonPdo::getInstance()->prepare("insert into candidature(nom) values(:nom)");
        $nom=$candidature->getNom();
        $req->bindParam(':nom', $nom);
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