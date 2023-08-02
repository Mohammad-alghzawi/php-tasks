<?php
//Quesrtion1
$color= array("White","green","red");
foreach ($color as  $value) {
 echo"<li>$value</li> ";
}
echo "<br>";

//Quesrtion2
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
    );
    asort($cities);
    
    foreach ($cities as $key => $value) {
       echo "The capital of $key is $value <br> ";
    }
    echo "<br>";

    //Quesrtion3
    $color= array(4 =>"White",6=>"green",11=>"red");
    echo$color[4];
    echo "<br>";

       //Quesrtion 4
       $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
       asort($fruits);
       foreach ($fruits as $key => $value) {
          echo $key . " = " . $value . "<br>";
       }
       echo "<br>";

       //Quesrtion 8
       