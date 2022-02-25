<?php
class Modele
{

    protected string $nom = '';
    protected string $dateajout = '';
    protected  ?int $quantite = null;
    protected   ?int $nb = null; //nb modèles crées .
    protected  ?bool $estportable = null;


    public function isvalid(): bool
    {
        return false;
    }


    /**
     * Get the value of estportable
     */
    public function getEstportable()
    {
        return $this->estportable;
    }

    /**
     * Set the value of estportable
     */
    public function setEstportable($estportable): self
    {
        $this->estportable = $estportable;

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
     * Get the value of dateajout
     *
     * @return string
     */
    public function getDateajout(): string
    {
        return $this->dateajout;
    }

    /**
     * Set the value of dateajout
     *
     * @param string $dateajout
     *
     * @return self
     */
    public function setDateajout(string $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
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
}
