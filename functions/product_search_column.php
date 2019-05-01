<?php

function product_search_column($data_temp,$filter,$column)
{

  $newarray = array();
  #foreach array in the array
  foreach ($data_temp as $key => $value) {
      #first check if one of the values = the condition. If at least one then write the whole row to the new array

      foreach ($value as $key2 => $value2) {
          if ($counter++ <1) {
              array_push($newarray, $value);
          } else {

            if ($key2 == $column) {
              if (preg_match("/{$filter}/i", $value2))  {  #if value found in row then execute array and row pusher
             array_push($newarray, $value);
            }



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
