<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Product Shop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/table.css" type="text/css" media="all" />
	<script>
	<?php  session_start(); //starting session with variable for cart
$data_temp = array();
$data_temp = array_values(array_slice($_SESSION['cart'], -1))[0];
$a = 'test variable'
//$_SESSION['cart'], $data_temp);

?>
//notifictation message for adding product to cart.
	function product_added() {
		alert( '<?php echo $data_temp[2] ?> added to your cart.');
	}
	</script>




</head>
