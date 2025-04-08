<?php
// Creates DateTime objects
  $start = date_create(date('d-m-Y, H:i:s'));
  $end = date_create('2022-11-10, 11:58:14');
 
  // Calculates the difference between DateTime objects
  $interval = date_diff($end, $start);
 
  // Printing result in years & months format
  echo $interval->format('%d days %h hours %i minutes');
?>