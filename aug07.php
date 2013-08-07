<?php
  $names = array('first_name'=>'bill', 'last_name'=>'williams');
  
  $records =array();

  $records[] = $names;
  
  $records['first_name'] = 'noam';
  $records['last_name'] = 'lustiger';

    $records[] = $names;  

  $records ['irst_name'] = 'steve';
  $records['ast_name'] = 'josephs';
   
   $records[] = $names;
 
    
print_r($records);




?>

