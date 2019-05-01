<?php

session_start();
//Make sure that the session variable actually exists!

if (!empty($_SESSION['cart'])) {
    //Loop through it like any other array.
    $data_temp = array();
    $data_temp = $_SESSION['cart'];
    //var_dump($data_temp);


    echo '
  <div class="col-75">

      <h4>Cart
          <i class="fa fa-shopping-cart"></i>
      </h4>';
    echo '<table style="width:100%">
        <tr>
          <th>Product</th>
          <th>Price</th>

        </tr>';

    $sum = 0;
    foreach ($data_temp as $key => $value) {
        //  add the sum off prices
        $sum += $value[3];
        // echo the name of product and val 3 is the price
        echo '<tr><td>'. $value[2] .'</td>
        <td>$'. $value[3] .'</td>
        <td><form action="" method="POST">
        <input type="submit" value="remove" class="" name="remove_product">
        </form><td>

        </tr>';
    }
    echo "<hr>";
    echo "<tr></tr>";
    // sum of all product prices
    echo '<tr><td>Total </td><td><b>$'. $sum .'</b></td>';
    echo "</tr>";
    echo "</table>";
    // button to empty cart
    echo '<p>';
    echo '<form action="" method="POST">';
    echo '<input type="submit" value="Empty Cart" class="" name="empty">';
    echo '</form>';
    echo '</p>';

// check if the empty button has been pushed to remove all elements in session array
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['empty'])) {
        session_reset();  // old session value restored
         $_SESSION['cart']  = array();
        echo "<meta http-equiv='refresh' content='0'>";
    }
// check if remove product button has been pushed. Remove product rebuild array
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['remove_product'])) {


        echo "<meta http-equiv='refresh' content='0'>";
    }


    echo '
   <br><br>
  </div>
  <div class="box-content">
    <div class="col-75">
      <div class="boxe form">
        <form action="/action_page.php">


          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="firstname">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>



          </div>

          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
    </div>';
} else {
    echo '<img src="css/images/empty-cart.png" alt="empty cart" width="500"><br>
      <a href="index.php">Continue Shopping!</a>';
}
