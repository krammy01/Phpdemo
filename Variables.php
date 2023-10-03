<?php

// Integers
$int_var = 12345;
print "$int_var";
$another_int = -12345 + 12345;
print "$another_int";
echo "<br>";

// Doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print "($many + $many_2 = $few)";
echo "<br>";

// Boolean
$randomNumber = mt_rand(0, 1); // Generates a random integer either 0 or 1

$isTrue = (bool) $randomNumber; // Converts the integer into a boolean

if ($isTrue) {
    echo "The boolean value is true";
} else {
    echo "The boolean value is false";
}

// Strings
$string1 = "CIT17";
$string2 = "Class";
$string3 = "Welcome to";
echo "$string3 $string1 $string2 <br>";

// Local Variables
$x = "Addition";
function assignx() {
    global $x; // You need to use the global keyword to access the global variable
    $x = "Division";
    print "\$x inside function is $x. <br> ";
}
assignx();
print "\$x outside of function is $x.<br> ";

// Function Parameters
function addition($value) {
    $value = $value + 20;
    return $value;
}
$retval = addition(15);
print "Return value is $retval\n <br>";

// Global Variables
$a = 10;
$b = 20;

function Sum() {
    global $a, $b;
    $b = $a + $b;
}

Sum();
echo $b;
echo "<br>";

// Static Variables
function static_var() {
    // Static variable
    static $num = 5;
    static $sum = 2; // Initialize the $sum variable
    $num++;

    echo $num, "\n";
    echo $sum, "\n";
}
function keep_track() {
 STATIC $count = 0;
 $count++;
 print $count;
 print "";
}
keep_track();
keep_track();
keep_track();

