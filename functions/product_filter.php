<?php

function product_filter($data,$filter)
{

  $newarray = array();
  #foreach array in the array
  foreach ($data as $key => $value) {
      #first check if one of the values = the condition. If at least one then write the whole row to the new array

      foreach ($value as $key2 => $value2) {
          if ($counter++ <1) {
              array_push($newarray, $value);
          } else {
              if ($value2 == $filter) {  #if value found in row then execute array and row pusher
             array_push($newarray, $value); #create complete new array_push

              break;
              } else {
                  continue;
              }
          }
      }
  }
  return($newarray);

}




 ?>
