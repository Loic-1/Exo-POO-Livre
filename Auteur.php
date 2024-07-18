<?php

class Auteur
{
    private string $_nom;

    private array $_livres;

    private string $_dateNaissance; //forme ("YYYY-MM-DD")

    public function __construct(string $nom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_dateNaissance = $dateNaissance;
        $this->_livres = []; //array
    }

    public function ajouterLivre(Livre $livre)
    {
        array_push($this->_livres, $livre);
    }

    public function âge()//https://www.php.net/manual/en/datetime.formats.php#datetime.formats.date
    {
        $aujourdhui = new DateTime();
        $anniversaire = new DateTime($this->_dateNaissance);
        $âge = $aujourdhui->diff($anniversaire)->y; //echo $date1->diff($date2)->y;
        echo "$this->_nom a $âge ans.";
    }

    public function afficherBibliographie()
    {
        echo "Bibliographie de " . $this->_nom . ": <br>";
        foreach ($this->_livres as $livre) {
            echo $livre;
        }
    }

    public function __toString() : string
    {
        return $this->_nom;
    }
}
