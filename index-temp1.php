<?php
    header('Content-type: text/plain');
    // echo nl2br("Welcome\r\n This is my HTML document", false);
    echo"Hello world\n";
?>
<!-- Variable in PHP -->
<?php
$a = 10;
$b = 3;
$Sting = " Hello Litweb";
echo "\n".$a.$Sting;
$add = $a+$b;
$sub = $a-$b;
$mul = $a*$b;
$div = $a/$b;
$mod = $a%$b;
$increment = $a++;
$decrement = --$b;
echo "\na = ".$a."  b = ".$b;
echo "\nadd\t:\t".$add;
echo "\nsub\t:\t".$sub;
echo "\nmul\t:\t".$mul;   
echo "\ndiv\t:\t".$div;
echo "\nmod\t:\t".$mod;
echo "\nincrement\t:\t".$increment;
echo "\ndecrement\t:\t".$decrement;
// post decrement
$e = 5;
echo "\nBefore Decrement : ".$e;
$e--;
echo "\nAfter Decrement : ".$e;
echo "\n";
$x = 10;
$y = 5;
var_dump($x == $y);
var_dump($x != $y);
var_dump($x > $y);
var_dump($x < $y);
var_dump($x >= $y);
var_dump($x <= $y);

echo "\n";

// Conditional Operator
$var1  = 15;
$var2  = 18;
var_dump($var1 && $var2);
var_dump($var1 || $var2);
var_dump(!$var1);

$_x = 15;
$_x > 20 ? $flag ="Yes": $flag = "No";
var_dump($flag);
$_x = 15;
$_x < 20 ? $flag ="Yes": $flag = "No";
var_dump($flag);

// Assignment Operator

$g = 5; 
$f = 3;
$i = 5;
$j = 3;
$k = 5;
$l = 3;
$m = 5;
$n = 3;
$equil_1 = $g-=$f;
$equil_2 = $i+=$j;
$equil_3 = $k*=$l;
$equil_4 = $m/=$n;

echo "\n eq : ".$equil_1."\n eq : ".$equil_2."\n eq : ".$equil_3."\n eq : ".$equil_4;
echo "\n";
$age1 = 10;
$age2 = 18;

if ($age1 >= 18) {
    echo "\nYes, you can vote.";
    }
else{
    echo "\nNo, you can vote.";
}
if ($age2 >= 18) {
    echo "\nYes, you can vote.";
    }
else{
    echo "\nNo, you can vote.";
}
$age3 = 9;
$age4 = 22;
if ($age3 >= 18)
    echo "\nYes, you can vote.";
else
    echo "\nNo, you can vote.";
if ($age4 >= 18)
    echo "\nYes, you can vote.";
else
    echo "\nNo, you can vote.";

$age = 17;
if ($age >= 18) {
    echo "\nYes, you can vote.";
}elseif ($age == 17) {
    echo "\nYou need one more year !";
}
else {
    echo "\nNo, you can vote.";
}
// nested if 
$age6 = 70;
if ($age>=18){
    if($age<66){
        echo "\nYes, you can vote!";
    }else{
        echo "\nYes cannot vote anymore!";
    }
}else{
    echo "\nYou cannot vote!";
}
?>