<?php
declare(strict_types=1); // see comment below
/*
 * FUNCTIONS - Block of code that can be repeatedly called
 *
 */

function simpleFunction(): void
{
    echo 'Hello World!<br>';
}

// types are optional, php while try to coerce
// except if you use strict_types;
function sayHello(String $name): void
{
    echo 'Hello ' . $name . '!<br>';
    echo "Hello again $name !<br>";
}

function sayWithDefault(String $name = 'World'): void
{
    echo 'Hello ' . $name . '!<br>';
    echo "Hello again $name !<br>";
}

function addNumbers(int $a, int $b) : int
{
    return  $a + $b;
}

// Normally functions are by value, can do by reference
function addFive(int $num): void
{
    $num += 5;
}
function addFiveByRef(int &$num): void
{
    $num += 5;
}


simpleFunction();
sayHello('Fouche');
sayWithDefault();
sayWithDefault('Olivia');
//sayHello(1); // will not work
echo addNumbers(5, 6) . '<br>';
$myNum = 10;
addFive($myNum);
echo $myNum . '<br>';
addFiveByRef($myNum);
echo $myNum . '<br>';

