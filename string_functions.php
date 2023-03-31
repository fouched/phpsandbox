<?php

$output = substr('Hello', 1);
echo $output . '<br>';

$output = substr('Hello', 1, 2);
echo $output . '<br>';

$output = substr('Hello', -2); // starts at end of string
echo $output . '<br>';

$output = strlen('Hello');
echo $output . '<br>';

$output = strpos('Hello World', 'o'); // first occurrence
echo $output . '<br>';

$output = strrpos('Hello World', 'o'); // last occurrence
echo $output . '<br>';

$text = '     Hello World    ';
var_dump($text);
echo '<br>';
$trimmed = trim($text);
var_dump($trimmed);
echo '<br>';

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);
echo $output . '<br>';