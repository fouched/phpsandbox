<?php
/*
 *
 */

echo date('d') . '<br>';
echo date('m') . '<br>';
echo date('Y-m-d') . '<br>';
echo date('H:i:s') . '<br>';

// hour, min, second, month, day, year
$timestamp = mktime(6, 45, 0, 11, 2, 1971);

echo $timestamp . '<br>';
echo date('Y-m-d h:i:s', $timestamp) . '<br>';

$timestamp_2 = strtotime('6am November 2 1971');
echo date('Y-m-d h:i:s', $timestamp_2) . '<br>';

$timestamp_2 = strtotime('November 2 1971 6am');
echo date('Y-m-d H:i:s', $timestamp_2) . '<br>';

$timestamp_2 = strtotime('19:35 November 2 1971');
echo date('Y-m-d H:i:s', $timestamp_2) . '<br>';

$timestamp_2 = strtotime('next sunday');
echo date('Y-m-d H:i:s', $timestamp_2) . '<br>';

$timestamp_2 = strtotime('+4 days');
echo date('Y-m-d H:i:s', $timestamp_2) . '<br>';