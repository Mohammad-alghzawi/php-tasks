<?php
//Quesrtion1
$sum=0;
for($i=0 ; $i<=30 ; $i++){
    $sum += $i;
}
echo $sum;
echo "<br>";

//Quesrtion 4
for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=5 ; $j++) { 
    if ($i == $j) {
    echo $j;
    }else{
    echo 0;
    }   
    }
    echo "<br>";
    }

echo "<br>";
//Quesrtion 5
$inputNumber = 5;
$factorial = 1;

for ($i = 1; $i <=5; $i++) {
$factorial *= $i;
}
echo $factorial;
 echo "<br>";


 //Quesrtion 6
 $n1=1; 
$n2=0;
for($i=0;$i<=14;$i++){
echo " $n2,";
$con=$n1+$n2;
$n1=$n2;  
$n2=$con; 	
}
 echo "<br>";

 //Quesrtion 9
 $patrin=0;
 for ($i=0; $i < 5; $i++) {  
 for ($j=-1; $j <$i ; $j++) { 
     $patrin++;
     echo $patrin ." ";
 }
 
 echo "<br>";
 }
 echo "<br>";
