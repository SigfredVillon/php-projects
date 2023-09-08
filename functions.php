<?php


function getSum($num1,$num2){

    return $num1 + $num2;
}

function getDifference($num1,$num2){

    return $num1 - $num2;
}

function getProduct($num1,$num2){

    return $num1 * $num2;
}

function getQuotient($num1,$num2){

    return $num1 / $num2;
}

function getRemainder($num1,$num2){

    return $num1 % $num2;
}

function dec($num){
   
    $display = "";
    if($num > 0 )
    {
     $display = "Positive";
    }

    else {

        $display = "Negative";

    }

    return $display;
}

$sum = getSum(10,2);

$diff = getDifference(10,2);

$prod = getProduct(10,2);

$quo = getQuotient(10,2);

$rem = getRemainder(10,2);



echo "The sum is ".$sum;

echo "<br>";

echo "The difference is ".$diff;

echo "<br>";

echo "The product is ".$prod;

echo "<br>";

echo "The quotient is ".$quo;

echo "<br>";

echo "The remainder is ".$rem;
echo "<br>";

echo dec(1);
?>