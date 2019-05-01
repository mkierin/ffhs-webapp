<!-- Search box with advanced search options -->
<div class="box search">
  <h2>Search by <span></span></h2>
  <div class="box-content">
    <form action="" method="get">
<!-- Keyword input -->
<!-- Php Pattern used to prevent xss attack vectors. -->
      <label>Keyword</label>
      <input type="text" class="field" name='input[keyword]'pattern='[a-zA-Z0-9\s]+' title="a-zA-Z0-9"/>


      <label>Category</label>
      <select name='input[category]'class="field"><?php
          $the_input = 1;
          foreach (array(

              1 => 'TV',
              2 => 'Computer',
              3 => 'Phone',

          ) as $key => $val) {
              ?><option value="<?php echo $val; ?>"<?php
                  if ($key==$the_input) {
                      echo 'selected="'.$val.'"';
                  } ?>><?php echo $val; ?></option><?php
          }
      ?></select>

      <label>Payment type</label>
      <select name='input[payment]'class="field"><?php
          $the_input = 1;
          foreach (array(

              1 => 'Cash',
              2 => 'Transfer',
              3 => 'Visa',

          ) as $key => $val) {
              ?><option value="<?php echo $val; ?>"<?php
                  if ($key==$the_input) {
                      echo 'selected="'.$val.'"';
                  } ?>><?php echo $val; ?></option><?php
          }
      ?></select>
      <label>Shipping</label>
      <select name='input[shipping]'class="field"><?php
          $the_input = 1;
          foreach (array(

              1 => 'Yes',
              2 => 'No',


          ) as $key => $val) {
              ?><option value="<?php echo $val; ?>"<?php
                  if ($key==$the_input) {
                      echo 'selected="'.$val.'"';
                  } ?>><?php echo $val; ?></option><?php
          }
      ?></select>
      <label>Sort results by:</label>
      <select name='input[sorting]'class="field"><?php
          $the_input = 1;
          foreach (array(

              1 => 'Price',
              2 => 'Name',


          ) as $key => $val) {
              ?><option value="<?php echo $val; ?>"<?php
                  if ($key==$the_input) {
                      echo 'selected="'.$val.'"';
                  } ?>><?php echo $val; ?></option><?php
          }
      ?></select>

      <input type="submit" class="btn" value="Search" name="SubmitButton"/>

    </form>
  </div>
</div>
