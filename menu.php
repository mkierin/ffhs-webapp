<?php
$nav =array('Home','TV','Phones','Computer','Cart','Contact');
echo '<form id="navigation" action="" method="get">';

foreach ($nav as $value) {
    echo '<input class="menu" type="submit" name="page" value="'.$value.'"/>';
}
echo '</form>';
