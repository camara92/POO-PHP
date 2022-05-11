<?php

    class User {
        public $name;
        public $age; 

        function tchater($message){
            echo "<p> - $message </p>"; 
        }
    }

    $michel = new User(); 
    $michel->name ="Michel"; 
    $michel->age= 49; 
    $michel ->tchater("$michel->name : Salut salut ! ");
    $text = $michel ->tchater("$michel->name : Salut salut ! ");
    $michel ->tchater("$michel->age : Salut salut ! ");

    // var_dump($text); on a le retour donc uniuement du string plus d'objet ici 
    echo $text; ///on peut afficher/PDO et le fetchall renvoie et convertit aussi 
?>
