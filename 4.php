<?php 
$var= "CICS";

echo strlen($var);

echo "<br>";

echo "<br>";

$countries = "Africa, Brazil, Italy, USA, Germany";

echo "<p> String from Italy to end: " . str_word_count($countries) . "</p>";

$africa = "Africa";

echo "String from Africa to end: ". strpos($countries,$africa);


echo "<br>";

echo "<br>";

$italy = "Brazil";

echo "String from Africa to end: ". strpos($countries,$italy);

echo "<br>";

$email="avpsdsdsss@exadsdsdsample.com";

$start = strpos($email,"@");

$pos = $start + 1;

$var = strlen($email);

echo "<br>";

echo substr($email,$pos,$var);

?>