<?php

class Auteur
{
    private $_nom;

    private $_livres;

    public function __construct($nom)
    {
        $this->_nom = $nom;
        $this->_livres = []; //array
    }

    public function ajouterLivre($livre)
    {
        array_push($this->_livres, $livre);
    }

    public function afficherBibliographie()
    {
        echo "Bibliographie de ".$this->_nom.": <br>";
        foreach ($this->_livres as $livre) {
            echo $livre;
        }
    }

    public function __toString()
    {
        return $this->_nom;
    }
}