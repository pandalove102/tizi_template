<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/classixer-1.1/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 12:45:00 GMT -->
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ClassiXER - Classified Ads Website Template</title>
	<?php include('css.php') ?>
</head>
<body>

	<header id="header-wrap">
	<?php include('menu.php') ?>
	<div id="hero-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<div class="contents-ctg">
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
												<option value="none">All Locations</option>
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
												<option value="none">Select Categories</option>
												<option value="none">Mobiles</option>
												<option value="none">Electronics</option>
												<option value="none">Training</option>
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
