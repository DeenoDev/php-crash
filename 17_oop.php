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

    //Method is a function that belongs to a class.
    function set_name($name){
      $this->name = $name;
    }

    function  get_name(){
      return $this->name;
    }
}

//Instantiate a user object

$user1 = new User();
$user2 = new User();

$user1->set_name('Deyano');
$user2->set_name('Rachelle');

echo $user1->get_name();
echo $user2->get_name();
