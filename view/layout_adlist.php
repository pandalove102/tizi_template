<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/classixer-1.1/adlistinggrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 12:45:04 GMT -->
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ClassiXER - Classified Ads Website Template</title>
	<?php include('css.php') ?>


</head>
<body>

	<header id="header-wrap">
	<?php include('menu.php') ?>
	</header>
  <!-- noi dung chinh template  -->
	  <?php 
			$path=$this->pathview.$view.'.php';
			$this->load($path,'',$data);
			include('footer.php');
		?>
	
</body>

</html>
