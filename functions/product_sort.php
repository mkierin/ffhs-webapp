<?php

function product_sort($filtered_products, $s_column)
{

$tmp = array();
$flag = true;

while ($flag) {
for ($a=0; $a < count($filtered_products)-1 ; $a++) {
if ($filtered_products[$a][$s_column]) {
  # code...
}

}


}

foreach ($filtered_products as $key => $value) {
  $value[$s_column];
}



//Method 2: The bubble method
$j=0;
$flag = true;
$temp=0;

while ( $flag )
{
  $flag = false;
  for( $j=0;  $j < count($array)-1; $j++)
  {
    if ( $array[$j][2]["sizes"]["weight"] > $array[$j+1][2]["sizes"]["weight"] )
    {
      $temp = $array[$j];
      //swap the two between each other
      $array[$j] = $array[$j+1];
      $array[$j+1]=$temp;
      $flag = true; //show that a swap occurred
    }
  }
}
print_r($array);
?>


//
  //  $result = preg_match("/^[a-zA-Z0-9 \s]+$/", $name));
  //


    // $column_array = array();
    // foreach ($s_column as $col => $order) {
    //     $column_array[$col] = array();
    //     foreach ($filtered_products as $key => $row) {
    //         $column_array[$col]['_'.$key] = strtolower($row[$col]);
    //     }
    // }
    // $eval = 'array_multisort(';
    // foreach ($s_column as $col => $order) {
    // $eval .= '$column_array[\''.$col.'\'],'.$order.',';
    // }
    // $eval = substr($eval, 0, -1).');';
    // eval($eval);
    // $ret = array();
    // foreach ($column_array as $col => $arr) {
    //     foreach ($arr as $key => $v) {
    //         $key = substr($key, 1);
    //         if (!isset($ret[$key])) {
    //             $ret[$key] = $filtered_products[$key];
    //         }
    //         $ret[$key][$col] = $filtered_products[$key][$col];
    //     }
    // }
    // var_dump($ret);
    // return $ret;

} ?>
