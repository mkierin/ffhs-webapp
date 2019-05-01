<?php
#copyright kierin mulholland
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table_order.php");
include("{$core_path}/functions/product_filter.php");
//include("{$core_path}/functions/product_sort.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));
#category

$filtered_products = product_filter($data,$filter);
#column to search

//var_dump($filtered_products);

//product sort somehow creates an additional column
//$sorted_products = product_sort($filtered_products, $s_column);
#var_dump($sorted_products);
//$temp_data = $sorted_products;

//var_dump($temp_data);
#$sorted_products = product_sorting($filtered_products);
#add sorting function here (code)
//echo build_table($sorted_products);
echo build_table($filtered_products);

?>
