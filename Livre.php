<?php

require 'Auteur.php';//pour appeler ajouterLivre()

class Livre
{
    private string $_titre;

    private int $_nbPages;

    private string $_parution;

    private int $_prix;

    private Auteur $_auteur;

    public function __construct(string $titre, int $nbPages, string $parution, int $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_parution = $parution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);//update _livres de $auteur
    }

    public function __toString() : string
    {
                return "$this->_titre ($this->_parution) : $this->_nbPages pages / $this->_prix €<br>";
    }
}