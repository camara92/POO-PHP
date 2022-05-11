<?php
    class Car{
        public $name;
        public$marque;
        function infoCarName(){
            echo $this->name ."<br>". $this->marque; 
        }
    }
    //v1
    $voiture1 = new Car(); 
    $voiture1->name= "2CV"; 
    $voiture1->marque = "Citroen"; 

    echo $voiture1->name ."<br>". $voiture1->marque; 
    //v2
    $voiture2 = new Car(); 
    $voiture2->name= "2CCV5"; 
    $voiture2->marque = "Mercedes"; 
    echo $voiture2->name ."<br> ". $voiture2->marque; 
    //v3

    $voiture3 = new Car(); 
    $voiture3->name= "Berline"; 
    $voiture3->marque = "Peugeot 308"; 
    echo $voiture3->name ."<br> ". $voiture3->marque; 

    var_dump($voiture1); 
    var_dump($voiture2); 
    var_dump($voiture3); 

    class Produit{
        public $tva =1.20; 
        public $brut; 
        public $tvaNormal =1.20; 
        public $tvaOrmalSuisse = 1.07; 
        public $tvaIntermediare = 1.10; 
      
        public $tvaReduit =1.05; 
       

        function prixTTCNormal($pays){
            if($pays== "fr"){
return $this->brut* $this->tvaNormal;
            }else if($pays=="ch"){
                return $this->brut* $this->tvaNormalSuisse;
            }else{
                echo "Désole ....demande non trouvée"; 
            }
           

        }
        function prixTTCIntermediare(){
            return $this->brut* $this->tvaIntermediare; 
        }
        function resume($pays){
            echo "NOm de produit : ". $this->name; 
            if($pays == "fr"){
                echo $this->prixTTCNormal($pays); 
            }else{
                echo $this->prixTTCNormal("ch");
            }
        }

    }
        $product = new Produit();
        $product->brut = 1000; 

  














    ?>