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
    $countSubject1 = 0;
    $countSubject2 = 0;
    $countSubject3 = 0;
    $countSubject4 = 0;
    $countSubject5 = 0;
    $countSubject6 = 0;
    
    foreach($arrayStudents as $key => $value) {
        //echo 'Student: '.$key.'<br />';
        foreach($value as $s_key => $s_value) {
            $count = 0;
            if(($s_key+1) == 1){
                $countSubject1+=$s_value;
            }else if(($s_key+1) == 2)
            {
                $countSubject2+=$s_value;
            }else if(($s_key+1) == 3)
            {
                $countSubject3+=$s_value;
            }else if(($s_key+1) == 4)
            {
                $countSubject4+=$s_value;
            }else if(($s_key+1) == 5)
            {
                $countSubject5+=$s_value;
            }else if(($s_key+1) == 6)
            {
                $countSubject6+=$s_value;
            }
            //echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
            
        }
       // echo '<br />';
    }

    echo 'Average Subject 1:'.number_format($countSubject1/10);
    echo '<br />';
    echo 'Average Subject 2:'.number_format($countSubject2/10);
    echo '<br />';
    echo 'Average Subject 3:'.number_format($countSubject3/10);
    echo '<br />';
    echo 'Average Subject 4:'.number_format($countSubject4/10);
    echo '<br />';
    echo 'Average Subject 5:'.number_format($countSubject5/10);
    echo '<br />';
    echo 'Average Subject 6:'.number_format($countSubject6/10);
    echo '<br />';
    
    
    
    
    


    
}


function getHighestAverage($arrayStudents){

    $hightestAverage = 0;
    $hightestStudent = '';

    foreach($arrayStudents as $key => $value) {
        //echo 'Student: '.$key.'<br />';
        //echo '<br />';
        if((array_sum($value)/6) > $hightestAverage){
            $hightestAverage = (array_sum($value)/6);
            $hightestStudent = $key;
        }
        //echo 'Student: '.$key.' Average:'.number_format((array_sum($value)/6));
    
        foreach($value as $s_key => $s_value) {
            //echo '<br />';
           // echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
        }
        //echo '<br />';
    }

    echo 'Hightest Average:'.$hightestStudent.'With :'.number_format($hightestAverage);

}

function getHighes($arrayStudents){

    $hightestAverage = 0;
    $hightestStudent = '';

    foreach($arrayStudents as $key => $value) {
        //echo 'Student: '.$key.'<br />';
        //echo '<br />';
        if((array_sum($value)/6) > $hightestAverage){
            $hightestAverage = (array_sum($value)/6);
            $hightestStudent = $key;
        }
        //echo 'Student: '.$key.' Average:'.number_format((array_sum($value)/6));
    
        foreach($value as $s_key => $s_value) {
            //echo '<br />';
           // echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
        }
        //echo '<br />';
    }

    echo 'Hightest Average:'.$hightestStudent.'With :'.number_format($hightestAverage);

}

function getStudentsAboveAverage($arrayStudents){

    $count = 0;
    $averagePersonal = 0;
    $countStudentsAboveAverage = 0;
    
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
       
        foreach($arrayStudents as $key => $value) {
            //echo 'Student: '.$key.'<br />';
            //echo '<br />';
            if((array_sum($value)/6) > $averageGroup){
               $countStudentsAboveAverage++;
            }
            //echo 'Student: '.$key.' Average:'.number_format((array_sum($value)/6));
        
            foreach($value as $s_key => $s_value) {
                //echo '<br />';
               // echo 'School Subject'.($s_key+1).' => '.$s_value.'<br />';
            }
            //echo '<br />';
        }
    
        echo 'Students Above Average : '.$countStudentsAboveAverage;
    

        
}

?>