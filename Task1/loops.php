<?php
//Quesrtion1
$num=0;
for($i=0 ; $i<=30 ;$i++){
    $num +=$i;
}
echo $num ;

//Quesrtion 4
echo "<br>"

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

    //Quesrtion 5
    echo "<br>"
    $inputNumber = 5;
$factorial = 1;

for ($i = 1; $i <= $inputNumber; $i++) {
$factorial *= $i;
}

echo "$factorial";
 //Quesrtion 6
 echo "<br>"

 $n1=1; 
$n2=0;
for($i=0;$i<=15;$i++){
echo " $n2,";
$temp=$n1+$n2;
$n1=$n2;  
$n2=$temp; 	
}
 //Quesrtion 9
 echo "<br>"
 $n = 5;
$count = 1;
for ($i = $n; $i > 0; $i--) {
for ($j = $i; $j < $n + 1; $j++) {
echo $count;
$count++;
} echo "<br>";
} 