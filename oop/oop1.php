<?php

$con = mysqli_connect("localhost", "runkarui_VOTEAB", "HAALETUS.AB", "runkarui_vote");

if(!$con)
{
    echo 'ei ole ühendatud serveriga';
}

if(!mysqli_select_db($con, 'runkarui_vote')){
    echo 'viga andmabaasiga ühendamisel';
}
// Declare the class
class Car {

    // properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // method that says hello
    public function hello()
    {
        return "beep";
    }
}

// Create an instance
$bmw = new Car ();
$mercedes = new Car ();

// Get the values
echo $bmw -> color; // beige
echo "<br />";
echo $mercedes -> color; // beige
echo "<hr />";

// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

// Get the values again
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";

// Use the methods to get a beep
echo $bmw -> hello(); // beep
echo "<br />";
echo $mercedes -> hello(); // beep