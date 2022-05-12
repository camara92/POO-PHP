<?php
class Verre
{
    public $nom;
    public $materiaux;
    public $contenu;
    public $prix; 
    public $couleur; 
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
$gobelet->couleur ="Blanche"; 

//niveau 1 : construct utilisé pouir ocnstruuire un objet 
//niveau 2 : se déclenche à l'initialisation de l'objet 
// niveau 3 la methode magique __construct peut avoir un ou non des paramètres 

//niveau 4 : une class peut avoir un ou non un constructeur 

$mug = new Verre("Mug", "Métal", "Slug");
// class Voiture
// {
//     public $modele;
//     public $couleur;
//     function __construct($modele, $couleur)
//     {
//         $this->modele = $modele;
//         $this->couleur = $couleur;
//         echo "Une $this->modele $this->couleur a été créée";
//     }
// }
// $pagani = new Voiture("Pagani Zodnda", "Rouge"); 
// var_dump($gobelet); 

// $mug->nom ="Mug"; 
// $mug->materiaux ="Métal"; 
// $mug->contenu = "Lait"; 
// echo $gobelet;
