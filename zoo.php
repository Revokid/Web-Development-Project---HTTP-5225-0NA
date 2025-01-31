<?php

$currentHour = date("H"); 

if ($currentHour >= 5 && $currentHour < 9) {
    echo "Breakfast: Bananas, Apples, and Oats";
} elseif ($currentHour >= 12 && $currentHour < 14) {
    echo "Lunch: Fish, Chicken, and Vegetables";
} elseif ($currentHour >= 19 && $currentHour < 21) {
    echo "Dinner: Steak, Carrots, and Broccoli";
} else {
    echo "No feeding at this time.";
}
?>
