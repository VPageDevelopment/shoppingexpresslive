<?php
//if "email" variable is filled out, send email
 
  
  
  echo $admin= $row['email'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  
  mail($admin, "$subject", $comment, "From:" . $email);
  
  
 
?>