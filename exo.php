<?php

    class User {
        public $firtname;
        public $lastname;
        public $adresse; 
        public $age; 
        public $nombre; 

        function Informations($message){
            echo "<p>  $message </p>"; 
        }
    }

    $userInfo = new User(); 
    $userInfo->firstname ="Daouda"; 
    $userInfo->lastname ="CAMARA"; 
    $userInfo->age= 25; 
    $userInfo->adresse ="22 Route du Rhin 67400 Illkirch Graffenstadenn, France"; 

    // for($nombre=0; $nombre<=10; $nombre++){
    //     $userInfo ->Informations("$userInfo->nombre++");
    // }
    $userInfo->Informations("$userInfo->firstname");
    $userInfo->Informations("$userInfo->lastname");
    $userInfo ->Informations("$userInfo->adresse");
    $userInfo ->Informations("$userInfo->age");


class Facture {
    public $taux =10; 
    public $client;
    public $montant; 
    function afficherTaux(){
        echo "taux ".$this->taux ."% Client : $this->client" ;
    
    }
    
}
$fev= new Facture();
    $fev->client=  "Webforce3"; 
    $fev->taux =25;
    $fev->afficherTaux(); 
    var_dump($fev); 

    //
    $mai= new Facture();
    $mai->client=  "GoogpleAPPs"; 
    $mai->afficherTaux(); 
    var_dump($mai); 

class Viennoiserie {
    public $name;   
    public $chocolat;
    
    function tQuoi($type) {
       if($type){
       echo"T'es une bonne chocolaTINE ! <br>";
        }else{
        echo"t'es un pain au chocolat ... beurk...";
    }
    }
}

$chocolatine = new Viennoiserie();
$chocolatine->name="chocolatine";
$chocolatine->chocolat=true;

$pain = new Viennoiserie();
$pain->name="pain";
$pain->chocolat=false;

$chocolatine->tQuoi($chocolatine->chocolat);
$pain->tQuoi($pain->chocolat);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <table class="border bg-white   text-dark ">
        <tr class="text-dark bg-info text-center border">
            <th>Nom </th>
            <th>Prénom </th>
            <th>Adresse</th>
            <th>Age</th>
        </tr>
        <tr>
            <td class="border-danger">
                <?=  $userInfo->Informations("$userInfo->firstname"); ?>
            </td>
            <td class="border-danger">
                <?=  $userInfo->Informations("$userInfo->lastname"); ?>
            </td>
            <td class="border-danger">
                <?=  $userInfo->Informations("$userInfo->adresse"); ?>
            </td>
            <td class="border-danger">
                <?=  $userInfo->Informations("$userInfo->age"); ?>
            </td>
        </tr>
    </table>
    <!-- <p><?= $userInfo ->Informations("$userInfo->nombre"); ?></p> -->
</body>
</html>