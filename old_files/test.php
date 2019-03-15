<?php

#Copyright kierin mulholland
$core_path = dirname(__FILE__);
include("{$core_path}/functions/construct_table.php");

$data = array(
    array(
        'company' => 'Manor',
        'id' => 1,
        'balance' => '-$2500'
    ) ,
    array(
        'company' => 'Coop',
        'id' => 2,
        'balance' => '-$30000'
    ) ,
    array(
        'company' => 'HP',
        'id' => 3,
        'balance' => '$4000'
    ) ,
    array(
        'company' => 'Vifor',
        'id' => 4,
        'balance' => '$7000'
    ) ,
    array(
        'company' => 'Manor',
        'id' => 6,
        'balance' => '$8000'
    )
);
$filter = 'Manor';

// Array ( [0] =>
//
// Array ( [company] => Manor
//         [id] => 1
//         [balance] => -$2500 )
//
//         [1] => Manor [2] => 1 [3] => -$2500
//
//         [4] =>
//
// Array ( [company] => Manor
//         [id] => 6
//         [balance] => $8000 )
//
//         [5] => Manor
//         [6] => 6
//         [7] => $8000 )





$newarray = array();
#foreach array in the array
foreach ($data as $key => $value) {
  #first check if one of the values = the condition. If at least one then write the whole row to the new array

    foreach ($value as $key2 => $value2) {

        if ($value2 == $filter) {  #if value faound in row then execute array and row pusher
           array_push($newarray, $value); #create complete new array_push


            break;
        }
        elseif ($value2 !== $filter) {
          continue;
        }

    }
}
  var_dump($newarray);
#  print_r($newarray);
