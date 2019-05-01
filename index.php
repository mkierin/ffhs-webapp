<?php



    // Start the session
    session_start();
    // cart variable
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart']  = array();
    }
include 'header.php';
 ?>
<body>
<!-- container -->
<div class="shell">
<?php include 'menu.php' ?>
<div id="main">
<div class="cl">&nbsp;</div>
		<div id="content">
<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
    <?php
// Switch between menu categories
        if (!isset($_GET["SubmitButton"])) {
            if (!isset($_GET["page"])) {
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
            //searchvalues
        } else {
            if (isset($_GET['SubmitButton'])) {
                $searchValues = array();
                array_push($searchValues, $_GET['input']['keyword']);
                array_push($searchValues, $_GET['input']['category']);
                array_push($searchValues, $_GET['input']['payment']);
                array_push($searchValues, $_GET['input']['shipping']);
                array_push($searchValues, $_GET['input']['sorting']);
                //column values
                switch ($searchValues[sorting]) {
                                    case 'Price':
                                        $s_column='3';
                                        break;
                                        case 'Name':
                                            $s_column='2';
                                            break;

                                    default:
                                        $s_column='3';
                                        break;
                                }
                include 'content_search.php';
            }
        }
            ?>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<div id="sidebar">
			<!-- Search -->
			<?php include 'search_box.php' ?>
			<!-- End Search -->
		</div>
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
<?php include 'footer.php';  ?>
</div>
<!-- End container -->

</body>
</html>
