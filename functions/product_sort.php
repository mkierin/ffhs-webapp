<?php

function product_sort($filtered_products, $s_column)
{


    $column_array = array();
    foreach ($s_column as $col => $order) {
        $column_array[$col] = array();
        foreach ($array as $key => $row) {
            $column_array[$col]['_'.$key] = strtolower($row[$col]);
        }
    }
    $eval = 'array_multisort(';
    foreach ($s_column as $col => $order) {
    $eval .= '$column_array[\''.$col.'\'],'.$order.',';
    }
    $eval = substr($eval, 0, -1).');';
    eval($eval);
    $ret = array();
    foreach ($column_array as $col => $arr) {
        foreach ($arr as $key => $v) {
            $key = substr($key, 1);
            if (!isset($ret[$key])) {
                $ret[$key] = $array[$key];
            }
            $ret[$key][$col] = $array[$key][$col];
        }
    }
    return $result;
} ?>
