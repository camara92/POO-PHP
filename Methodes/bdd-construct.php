<?php
    
  
    // class Database {
//     public$bdd; 
//     public $myGames;
//     function __construct()
//     {
//         $this->bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", "");
        
//     }
//     function statusBDD(){

//         var_dump($this->bdd->getAttribute(PDO::ATTR_CONNECTION_STATUS));

//     }

//     function fetchAll(){

//         $req= $this->bdd->prepare("SELECT * FROM users "); 
//         $req->execute(); 

//         $this->myGames= $req->fetchAll(PDO::FETCH_ASSOC); 
//         $req->closeCursor(); 
        

//     }
//     function read(){

//        $this->fetchAll()
// ; 
// echo "<ul>"; 
// foreach($this->myGames as $game){
//     echo "<li>" .$game["firstname"] ."</li>";
// }
       
//     }
// }

// $db = new Database(); 
// $db->statusBDD(); 
// $db->read(); 
?>