<?php
#copyright kierin mulholland
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));
$filter = 'TV';





 $filtered_products = product_filter($data,$filter);
 echo build_table($filtered_products);

 ?>
