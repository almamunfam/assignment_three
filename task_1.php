<?php
// Create a string variable called $text
$text = "The quick brown fox jumps over the lazy dog.";

// create a function with $text argument 
function modifyText($text){

//  Convert the string to all lowercase.
$lowerCaseChar = strtolower($text);

// Replace "brown" with "red" in the string

$modifyChar = str_replace("brown","red",$lowerCaseChar);

// print modifiled text 

echo $modifyChar;

};

modifyText($text);



