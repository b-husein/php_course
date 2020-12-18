<?php

// Declaring numbers
// just like variables

    $a = 5; 
    $b = 4; 
    $c = 1.2; 

// Arithmetic operations

    echo $a + $b * $c . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>'; //remainder

// Assignment with math operators

// for example add a to b and save it to a: 

    // echo $a - $b . '<br>';
    // more simple way to use assignment operators:
    $a += $b;
    echo $a . '<br>'; 
    // we can basically do the similar operation
    // with subtraction, multiplication, division etc.

// Increment operator

// increment operator is ++ operator
// which means it will increase the value of 
// for example a by 1; 

    $a++; 

// other type of increment operator is

    ++$a;

// now the difference is, in the first example
// whenever we use $a++ with some other operation
// for example echo $a++ 
// the value of the a is printed and then the 
// value of the a is increased by one;

// in the second example; 
// if we write echo ++$a; the value of the a
// is increased by one and then it's printed.

// Decrement operator

    echo $a-- . '<br>';
    echo --$a . '<br>'; 

// Number checking functions
// couple of functions to check if 
// variable is a number; 

    is_float(1.25); //true; 
    is_double(1.25); //true; 
    is_int(5); //true
    is_numeric("4.3"); //true
    is_numeric("4abc.3"); //false


// Conversion

    //how to convert string value to float
    $strNumber = '12.34';
    $number = (float)$strNumber;
    var_dump($number);

    //to convert into integer, just replace
    // $number = (int)$strNumber;

    //other way is to use floatval
    $strNumber = '12.34';
    $number = floatval($strNumber);
    var_dump($number);

    //or intval
    $number = intval($strNumber);


// Number functions

    //https://www.php.net/manual-lookup.php?pattern=number+functions&scope=quickref

// Formatting numbers

    // https://www.php.net/manual/en/ref.math.php
