<?php
$core_path = dirname(__FILE__);

include("{$core_path}/functions/read_csv.php");
include("{$core_path}/functions/construct_table.php");

#use read_csv function to get data from products.csv
$data = read_csv(file_get_contents('functions/products.csv'));

# condition is the category name
$condition ='TV';
#create a function to filter an array based on a condition
#i need to be careful that i also add the header information to the newarray
#function array_filter_one($data,$condition){




foreach ($data as $key => $value) {
    array_push($filteredarray, $value);

    foreach ($value as $key2 => $value2) {
        #if counter used for adding header data to array
        if ($counter++ < 6) {
            array_push($filteredarray, $value2);
        #check if value is equal to category. If yes push to new array
        } elseif ($value2 == 'TV') {
            array_push($filteredarray, $value2);
        } else {
            continue;
        }
    }
}
print_r($filteredarray);



// Output the filtered array
#}
#echo array_filter_one($data,$condition);

?>
