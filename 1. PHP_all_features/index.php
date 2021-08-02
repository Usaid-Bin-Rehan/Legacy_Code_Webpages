<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Dev</title>
</head>
<body>
    <div class="container">
    Usaid Bin Rehan's first PHP website
    </div>
</body>
</html>

<?php
        echo "Hello world and this is printed using PHP";

    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;

    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";

    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    echo --$variable1;
    echo "<br>";
    echo $variable1;

     $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);

    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }

    $languages = array("Python", "C++", "Java", "PHP"); 

    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // While loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }
    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);
    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }
    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }

    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
?>