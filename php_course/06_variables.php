<?php 

# Variable is container that can store a value; 

# In PHP we have 8 types of variables; actually the variable itself
// doesn't have a type, the value has a type. The variable type
// changes dynamically when we assign different value to it; 

# Types of data we have in PHP: 

/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

# Declare variables

// by using $ sign + name: $dog; 
// it cannot start with number
// it can start with underscore ( _ );
// let's declare some variables with different types:
    $name = 'Husein';
    $age = 29;
    $isMale = true; 
    $height = 1.88;
    $salary = null; 

# Print the variables. Explain what is concatenation; 

/* echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>'; */

# Print types of the variables

/* echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>'; */

# Print the whole variable (all the info about it)

var_dump($name);

# Change the value of the variable 

/*
$name = 28;
echo gettype($name);
*/

# Variable checking function

is_string($name); // false





?>