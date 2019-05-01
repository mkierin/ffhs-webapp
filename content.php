<?php
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table_order.php");

#use read_csv function to get data from products.csv
$data = read_csv( file_get_contents('functions/products.csv'));
#print_r(read_csv( file_get_contents('functions/products.csv')));

# using the the constructing table function and the information from the data array to populate table;
echo build_table($data);


#
?>
