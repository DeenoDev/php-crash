<?php


/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //Properties are variables / attributes that belong to a class
    public $name;
    public $email;
    public $password;
}

//Instantiate a user object

$user1 = new User();

var_dump($user1);