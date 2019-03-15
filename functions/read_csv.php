<?php

function read_csv($string, $delimiter = ';', $textdelimiter = '', $newlineChar = "\n")
{
    $array = array();
    $size = strlen($string);
    $columnIndex = 0;
    $rowIndex = 0;
    $fieldValue="";
    $isDelimited = false;
    for ($i=0; $i<$size;$i++) {
        $char = $string{$i};
        $addChar = "";

        if ($isDelimited) {
            if ($char==$textdelimiter) {
                if ($i+1<$size && $string{$i+1}==$textdelimiter) {
                    // escaped char
                    $addChar=$char;
                    $i++; // dont check next char
                } else {
                    $isDelimited = false;
                }
            } else {
                $addChar=$char;
            }
        } else {
            if ($char==$textdelimiter) {
                $isDelimited = true;
            } else {
                if ($char==$delimiter) {
                    $array[$rowIndex][$columnIndex] = $fieldValue;
                    $fieldValue="";

                    $columnIndex++;
                } elseif ($char==$newlineChar) {
                    echo $char;
                    $array[$rowIndex][$columnIndex] = $fieldValue;
                    $fieldValue="";
                    $columnIndex=0;
                    $rowIndex++;
                } else {
                    $addChar=$char;
                }
            }
        }
        if ($addChar!="") {
            $fieldValue.=$addChar;
        }
    }

    if ($fieldValue) { // save last field
        $array[$rowIndex][$columnIndex] = $fieldValue;
    }
    return $array;
}
