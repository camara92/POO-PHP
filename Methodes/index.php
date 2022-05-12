<?php
class Database {

    public $bdd; // Online une fois new Database();
    public $myGames; // full une fois $this->fetchAll()

    function __construct(){ 
        $this->bdd = new PDO('mysql:host=localhost;dbname=liste_jeux', "root", "");
    }

    function statusBDD(){
        var_dump($this->bdd->getAttribute(PDO::ATTR_CONNECTION_STATUS));
    }

    function fetchAll(){
        $req = $this->bdd->prepare("SELECT * FROM jeux_video ");
        $req->execute();
        $this->myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    }

    function read(){ 
        $this->fetchAll(); // pour récupérer les datas quand on veut les lire !
        echo "<ul>";
        foreach($this->myGames as $game){
            echo "<li>" .$game["nom"] . " </li>";
        }
        echo "</ul>";

    

    }

    //created 
    function create($nom,$possesseur,$console,$prix,$nbreJoueursMax,$commentaires){
        $req = "INSERT INTO jeux_video (nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES         
                         (:nom, 
                         :possesseur,
                         :console,
                         :prix,
                         :nbre_joueurs_max,
                         :commentaires)";
            //$bdd->prepare avant objet 
             $stmt = $this->bdd->prepare($req);
             $stmt->bindValue(":nom",$nom, PDO::PARAM_STR);
             $stmt->bindValue(":possesseur",$possesseur, PDO::PARAM_STR);
             $stmt->bindValue(":console",$console, PDO::PARAM_STR);
             $stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
             $stmt->bindValue(":nbre_joueurs_max",$nbreJoueursMax, PDO::PARAM_INT);
             $stmt->bindValue(":commentaires",$commentaires, PDO::PARAM_STR);
             $stmt->execute();
             $stmt->closeCursor();
    }


}

$db = new Database(); // grace à __construct connexion à la bdd

// var_dump($db->myGames); // TEST 1 rien à ce moment normal !

$db->statusBDD(); // comme on est connecté $bdd la props de l'objet $db contient notre Objet PDO et donc la connexion à la BDD 

$db->fetchAll(); // envoi une req avec l'ensemble de data

 //var_dump($db->myGames); // TEST 2 maintenant on à charger la props $mygames


echo $db->myGames[0]["nom"]; // Par exemple !

$db->create("Super Dinguerie Bros","Daouda ","PC",110,12,"Ce truc est une dinguerie");
 

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
