<?php 


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

function getPersonalAverage($arrayStudents){


    foreach($arrayStudents as $key => $value) {
        echo 'Student: '.$key.'<br />';
        //echo '<br />';
        echo 'Student: '.$key.' Average:'.number_format((array_sum($value)/6));
    
        foreach($value as $s_key => $s_value) {
            echo '<br />';
            echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
        }
        echo '<br />';
    }

    
}


function getGroupAverage($arrayStudents){
$count = 0;
$averagePersonal = 0;

    foreach($arrayStudents as $key => $value) {
        //echo 'Student: '.$key.'<br />';
        //echo '<br />';
        $averagePersonal = array_sum($value)/6;
        $count+=$averagePersonal;
    
        foreach($value as $s_key => $s_value) {
        }
        //echo '<br />';


    }

    $averageGroup = $count/10;
    echo 'General Group Average:'.number_format($averageGroup);

    
}

function getSubjectAverage($arrayStudents){
    
}





?>