<?php

// Part 1: Simple Calculator

$a = 33;
$b = 8;

// Functions
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}


echo "----- Calculator Results ----- <br>";
echo "Addition: " . add($a, $b) . "<br>";
echo "Subtraction: " . subtract($a, $b) . "<br>";
echo "Multiplication: " . multiply($a, $b) . "<br>";
echo "Division: " . divide($a, $b) . "<br><br>";


// Part 2: Student Grade Calculator

$mark1 = 65;
$mark2 = 77;
$mark3 = 92;

// Total & Average
$total = $mark1 + $mark2 + $mark3;//total-234
$average = $total / 3;//average-78

// Grade logic
if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 75) {
    $grade = "B";
} elseif ($average >= 50) {
    $grade = "C";
} else {
    $grade = "Fail";
}

// Output
echo "----- Student Grade Calculation ----- <br>";
echo "Total Marks: $total <br>";
echo "Average: " . number_format($average, 2) . "<br>";
echo "Grade: $grade";

?>
