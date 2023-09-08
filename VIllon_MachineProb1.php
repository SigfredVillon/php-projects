<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
table, th, td {
  border: 1px solid;
}
    </style>
</head>
<body>
    
<h2>A</h2>

<?php

$fName = "John Sigfred";

$lName="Villon";

$birthday = "7/10/21";

$salaryPerHour = 500;

$email = "johnsigfred.villon@ust.edu.ph";

echo "<h3> I'm " . $fName . " " . $lName . " and I am 21 yrs old"."</h3>";

echo "<h2> B </h2>";


$domain = explode('@',$email);


echo "<h2> Email: " . $email . "</h2>" ;

echo "<h2> Domain: " . $domain[1] . "</h2>" ;

echo "<h2> Username: " . $domain[0] . "</h2>" ;

echo "<h2> C </h2>";


$salaryPerDay = $salaryPerHour * 8;

$salaryPerMonth = $salaryPerDay *30;


$status = "Permanent";


if($status == "Permanent") {

$salaryPerMonth+=20000;

}

    echo "<h2> Name: " . $fName." ".$lName . "</h2>" ;
    echo "<h2> Email: " . $email . "</h2>" ;
    echo "<h2> Status: " . $status . "</h2>" ;

    echo "<h2> Daily Salary: " . $salaryPerDay . "</h2>" ;

    echo "<h2> Monthly Salary: " . $salaryPerMonth . "</h2>" ;



    
   $name = $fName ." ". $lName;


   $prelim = 92;

   $final = 90;


   $semGrade =($prelim + $final)/2;


   $trans=0;


   if($semGrade <= 100 and $semGrade >=96 ) {

    $trans = 1.0 ;
   }

   else if($semGrade <= 95 and $semGrade >=94 ) {

    $trans = 1.25 ;
   }

   else if($semGrade <= 93 and $semGrade >=92 ) {

    $trans = 1.50 ;
   }

   else if($semGrade <= 91 and $semGrade >= 89 ) {

    $trans = 1.75 ;
   }
   else if($semGrade <= 88 and $semGrade >= 87 ) {

    $trans = 2.00 ;
   }
   else if($semGrade <= 86 and $semGrade >= 84 ) {

    $trans = 2.25 ;
    }

    else if($semGrade <= 83 and $semGrade >= 82 ) {

        $trans = 2.50 ;
    }

    else if($semGrade <= 81 and $semGrade >= 79) {

        $trans = 2.75 ;
    }

    else if($semGrade <= 78 and $semGrade >= 75) {

        $trans = 3.00 ;
    }
    else {

        $trans = 5.00;
    }


    



?>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col"><?php echo $name ?></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Prelim</th>
      <td><?php echo $prelim ?></td>

    </tr>
    <tr>
      <th scope="row">Final</th>
      <td><?php echo $final ?></td>

    </tr>
    <tr>
      <th scope="row">Semestral Grade</th>
      <td><?php echo $semGrade ?></td>

    </tr>

    <tr>
      <th scope="row">Transmuted Grade</th>
      <td><?php echo $trans ?></td>

    </tr>
  </tbody>
</table>
</body>
</html>