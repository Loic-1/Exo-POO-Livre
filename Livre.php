<?php

require 'Auteur.php';//pour appeler ajouterLivre()

class Livre
{
    private $_titre;

    private $_nbPages;

    private $_parution;

    private $_prix;

    private $_auteur;

    public function __construct($titre, $nbPages, $parution, $prix, $auteur)
    {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_parution = $parution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);//update _livres de $auteur
    }

    public function __toString()
    {
                return "$this->_titre ($this->_parution) : $this->_nbPages pages / $this->_prix €<br>";
    }
}