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

    $vectorAlumnos = array("Chester"=>65,56,34,44,54,12,"Chente"=>75,86,100,100,87,89
,"Xochitl"=>75,80,80,74,84,72,"Chente"=>65,56,34,44,54,12,"Chente"=>65,56,34,44,54,12
,"Chente"=>65,56,34,44,54,12,"Chente"=>65,56,34,44,54,12,"Chente"=>65,56,34,44,54,12
,"Chente"=>65,56,34,44,54,12,"Chente"=>65,56,34,44,54,12);

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
//mostrar en pantalla
$sales = array('FIRST'=>array('RED'=>array(9,3),'GREEN'=>array(4,5,8,2)), 
'SECOND'=>array('RED'=>array(3,5,5,2),'YELLOW'=>array(4,2,5)),
'THIRD'=>array('BLUE'=>array(1,2,4),'RED'=>array(9,4,6)), 
'FOUR'=>array('BLUE'=>array(2,3,3,5),'BLACK'=>array(4,5,8,9)));


//printArray($arrayStudents);

getPersonalAverage($arrayStudents);
echo "<br >";
getGroupAverage($arrayStudents);






    ?>
</body>
</html>