<?php

// Create an array called $numbers containing the numbers 1 to 10
$numbers = array(1,2,3,4,5,6,7,8,9,10);

// create function $numbers argument 
function evenNumberRemove($numbers) {
    $resultArray = array_filter($numbers, function ($value) {
        if( $value % 2 != 0) {
            return true; // Keep only odd numbers
        }
         
    });

    // Print the resulting array
    print_r($resultArray);
}

// Call the function with the numbers array
evenNumberRemove($numbers);












