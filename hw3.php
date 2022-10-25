<?php


$a = 60;
$b = 40;
$c = 50;
$d = 70;



if($a > $b and $a > $c or $a > $d) {
    echo $a. " A is a greather num";
} elseif($b > $a and $b > $c or $b > $d) {
    echo $b. " B is a greather num";
} elseif($c > $a and $c > $b or $c > $d) {
    echo $c. "C is a greather num";
} else {
    echo"D is a greather num<br>"; }
echo"<br>";
    $num = 40;
    if($num>0){
        echo"$num is a postive num";
    } elseif ($num < 0){
   echo "$num is a neg num";
    }else {
       echo "$num is a nutral num";
    }
echo"<br>";
   $userEmail ='maliha@gmail.com';
   $userPassword ='maliha00000';
   if($userEmail == 'maliha@gmail.com'){
    //*PASSWORD CHECK
    if( $userPassword  == 'maliha00000'){
        echo "Login";
    } else {
        echo "your password is invalid";
    }
   }
   echo"<br>";

   $amount = 100000;
   $year = 2;
   $interest = 20;

   $totalinterest =($interest/100) * $year;
   echo $totalinterest;


   echo"<br>";

   $amount = 100000;
   $year = 2;
   $interest = 20;

   $totalInterest =($interest/100) * $year;
$totalInterestMoney  = $amount * $totalInterest;
 echo $totalInterestMoney;


 echo"<br>";

 $amount = 100000;
 $year = 2;
 $interest = 20;

 $totalInterest =($interest/100) * $year;
$totalInterestMoney  = $amount * $totalInterest;
$totalPayable = $amount + $totalInterestMoney;
echo $totalPayable;