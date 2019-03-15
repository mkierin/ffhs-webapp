<?php

function build_table($data)
{
$c = true;
    # starting with table characteristics;

    $html = '<table style="width:100%" class="nice-table" >';

    # building headers;
    $html.= '<thead>';
    $html.= '<tr>';
    foreach ($data[0] as $key => $value) {
        $html.= '<th>'. $value .'<div class="" style="font-size:10px">&#9650</div><div class="" style="font-size:10px">&#9660</div></th>';
    }

    $html.= '</tr>';
    $html.= '</thead>';
    # building rows;

    foreach ($data as $key => $value) {
      #check if row is even or uneven
        $html.= '<tr'.(($c = !$c)?' class="nice-table-odd"':' class="nice-table"').">";
        foreach ($value as $key2 => $value2) {
            if ($counter++ < 6) {
                continue;
            }

            $html.= '<td><p>' . $value2 . '</p></td>';
        }

        $html .= '</tr>';
    }

    $html .= '</table>';
    #return the html code stored in $html string;

    return $html;
}
