<?php
    require_once ("./Class/Cart.php"); 

    $cart = new Cart(0,100); 
    $cart->discount(5); 
    // $cart->setTotalPrice(50); 
    var_dump($cart);

    var_dump($cart->getTotalPrice()); 
    // var_dump($cart->quantity); 
    // var_dump($cart->totalPrice);

    

?>