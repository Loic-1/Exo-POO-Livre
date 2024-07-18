<?php

class Auteur
{
    private $_nom;

    private $_livres;

    private $_dateNaissance; //forme ("YYYY-MM-DD")

    public function __construct($nom, $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_dateNaissance = $dateNaissance;
        $this->_livres = []; //array
    }

    public function ajouterLivre($livre)
    {
        array_push($this->_livres, $livre);
    }


    public function afficherBibliographie()
    {
        echo "Bibliographie de " . $this->_nom . ": <br>";
        foreach ($this->_livres as $livre) {
            echo $livre;
        }
    }

    public function __toString()
    {
        return $this->_nom;
    }
}
