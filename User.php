<?php

use User as GlobalUser;

class User
{
    public $name;
    public $age;
    public $avatar;


    function choixAvatar($choice)
    {
        $avatar = ["😜", "😎", "🤣", "❤️"];

        // return $choice; 
        return $this->avatar = $avatar[$choice];
    }

    function tchater($message)
    {
        echo "<p> - $this->avatar | $this->name : $message </p>";
    }
    function viellir($nbrAnnees){
        if(($nbrAnnees+$this->age)>105){
            echo 
        }
    }
}
// creation de data 
$michel = new User();
$michel->name = "Michoux";
$michel->age = 77;
$michel->choixAvatar(2);
//echo $michel->avatar;
echo $michel->tchater("Il est pas si difficile quand c'est la correction ! ");

//une deuxieme personne 
$daouda = new User();
$daouda->name ="Daouda";
$daouda->age = 25;
$daouda->choixAvatar(1);
//echo $daouda->avatar;
echo $daouda->tchater("Belob quand ça déplaise : facile game ! ");


