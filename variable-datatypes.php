<?php

// string data type

$name = "Bro Code";
$food = "pizza";
$email = "fake@gmail.com";

// integer data type

$age = 28;
$users = 2;
$quantity = 5;

// Float data type

$gpa = 2.5;
$price = 4.5;

// Boolean data type

$employed = true;
$online = true;
$for_sale = true;

// null data type

$total = null;

echo "Hello {$name} <br> ";
echo "You Like: <i> {$food} </i> <br> ";
echo "Your email is: {$email} <br>";

echo "You are {$age} years old <br>";
echo "There are {$users} users in online <br>";
echo "You would like to buy {$quantity} {$food} items <br>";

echo "Your gpa is {$gpa}<br>";
echo "Your pizza is \${$price} <br>"; // escap function

echo "your online status: {$online} <br>";

echo "You have ordered {$quantity} x {$food}s <br> ";
$total = $quantity * $price;
echo "Your total is: \${$total}";


?>