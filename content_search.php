<?php
#copyright kierin mulholland
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table.php");
include("{$core_path}/functions/product_search.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));
#category


$filtered_products = product_search($data,$filter);
echo build_table($filtered_products);
echo "<p>Search results for the following keyword: " .$filter .'</p><br>' ;
