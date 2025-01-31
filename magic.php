<?php

$randomValue = ceil(mt_rand(1, 100)); 

echo "The selected number is: " . $randomValue . '<br>';

if ($randomValue % 3 == 0 && $randomValue % 5 == 0) { 
    echo 'FizzBuzz';
} elseif ($randomValue % 5 == 0) { 
    echo 'Buzz';
} elseif ($randomValue % 3 == 0) { 
    echo 'Fizz';
} else {
    echo 'This is not a Magic Number: ' . $randomValue;
}

?>
