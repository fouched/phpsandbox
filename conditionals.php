<?php
/*
 * CONDITIONALS
 *  ==
 *  === also compares data types
 *  >
 *  <
 *  =>
 *  <=
 *  !=
 *  !===
 *
 * LOGICAL OPERATORS
 *  && and
 *  || or
 *  xor - one has to be true but not both
 *
 * SWITCH - evaluates different conditions
 *
 */

$num = 5;

if ($num == 5)
{
    echo '5 passed<br>';
}

if ($num == '5')
{
    echo '5 passed<br>';
}

if ($num === '5')
{
    echo '5 passed<br>';
}
else
{
    echo '5 did not pass<br>';
}

if ($num === '5')
{
    echo '5 passed<br>';
}
elseif ($num == 6)
{
    echo '6 passed<br>';
}
else
{
    echo 'last resort<br>';
}

if ($num > 4 and $num < 10)
{
    echo "$num passed<br>";
}

if ($num > 4 && $num < 10)
{
    echo "$num passed<br>";
}

if ($num > 4 xor $num == 10)
{
    echo 'xor passed<br>';
}

$favColour = 'yellow';
switch ($favColour)
{
    case 'red':
        echo 'Red';
        break;
    case 'green':
        echo 'green';
        break;
    case 'blue':
        echo 'blue';
        break;
    default:
        echo 'something else';
}