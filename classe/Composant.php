<?php



class Composant
{

    public string $nom;
    public string $marque;
    public string $categorie;
    public  $quantite;
    public  $prix;
    public  $nb; //nb modèles crées avec cette pièce.
    public $archive;


    public function __construct($nom, $marque, $categorie, $quantite, $prix, $nb, $archive)
    {
        $this->nom = $nom;
        $this->marque = $marque;
        $this->categorie = $categorie;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->nb = $nb;
        $this->archive = $archive;
    }
}
