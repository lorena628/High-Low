<?php

$num = mt_rand(0, 100);


do {
echo "Pick a number\n";

$guess = trim(fgets(STDIN));

if ($guess > $num) {
    echo "Guess LOWER, ";

} elseif ($guess < $num) {
    echo "Guess HIGHER, ";
}
elseif ($guess == $num){
    echo "You got it!";
}
}while ($guess != $num);
