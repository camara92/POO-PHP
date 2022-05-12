<?php
class Product
{
    public $name;
    public $description;
    public $quantity;
    public $created_at;



    function  getProductOne()
    {
        echo "Nom : " . $this->name = "Stylo" . "<br> Description : " .
            $this->description = "Produit de qualité première produit par la société BIC depuis les années 1950" . "<br> Quantité  :" .
            $this->quantity = 250 . "<br> Date de créatiion  : " .
            $this->created_at = "15-05-2022";
    }

    function PrixOne($prix)
    {

        //make condition to verify if price is sup to quantity (example)
        if ($prix > $this->quantity) {
            echo "OK Cool";
        } else {
            echo "On est tous bon alors !!!";
        }
    }
}
$robe = new Product();
$chemise = new Product();
$pantalon = new Product();
$chemise->name = "levis";
$chemise->description = "Hah, on l'aime ";
$chemise->quantity = 500;
$chemise->created_at = "25 Avril 2050";

var_dump($chemise);
echo "Daouda <br>";
var_dump($chemise->name);
echo ($chemise->name);
echo "<br>";
var_dump($robe->getProductOne());

$pantalon->PrixOne(500);
