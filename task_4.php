<?php
// Define the multidimensional array $studentGrades
$studentGrades = [
   array('Math' => 85, 'English' => 92, 'Science' => 88),
    array('Math' => 78, 'English' => 88, 'Science' => 76),
    array('Math' => 90, 'English' => 85, 'Science' => 94),
];

// Function to calculate and print average grades for each student
function AverageGrades($gradesArray) {
    foreach ($gradesArray as $studentIndex => $studentGrades) {
        $total = 0;
        $subjectCount = count($studentGrades);
        // echo $subjectCount;
        
        // Calculate the total grade for the student
        foreach ($studentGrades as $subject => $grade) {
            $total += $grade;
        }
        
        // Calculate the average grade
        $average = $total / $subjectCount;
        
        // Print the average grade for the student
        echo "Student " . ($studentIndex + 1) . " - Average Grade: " . $average . "\n";
    }
}

// Call the function to calculate and print average grades
AverageGrades($studentGrades);
?>
