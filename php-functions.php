<?php

/* takes data from a CSV to populate the Vend page.
 firstrun variable flags the headings.
 headings are vendID, title, img, desc and price.
 populates each vending machine's headings content.
 replaces any "/n" with "<br>".
*/

$fp = fopen('vends.csv','r'); 
$firstrun=true; 
  while ( $cells = fgetcsv($fp, 0, ",") ) { 
    if ($firstrun) { 
      $headings = $cells; 
      $firstrun=false; 
    } 
    else {
        for($x=1; $x<count($cells); $x++) 
          if (strcmp($headings[$x],"desc") == 0) {
            $vends[$cells[0]][$headings[$x]] = str_replace('\n','<br>',$cells[$x]);
          }
          else {
          $vends[$cells[0]][$headings[$x]]=$cells[$x]; 
        } 
      }
  }
fclose($fp); 

function buttonCheck($cart, $vendID) {
    foreach ($cart as $value) {
      foreach ($value as $vendValues) {
        if ($vendValues === $vendID) {
          return true; 
        }
      }
    }
    return false;
}

  

?>