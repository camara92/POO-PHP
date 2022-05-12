<?php
class Verre
{
    public $nom;
    public $materiaux;
    public $contenu;
    function __construct($nom, $materiaux, $contenu)
    {

        //se déclenche sur l'instanciain de l'objet 
        //echo "<p> Création de l'objet <p>"; 

        $this->nom = $nom;
        $this->materiaux = $materiaux;
        $this->contenu = $contenu;
    }
}
$gobelet = new Verre("Gobelet", "Plastique", "Eau");
$mug = new Verre("Mug", "Métal", "Slug");
class Voiture
{
    public $modele;
    public $couleur;
    function __construct($modele, $couleur)
    {
        $this->modele = $modele;
        $this->couleur = $couleur;
        echo "Une $this->modele $this->couleur a été créée";
    }
}
$pagani = new Voiture("Pagani Zodnda", "Rouge"); 

// $mug->nom ="Mug"; 
// $mug->materiaux ="Métal"; 
// $mug->contenu = "Lait"; 
// echo $gobelet;
