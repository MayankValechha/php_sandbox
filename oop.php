<?php

    //Creating a Class
    class Person {
        //Class can have Properties/Variables and Methods.
        // public, private and protected are access specifiers.

        // Private : can't be access outside of class
        // Public : can be access outside of class
        // Protected : can only be accessible in inherited class
    
        public $name;
        public $email;

        public static $ageLimit = 25;
        //Creating GETTERS and SETTER for Getting and Setting values.  
        // $this refers to the current class property

        public function getName(){
            return $this->name;
        } 
        
        public function getEmail(){
            return $this->email;
        } 
        
        //Creating a CONSTRUCTOR
        public function __construct($name, $email) {

            // __CLASS__ : gives us name of class
            echo __CLASS__.' created!'.'<br>';
            $this->name = $name;
            $this->email = $email;
        }   

        //Creating a DESTRUCTOR
        public function __destruct(){
            echo __CLASS__.' destroyed!';
        } 

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    // Satic Method and Props are called using classname only.

    echo Person::$ageLimit.'<br>';
    echo Person::getAgeLimit().'<br>';

    //INHERITANCE

    class Customer extends Person {
        
        private $balance;

        public function __construct($name, $email, $balance){
            parent:: __construct($name, $email);
            $this->balance = $balance;
            echo __CLASS__.' is Created.'.'<br>';
        }

        public function getBalance(){
            return $this -> balance;
        }
        
    }

    $customer1 = new Customer('Mayank Valechha', 'Mayank@helloworld.com', 5000);
    echo $customer1->getBalance().'<br>';

    //Creating a Object or Instanciating 
    //Name of Object = new NameOfClass

    /*    
    $person1 = new Person('Mayank Valechha','mayank@icloud.com');
    echo $person1->getName().'<br>';
    echo $person1->getEmail().'<br>';
    */
    //Setting value.

    /*     
    $person1 -> setName('Mayank Valechha!');
    echo $person1 -> getName();
    */

?>