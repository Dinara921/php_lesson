<?php 
 
// var a  
// const a 
// $a = "PHP"; 
// echo "Hello ".$a; 
// echo "\n"; 
// echo 'next'; 
// echo "\n"; 
 
// $first = 5; 
// $second = 2; 
// $res = $first / $second; 
// echo "Result = $res"; 
// echo "\n"; 
 
// if($first === 5) 
// {  
//      echo "Это пять"; 
// } 
// else 
// { 
//       echo "Это не пять"; 
//       die; 
// } 
 
// echo "\n"; 
// echo "Выполнилось"; 
// echo "\n"; 
 
// $array = [1,3,5,7]; 
// $array =array(1,2,3,5); 
// echo $array[10]; 
// foreach($array as $i) 
// { 
//     if($i==3) 
//     { 
//         continue; 
//     } 
//     echo $i; 
//     echo "\n"; 
//} 
// try 
// { 
//     if ($denominator == 0) 
//         { 
//             throw new DivideByZeroException(); 
//         } 
//         else 
//         { 
//             echo 10 / $denominator; 
//         }  
// }  
// catch(\Throwable $ex) 
// { 
//      echo "Divide by zero exception!"; 
// } 
 
include "calculate.php"; 
$a = htmlspecialchars( $_GET['a']); 
$b = htmlspecialchars( $_GET['b']); 
$s = new Calculate ($a, $b); 
echo $s->Plus() . "<br>"; 
echo $s->Minus() . "<br>"; 
echo $s->Multiply() . "<br>"; 
echo $s->Divide() . "<br>"; 
echo $s->Factorial() . "<br>"; 
echo $s->Fibonacci() . "<br>";
