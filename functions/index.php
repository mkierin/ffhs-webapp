
<?php
include 'header.php';
 ?>
<body>

<!-- container -->
<div class="shell">

	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">Product shop</a></h1>

		<!-- Cart -->
		<div id="cart">
			<a href="#" class="cart-link">Your Shopping Cart</a>
			<div class="cl">&nbsp;</div>
			
		</div>
		<!-- End Cart -->

		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active">Home</a></li>
			    <li><a href="#">Support</a></li>
			    <li><a href="#">My Account</a></li>
			    <li><a href="#">The Store</a></li>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
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
				$core_path = dirname(__FILE__);

				include("{$core_path}/functions/read_csv.php");
			#	print("{$core_path}/content.php");
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
					<form action="" method="post">

						<label>Keyword</label>
						<input type="text" class="field" />

						<label>Category</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>

						<label>Payment type</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>

						<label>Shipment</label>
						<select class="field">
							<option value=""> Select Category</option>
						</select>

						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$100</option>
							</select>
						</div>

						<input type="submit" class="search-submit" value="Search" />



					</form>
				</div>
			</div>
			<!-- End Search -->

			<!-- Categories -->
			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
					    <li><a href="#">TV</a></li>
					    <li><a href="#">Mobile</a></li>
					    <li><a href="#">Computers</a></li>
					    <li class="last"><a href="#">Smartwatches</a></li>



					</ul>
				</div>
			</div>
			<!-- End Categories -->

		</div>
		<!-- End Sidebar -->

		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->

	<!-- Side Full -->
	<div class="side-full">



		<!-- Text Cols -->
		<div class="cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h3 class="ico ico1">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico2">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico3">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col col-last">
				<h3 class="ico ico4">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Text Cols -->

	</div>
	<!-- End Side Full -->

	<!-- Footer -->
	<?php
	include 'footer.php';
	 ?>
	<!-- End Footer -->

</div>
<!-- End container -->


</body>
</html>
