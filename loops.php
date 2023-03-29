<?php
/*
LOOPS - Execute code a set number of times
    - For
    - While
    - Do..While
    - Foreach

*/

for($i = 0; $i < 10; $i++)
{
    echo 'for loop ' . $i . '<br>';
}

$i = 0;
while ($i < 10)
{
    echo 'while loop ' . $i . '<br>';
    $i++;
}

// always runs once
$i = 0;
do
{
    echo 'do loop ' . $i . '<br>';
    $i++;
} while ($i < 10);

$people = ['Fouche', 'Emily', 'Oliva'];
foreach ($people as $person)
{
    echo $person . '<br>';
}

$people = [
    'Fouche' => 'fouche@limehouse.co.za',
    'Emily' => 'emily@limehouse.co.za',
    'Oliva' => 'olivia@limehouse.co.za'
];

foreach ($people as $person)
{
    echo $person . '<br>';
}
foreach ($people as $key => $value)
{
    echo $key . ': '. $value . '<br>';
}