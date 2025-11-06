<?php
/* --- Object Oriented Programming -- */

/*
    From PHP5 onwards you can write PHP in either a procedural or 
    object oriented way. OOP consists of classes that can hold "properties" and 
    "methods". Objects can be created from classes.
*/

class User
{
    // Properties are attributes of the class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a special method that is called when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name; // $this refers to the current object
        $this->email = $email;
        $this->password = $password;
    }

    // Methods are functions that belong to the class
    function set_name($name)
    {
        $this->name = $name; // $this refers to the current object
    }

    function get_name()
    {
        return $this->name;
    }
}

// Instantiate a User object
$user1 = new User('Alex', 'alex@gmail.com', 'password123');
$user2 = new User('Brad', 'bdar@gmail.com', 'password3');



// echo $user1->get_name();
// echo $user2->get_name();

//  Inheritance allows a class to use the properties and methods of another class

class Eployee extends User
{
    public $title; // Add the property declaration

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password); // Call the parent constructor
        $this->title = $title; // Add a new property specific to Employee
    }
    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Eployee('John', 'Jo@gmail.com', 'password123', 'Manager');
echo $employee1->get_title();
