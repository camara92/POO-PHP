<?php



class User
{

    public $firstname, $lastname, $email, $password;

    function __construct($firstname, $lastname, $email, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    private  function direHello()
    {
        echo "<p> $this->firstname |  $this->lastname </p>";
    }
    function hello()
    {
        echo "<p>$this->firstname </p>";
    }
}
//-------Encapsulation - capsile -- niveau visibilité -getter setter 
//niveau visibilité --> public private proteedt 
//private et protected que dnas la class definie 

$daouda = new User("Daouda", "CAMARA", "daoudacamara92@gmail.com", "atlas326832");
$michel = new User("Michel", "Dupont", "Michel121214@gmail.com", "pwd");
$daouda->hello();
//$michel->direHello();
//echo $michel->email;
echo $daouda->firstname;
echo $daouda->email;
