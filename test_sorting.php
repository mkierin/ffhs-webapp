<?php
#copyright kierin mulholland
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table.php");
include("{$core_path}/functions/product_filter.php");
include("{$core_path}/functions/product_sort.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));
#category
$filter="Samsung";

$filtered_products = product_filter($data, $filter);


#var_dump($filtered_products);

#column value
#go through the first array
#go through the value of each column check if it against the highest value

echo build_table(product_sort($filtered_products, array('3'=>SORT_DESC)));





//
// <?php
// // Obtain a list of columns
// foreach ($data as $keyey => $row) {
//     $volume[$keyey]  = $row['volume'];
//     $edition[$keyey] = $row['edition'];
// }

// as of PHP 5.5.0 you can use array_column() instead of the above code
#$volume  = array_column($filtered_products, '3');


#print_r($volume);

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
#array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);





#$sorted_products = product_sorting($filtered_products);
#add sorting function here (code)
#echo build_table($sorted_products);
#echo build_table($filtered_products);
