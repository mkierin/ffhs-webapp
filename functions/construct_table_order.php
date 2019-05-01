<?php
session_start();
#construct table order contains the order button for ordering products

function build_table($temp_data)
{
    $c = true;
    # starting with table characteristics;

    $html = '<table style="width:100%" class="nice-table" >';

    # building headers;
    $html.= '<thead>';
    $html.= '<tr>';
    foreach ($temp_data[0] as $key => $value) {
        $html.= '<th>'. $value . '</th>';
    }
    $html.='<th></th>';

    $html.= '</tr>';
    $html.= '</thead>';
    # building rows;

    foreach ($temp_data as $key => $value) {
        #check if row is even or uneven
        $html.= '<tr'.(($c = !$c)?' class="nice-table-odd"':' class="nice-table"').">";
        foreach ($value as $key2 => $value2) {
            if ($counter++ < 6) {
                continue;
            }

            $html.= '<td><p>' . $value2 . '</p></td>';
        }

        #remove the button from the first row
        if ($a++ <1) {
            continue;
        } else {
            //needed to use base64 encoding because of error unserialize needs 1 parameter as string
            $rowvalue = base64_encode(serialize($value));
      //      $productname = '';
        //    $productname = $value[2]; // get the name from the array

            //add a global variable here to send a variable to the popupbox

            $html.= '<td><p>';
            $html.='<form action="'. $_SERVER["PHP_SELF"] .'" method="get">';
            $html.='<input type="hidden" name="cart_add" value="'. $rowvalue. '">';
            $html.='<button onclick="product_added()" type="submit" border ="0px" >';
            $html.='<img src="/css/images/cart_add.png" width="30px" height="30px" border="0px" alt="Cart Button"></button>';
            $html.='</form>';
            $html.= '</p></td>';
        }

        $html .= '</tr>';
    }
    if (isset($_GET["cart_add"])) {
        //decode get cart_add using base 64 decode and push to session array
        array_push($_SESSION['cart'], unserialize(base64_decode($_GET["cart_add"])));
    }

    $html .= '</table>';
    #return the html code stored in $html string;

    return $html;
}
