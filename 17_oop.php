<?php


/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //Properties are variables / attributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //A constructor is a function or method that runs when an object is created.
    public function __construct($name, $email, $password){
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }

    //Method is a function that belongs to a class.
    function set_name($name){
      $this->name = $name;
    }

    function  get_name(){
      return $this->name;
    }
}

//Instantiate a user object

$user1 = new User('Deyano', 'deyano@gmail.com', '123456');
$user2 = new User('Rachelle', 'rachelle@gmail.com', '456789');

echo $user1->email;
echo $user2->name;
