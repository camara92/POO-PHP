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
    function hello($pass)
    {
        if ($pass == 1234) {
            $this->direHello;
        } else {
            echo "accès non autorisé";
        }
        echo "<p>$this->firstname </p>";
    }
    public function getFirstName()
    {
        return $this->firstname;
    }
    //setter exemple 
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    
 

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
//-------Encapsulation - capsile -- niveau visibilité -getter setter 
//niveau visibilité --> public private proteedt 
//private et protected que dnas la class definie 

$daouda = new User("Daouda", "CAMARA", "daoudacamara92@gmail.com", "atlas326832");
$michel = new User("Michel", "Dupont", "Michel121214@gmail.com", "pwd");
//$daouda->hello(1415);

//$michel->direHello();
//echo $michel->email;
// echo $daouda->firstname;
// echo $daouda->email;
//echo "<br>";

echo $michel->getFirstName();
echo '<br>'; 
echo $michel->getEmail(); 
//echo $michel->setFirstName("Michellinbe "); 
//echo $daouda->getFirstName();
