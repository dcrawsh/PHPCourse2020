<?php

// 1. Declaring numbers
 $a = 5;
 $b = 4;
 $c = 1.2;

 
// 2. Arithmetic operations


// 4. Assignment with math operators

$a += $a + $b; echo $a . " this is a" . "<br>";

//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// 5. Increment operator
echo $a++ . " ";
echo ++$a . "<br>";

// 6. Decrement operator


// 7. Number checking functions
echo is_float($c). "<br>";


// 7. Conversion
echo $strNumber = '12.34'. "<br>";
echo $number = (int)$strNumber;
echo var_dump($number) . "<br>";

// 9. Number functions


// 10. Formatting numbers

$number = 123456789.12345;
echo number_format($number, 2, 'apples' , 'bananas') . "<br>";

echo rand(1,10) . "dicks" . "<br>";

define("Greeting","Hello World");

echo Greeting;

// https://www.php.net/manual/en/ref.math.php

?>