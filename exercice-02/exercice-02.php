<?php


for ($num = 1; $num < 101; $num++) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz\n";
    } else if ($num % 3 == 0) {
        echo "Fizz\n";
    } else if ($num % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $num . "\n";
    }
}
