<?php
class Cart
{
    // public int $quantity ;
    // public float $totalPrice; //chiffre à virgule

    private int $quantity; //on peut avoir accès selon la fonction public du getTotalPrice 
    private float $totalPrice; //chiffre à virgule 
    public function __construct(int $quantity, float $totalPrice)
    {
        //this fait reference à la classe 
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
        //return $this->quantity; 
    }
    public function setTotalPrice(float $price): void
    {
        $this->totalPrice = $price;
    }
    public function discount(float $discount): void
    {
        $this->totalPrice -= $this->totalPrice * ($discount / 100);
    }
}
