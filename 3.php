<?php
$date = date("Y/m/d");
$bdate = "1993/05/01";


$diff = date_diff(date_create($date) , date_create($bdate) );


$age = $diff->format("%y");

var_dump ($age);


?>