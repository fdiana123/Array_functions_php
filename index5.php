<?php

//Array functions

$fruits = ['apple', 'orange' ,'pear'];

//1.
//echo count($fruits);

//2. Search array
//var_dump(in_array('apple', $fruits));

//3. add to array
$fruits[] = 'grape';
array_push($fruits, 'bluberry', 'strawberry');
array_unshift($fruits, 'mango');

// remove from the end
array_pop($fruits);
//remove from begining
array_shift($fruits);
// remove specific element
//unset($fruits[3]);

//print_r($fruits);

//Split
//$chunked_array = array_chunk($fruits, 2);
//print_r($chunked_array);

$arr1 = [1,2,3,];
$arr2 = [4,5,6,];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

//print_r($arr4);

// array combine
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

// combite- bouth rows together
$c = array_combine($a, $b);

//print_r($c);

// keys- only fisrt row
$keys = array_keys($c);
//print_r($keys);

//flipped - bouth rows

$flipped = array_flip($c);
//print_r($flipped);



$numbers = range(1, 20);

//print_r($numbers);
//$newNumbers = array_map();

$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

//print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) =>
$number <= 10);

//print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);




