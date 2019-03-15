<?php
include 'header.php';
 ?>
<body>

<!-- container -->
<div class="shell">




		<!-- Navigation -->




    <form id='navigation' action="" method="get">
        <input class="" type="submit" name="page" value="Home" />
        <input class="" type="submit" name="page" value="TV" />
        <input class="" type="submit" name="page" value="Phones" />
        <input class="" type="submit" name="page" value="Computer" />
        <input class="" type="submit" name="page" value="Cart" />
        <input class="" type="submit" name="page" value="Contact" />
    </form>




		<!-- End Navigation -->

	<!-- End Header -->

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>

		<!-- Content -->
		<div id="content">



			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>

        <?php
        if (!isset($_GET["input_1"])) { // if post is not set, show home.php

            if (!isset($_GET["page"])) { // if post is not set, show home.php
                include 'content.php';
            } else {
                switch ($_GET["page"]) {
              case "Home":
                  include 'content.php';
                  break;
                case "TV":
                $filter ='TV';
                    include 'content_categories.php';
                    break;
                case "Phones":
                $filter ='Phone';
                    include 'content_categories.php';
                    break;
                case "Computer":
                $filter ='Computer';
                    include 'content_categories.php';
                    break;
                case "Cart":
                        include 'content_cart.php';
                        break;
                case "Contact":
                        include 'contact_form.php';
                        break;

            }
            }
        } else {
              if (isset($_GET['input_1'])) {
                  $filter=$_GET['input_1'];
              }
              include 'content_search.php';
          }

            ?>


				<div class="cl">&nbsp;</div>
			</div>




			<!-- End Products -->

		</div>
		<!-- End Content -->

		<!-- Sidebar -->
		<div id="sidebar">

			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="get">

						<label>Keyword</label>
						<input type="text" class="field" name="input_1"/>

						<label>Category</label>



            <select class="field"><?php
                $the_input = 1; // or whatever you want
                foreach (array(
                    1 => 'TV',
                    2 => 'Phone',
                    3 => 'Samsung',
                    4 => 'Computer',
                ) as $key => $val) {
                    ?><option value="<?php echo $key; ?>"<?php
                        if ($key==$the_key) {
                            echo ' selected="selected"';
                        } ?>><?php echo $val; ?></option><?php
                }
            ?></select>


						<label>Payment type</label>
            <select class="field"><?php
                $the_input = 1; // or whatever you want
                foreach (array(
                    1 => 'Cash',
                    2 => 'Transfer',
                    3 => 'Visa',

                ) as $key => $val) {
                    ?><option value="<?php echo $key; ?>"<?php
                        if ($key==$the_key) {
                            echo ' selected="selected"';
                        } ?>><?php echo $val; ?></option><?php
                }
            ?></select>

						<label>Shipment</label>
            <select class="field"><?php
                $the_input = 1; // or whatever you want
                foreach (array(
                    1 => 'Yes',
                    2 => 'No',


                ) as $key => $val) {
                    ?><option value="<?php echo $key; ?>"<?php
                        if ($key==$the_key) {
                            echo ' selected="selected"';
                        } ?>><?php echo $val; ?></option><?php
                }
            ?></select>




						<input type="submit" class="search-submit" value="Search" />



					</form>
				</div>
			</div>
			<!-- End Search -->

		</div>
		<!-- End Sidebar -->

		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->

	<?php
    include 'footer.php';
     ?>

</div>
<!-- End container -->


</body>
</html>
