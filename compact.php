<?php  
$subject1 = 'Language';  
$subject2 = 'Math';  
$subject3 = 'Geography';  
$subject_list = array('subject2','subject3');  
$result = compact('subject1', $subject_list);  
print_r($result);  
?>
