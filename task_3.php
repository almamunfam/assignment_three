<?php
//array $grades
$grades = [85, 92, 78, 88, 95];

// Function for to do  sorting 
function sortFunction ($gradesArray) {
    rsort($gradesArray); // Sort the array in descending order
    print_r($gradesArray);
}

// Call the function for the result
sortFunction($grades);
?>
