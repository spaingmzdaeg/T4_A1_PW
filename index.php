<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP 1</title>
</head>
<body>
    <?php

    include 'Operations.php';


$arrayStudents = array(
    "Chente" => array(78,54,89,40,55,88),
    "Chester" => array(88,74,89,90,90,90),
    "Xochitl" => array(71,74,79,70,89,55),
    "Jessica" => array(88,84,79,70,71,73),
    "Palmeira" => array(70,74,79,70,77,88),
    "Oscar" => array(11,14,19,10,0,0),
    "Barack" => array(100,100,89,100,100,98),
    "Melanie" => array(78,64,69,70,75,45),
    "Dejaneira" => array(71,74,79,70,89,55),
    "Andrea" => array(98,94,89,90,95,98)
);



printArray($arrayStudents);

//getPersonalAverage($arrayStudents);
echo "<br >";
//getGroupAverage($arrayStudents);
//getSubjectAverage($arrayStudents);

//getSubjectAverage($arrayStudents);

getHighestAverage($arrayStudents);



    ?>
</body>
</html>