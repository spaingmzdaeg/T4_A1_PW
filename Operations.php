<?php 

function sayHi($name,$age)
       {
           echo "Hellow $name,you are $age <br>";
       }
function printArray($arrayStudents)
{
    foreach($arrayStudents as $key => $value) {
        echo 'Student: '.$key.'<br />';
        foreach($value as $s_key => $s_value) {
            echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
        }
        echo '<br />';
    }
}       

?>