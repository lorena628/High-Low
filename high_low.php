<?php

// these are the new argumaents for min/max 
$min = $argv[1];
$max = $argv[2];
 


if($argv[1] < $argv[2]){
    $min = $argv[1];
    $max = $argv[2];

}elseif($argv[1] > $argv[2]){
    $max = $argv[1];
    $min = $argv[2];
}
// if($arg < 3) {
//     exit;
// }

// cheching if new arguments are numbers
if(!is_numeric($min)){
        echo "this is not a number\n";
        exit;
}
if(!is_numeric($max)){
    echo "this is not a number\n";
    exit;
} 
// this is the do while for picking a number
do{
    $num = mt_rand($min, $max);

    do {
    echo "Pick a number\n";
    //users guess
    $guess = trim(fgets(STDIN));
    //if guess is not a number
    if (!is_numeric($guess)){
        echo "That is not a number \n";
    }elseif ($guess > $num) {
        echo "Guess LOWER, ";

    }elseif ($guess < $num) {
        echo "Guess HIGHER, ";
    }
    elseif ($guess == $num){
        echo "You got it! Play again?";
        }
    }while ($guess != $num);
// this is the variable for users response to playing again
$resp = trim(fgets(STDIN));
}while ($resp == 'yes');
echo "have a nice day\n";

