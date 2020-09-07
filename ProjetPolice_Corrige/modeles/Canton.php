<?php
class Cantons {
    
    /**
     * numero du continent
     *
     * @var int
     */
    private $idCanton;

    /**
     * Libelle du continent
     *
     * @var string
     */
    private $nomCanton;

    /**
     * Get the value of idCanton
     */ 
    public function getIdCanton()
    {
    return $this->idCanton;
    }

    /**
     * Lit le nomCanton
     *
     * @return string
     */
    public function getNomCanton() : string
    {
    return $this->nomCanton;
    }

    /**
     * ecrit dans le libellé
     *
     * @param string $nomCanton
     * @return self
     */
    public function setLibelle(string $nomCanton) : self
    {
    $this->nomCanton = $nomCanton;

    return $this;
    }

    /**
     * Retourne l'ensemble des continents
     *
     * @return Canton[] tableau d'objet continent
     */
    public static function findAll() :array
    {
        $req=MonPdo::getInstance()->prepare("SELECT * FROM continent");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Canton');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }
}
?>