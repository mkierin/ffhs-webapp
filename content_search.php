<?php
#copyright kierin mulholland
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table_order.php");
include("{$core_path}/functions/product_search.php");
include("{$core_path}/functions/product_search_column.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));
#category

// first parameter keyword
// $filter = $searchValues[0];
// $filtered_products = product_search($data, $filter);
// //column category
// $column = '0';
// $filter = $searchValues[1];
// $data = $filtered_products;
// $filtered_products = product_search_column($data, $filter, $column);


foreach ($searchValues as $key => $value) {


// 0 is keyword, 1 is category, 2 is payment, 3 is shipping
    switch ($key) {
  case '0':
  $filter = $value;
  $filtered_products = product_search($data, $filter);
    break;
//key 1 is category
    case  '1':
    $filter = $value;
    $data_temp = $filtered_products;
    $column = 0;
    $filtered_products = product_search_column($data_temp, $filter, $column);
      break;
      //key 2 is payment
          case  '2':
          $filter = $value;
          $data_temp = $filtered_products;
          $column = 5;
          $filtered_products = product_search_column($data_temp, $filter, $column);
            break;
            //key 3 is shipping
            case  '3':
                $filter = $value;
                $data_temp = $filtered_products;
                $column = 4;
                $filtered_products = product_search_column($data_temp, $filter, $column);
                  break;

}
    //key 2 is payment
}
// display product table
echo build_table($filtered_products);
//search results text
$results = count($filtered_products)-1;

if ($results == 0) {
  echo 'There are no results with the search parameters: ' . implode(', ', $searchValues);
}
if ($results == 1) {
  echo 'There is ' . $results . ' result with the search parameters: ' . implode(', ', $searchValues);
}
if ($results > 1) {
echo 'There are ' . $results . ' results with the search parameters: ' . implode(', ', $searchValues);
}
