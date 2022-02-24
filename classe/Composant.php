<?php



class Composant
{

    protected string $nom;
    protected string $marque;
    protected string $categorie;
    protected  $quantite;
    protected  $prix;
    protected  $nb; //nb modèles crées avec cette pièce.
    protected $archive;


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

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of categorie
     *
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param string $categorie
     *
     * @return self
     */
    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     */
    public function setQuantite($quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of nb
     */
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Set the value of nb
     */
    public function setNb($nb): self
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get the value of archive
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set the value of archive
     */
    public function setArchive($archive): self
    {
        $this->archive = $archive;

        return $this;
    }
}
