<?php
$marks = array(
    "Student 1" => array(
        "Roll" => 101,
        "Maths" => 65,
        "Science" => 94,
    ),
    "Student 2" => array(
        "Roll" => 102,
        "Maths" => 87,
        "Science" => 81,
    ),
    "Student 3" => array(
        "Roll" => 103,
        "Maths" => 91,
        "Science" => 68,
    ),
);
$mathMarks=0;
$mathName=null;
$scienceMarks=0;
$scienceName=null;
$totalMarks=0;
$totalName=null;

foreach($marks as $marksKeys=>$marksValue){
    if($marksValue["Maths"]>$mathMarks){
        $mathName=$marksKeys;
        $mathMarks=$marksValue["Maths"];
    }
    if($marksValue["Science"]>$scienceMarks){
        $scienceName=$marksKeys;
        $scienceMarks=$marksValue["Science"];
    }
    if($marksValue["Science"]+$marksValue["Maths"]>$totalMarks){
        $totalName=$marksKeys;
        $totalMarks=$marksValue["Science"]+$marksValue["Maths"];
    }
 
}
echo "Student name with highest marks in Maths: $mathName<br>";
echo "Student name with highest marks in Science: $scienceName <br>";
echo "Student name with highest total marks: $totalName"

?>