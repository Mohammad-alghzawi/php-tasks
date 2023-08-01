<?php
//Quesrtion1
$year=2013;

if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
    echo "This year a leap year";
}else{
    echo "This year is not a leap year’";
}
echo "<br>";
$year = 2013;
// if ($year % 400 == 0) {
//     echo $year." This year is a leap year";
//  } elseif ($year % 100 == 0) {
//     echo $year." This year is not a leap year";
//  } elseif ($year % 4 == 0) {
//     echo $year." This year is a leap year";
//  } else {
//     echo $year." This year is not a leap year";
//  };

// Question 2

$tempreture=27;
if($tempreture <=20){
    echo "we are winnter";
}else{
    echo"it is summertime";
}
echo "<br>";

// Question 3
$num1=2;
$num2=2;
if($num1==$num2){
    $num=($num1+$num2)*3;
    echo $num;
}else{
    $num=($num1+$num2);
    echo $num;
}
echo "<br>";

// Question 4
$num1=10;
$num2=10;
if($num1+$num2 == "30"  ){
    echo "true ";
}else{ 
    echo "false";
}
echo "<br>";

// Question 5
$number=20;
if($number %3==0){
    echo "true";
}else{
    echo "false";
}
echo "<br>";

// Question 6
$number=50;
if($number>=20 && $number<=50){
    echo "true";
}else{
    echo"false";
}
echo "<br>";

echo "<br>";

// Question 7
// $num1=1;
// $num2=5;
// $num3=9;
// if($num1>$num2 && $num1>$num3){
//     echo 1;
// }elseif($num2>$num1 && $num2>$num3){
//     echo 5;
// }elseif($num3>$num1 &&$num3>$num2){
//     echo 9;
// }
$nums = [1, 5, 9];
rsort($nums);
echo "$nums[0]";

// Question 8
$unit=200;
if($unit<=50){
    echo "2.5 JOD";
}elseif($unit<=150){
echo "5.00J OD";
}elseif($unit<=250){
    echo "6.20 JOD";
}else{
    echo "7.50 JOD";
}
// switch($units) {
//     case $units <= 50:
//         echo "2.50 JOD/Unit";
//         break;
    
//     case $units > 50 && $units <= 150:
//         echo "5.00 JOD/Unit";
//         break;
    
//     case $units > 150 && $units <= 250:
//         echo "6.20 JOD/Unit";
//         break;

//     default:
//         echo "7.50 JOD/Unit";
//         break;
// }

echo "<br>";
// Question 9
$age=15;
if($age>=18){
    echo "eligible to vote";
}else{
    echo "is no eligible to vote";
}

echo "<br>";
// Question 10
$num=-60;
if($num==0){
    echo "zero";
}elseif($num>0){
    echo "possitive";
}else{
    echo "negative";
}

echo "<br>";
// Question 11
$operation = "*";
$num1 = 10;
$num2 = 20;
$ans;
switch($operation) {
    case "+":
        $ans = $num1 + $num2;
        break;
    
    case "-":
        $ans = $num1 - $num2;
        break;

    case "*":
        $ans = $num1 * $num2;
        break;

    case "/":
        $ans = $num1 / $num2;
}
echo "<br>";
// Question 12
$grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = array_sum($grades);
$avg = $sum / count($grades);

switch($avg) {
    case $avg < 60:
        echo "F";
        break;
    
    case $avg < 70:
        echo "D";
        break;

    case $avg < 80:
        echo "C";
        break;

    case $avg < 90:
        echo "B";
        break;

    case $avg <= 100:
        echo "A";
        break;

    default:
        echo "Invalid Grade";
        break;
}