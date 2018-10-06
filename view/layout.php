<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mua Bán Rao Vặt</title>

	<?php include('css.php') ?>
	

</head>
<body>

	<header id="header-wrap">

		<?php include('menu.php') ?>

		<div id="hero-area">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xs-12 text-center">
						<div class="contents">
							<h1 class="head-title">Welcome to <span class="year">Mua Bán Rao Vặt</span></h1>
							<p>Buy And Sell Everything From Used Cars To Mobile Phones And Computers, <br> Or Search For Property, Jobs And More</p>
							<div class="search-bar">
								<div class="search-inner">
									<form class="search-form">
										<div class="form-group inputwithicon">
											<i class="lni-tag"></i>
											<input type="text" name="customword" class="form-control" placeholder="Enter Product Keyword">
										</div>
										<div class="form-group inputwithicon">
											<i class="lni-map-marker"></i>
											<div class="select">
												<select>
													<option value="none">Locations</option>
													<option value="none">New York</option>
													<option value="none">California</option>
													<option value="none">Washington</option>
													<option value="none">Birmingham</option>
													<option value="none">Chicago</option>
													<option value="none">Phoenix</option>
												</select>
											</div>
										</div>
										<div class="form-group inputwithicon">
											<i class="lni-menu"></i>
											<div class="select">
												<select>
													<option value="none">Categories</option>
													<option value="none">Jobs</option>
													<option value="none">Electronics</option>
													<option value="none">Mobile</option>
													<option value="none">Training</option>
													<option value="none">Pets</option>
													<option value="none">Real Estate</option>
													<option value="none">Services</option>
													<option value="none">Training</option>
													<option value="none">Vehicles</option>
												</select>
											</div>
										</div>
										<button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	  <!-- noi dung chinh template  -->
	  <?php 
			$path=$this->pathview.$view.'.php';
			$this->load($path,'',$data);
			include('footer.php');
		?>
</body>

</html>
