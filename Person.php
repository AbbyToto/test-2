<?php
class Personne{
    public $name;
    public $adresse;
    public $zipCode;
    public $phone; 
    public $email;
    public function getName(){
        return $this ->name;

    }
    public function setName($name){
         return $this -> name = $name;

    }

}
?>