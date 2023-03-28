<?php
/*
 * ARRAYS - variable that holds multiple values
 *  - Indexed
 *  - Associative
 *  - Multi-dimensional
 */

$people = array('Fouche', 'Emily', 'Olivia');
$ids = [5, 60, 77];
echo $people[1];
echo '<br>';
echo $ids[0];
$ids[] = 100; // add to array
echo '<br>';
echo $ids[3];
echo '<br>';
echo count($ids);
echo '<br>';
echo print_r($people, true);
echo '<br>';
var_dump($people);

// Associative
$ages = [ 'Fouche' => 51, 'Emily' => 13, 'Olivia' => 11];
echo '<br>';
echo $ages['Olivia'];
$ages['Marien'] = 44;
echo '<br>';
echo $ages['Marien'];
echo '<br>';
print_r($ages);
echo '<br>';
var_dump($ages);

// Multi-dimensional
$cars = [
    ['Honda', 20, 10],
    ['Toyota', 35, 11],
    ['Ford', 7, 1]
];
echo '<br>';
echo 'Make: ' . $cars[1][0] . ', sold:'. $cars[1][2];
echo '<br>';
var_dump($cars);




