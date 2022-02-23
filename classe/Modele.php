<?php
class Modele
{

    public string $nom;
    public string $dateajout;
    public  $quantite;
    public  $nb; //nb modèles crées .
    public $estportable;


    public function __construct($nom, $dateajout, $quantite, $nb, $estportable)
    {
        $this->nom = $nom;
        $this->dateajout = $dateajout;
        $this->quantite = $quantite;
        $this->nb = $nb;
        $this->estportable = $estportable;
    }

    // isSubmitted(){};

    // isvalid(){};

}
