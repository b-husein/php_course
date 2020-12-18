<?php

// What is a variable

# Container that stores some values; 

// Variable types

/*
1. String
2. Integer
3. Float
4. Boolean
5. Null
6. Array
7. Object
8. Resource
*/

// Declare variables

$name = 'Husein';
$age = 29; 
$isMale = true;
$height = 1.90; 
$salary = null;

// Print the variables. Explain what is concatenation

/* 
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>'; // 1- true; 0 - false;
echo $height . '<br>'; 
echo $salary;
*/

// Print types of the variables

echo gettype($name) . '<br>'; // string
echo gettype($age) . '<br>';  // integer
echo gettype($isMale) . '<br>'; // boolean
echo gettype($height) . '<br>'; // double
echo gettype($salary) . '<br>'; // null

// Print the whole variable
// var_dump prints out all the info we need 
// about some variable;
var_dump($name, $age, $isMale, $salary);

// Change the value of the variable
$name = false; // previously it was string

// Print type of the variable

echo gettype($name).'<br>';

// Variable checking functions

is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); //true

// Check if variable is defined
isset($name); // true
isset($address); // false

// Constants
// have to use define to define a constant

define('PI', 3.14); // constant name and constant value;
echo PI; // syntax to access constants;

// Using PHP built-in constants

echo SORT_ASC . '<br>';
echo PHP_INT_MAX .'<br>'; // print max. number
