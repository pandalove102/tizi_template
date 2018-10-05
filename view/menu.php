<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
			<div class="container">

				<div class="navbar-header">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						<span class="lni-menu"></span>
						<span class="lni-menu"></span>
						<span class="lni-menu"></span>
					</button>
					<a href="?controller=hethong&act=trangchu" class="navbar-brand"><img src="<?=template_classixer?>assets/img/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="main-navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="?controller=hethong&act=trangchu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Home
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item " href="?controller=hethong&act=trangchu">Home 1</a>
								<a class="dropdown-item" href="?controller=hethong&act=trangchu2">Home 2</a>
								<a class="dropdown-item " href="?controller=hethong&act=trangchu3">Home 3</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?controller=hethong&act=category">
								Categories
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Listings
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?controller=hethong&act=trangchu">Ad Grid</a>
								<!-- <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a> -->
								<a class="dropdown-item" href="?controller=hethong&act=details">Listing Detail</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?controller=hethong&act=about">About Us</a>
								<a class="dropdown-item" href="?controller=hethong&act=service">Services</a>
								<a class="dropdown-item" href="?controller=hethong&act=details">Ads Details</a>
								<a class="dropdown-item" href="?controller=hethong&act=postads">Ads Post</a>
								<a class="dropdown-item" href="?controller=hethong&act=pricing">Packages</a>
								<a class="dropdown-item" href="?controller=hethong&act=testimonial">Testimonial</a>
								<a class="dropdown-item" href="?controller=hethong&act=faq">FAQ</a>
								<a class="dropdown-item" href="?controller=hethong&act=_404">404</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Blog
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?controller=hethong&act=blog">Blog - Right Sidebar</a>
								<a class="dropdown-item" href="?controller=hethong&act=blogleftsidebar">Blog - Left Sidebar</a>
								<a class="dropdown-item" href="?controller=hethong&act=blogfullwidth"> Blog full width </a>
								<a class="dropdown-item" href="?controller=hethong&act=singleblog">Blog Details</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?controller=hethong&act=contact">
								Contact
							</a>
						</li>
					</ul>
					<ul class="sign-in">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?controller=hethong&act=accountprofilesetting"><i class="lni-home"></i> Account Home</a>
								<a class="dropdown-item" href="?controller=hethong&act=accountmyads"><i class="lni-wallet"></i> My Ads</a>
								<a class="dropdown-item" href="?controller=hethong&act=accountfavouriteads"><i class="lni-heart"></i> Favourite ads</a>
								<a class="dropdown-item" href="?controller=hethong&act=accountarchivedads"><i class="lni-folder"></i> Archived</a>
								<a class="dropdown-item" href="?controller=hethong&act=login"><i class="lni-lock"></i> Log In</a>
								<a class="dropdown-item" href="?controller=hethong&act=signup"><i class="lni-user"></i> Signup</a>
								<a class="dropdown-item" href="?controller=hethong&act=forgotpassword"><i class="lni-reload"></i> Forgot Password</a>
								<a class="dropdown-item" href="?controller=hethong&act=accountclose"><i class="lni-close"></i>Account close</a>
							</div>
						</li>
					</ul>
					<a class="tg-btn" href="?controller=hethong&act=postads">
						<i class="lni-pencil-alt"></i> Post An Ad
					</a>
				</div>
			</div>

			<ul class="mobile-menu">
				<li>
					<a class="active" href="#">
						Home
					</a>
					<ul class="dropdown">
						<li><a href="?controller=hethong&act=trangchu">Home 1</a></li>
						<li><a href="?controller=hethong&act=trangchu2">Home 2</a></li>
						<li><a class="active" href="?controller=hethong&act=trangchu3">Home 2</a></li>
					</ul>
				</li>
				<li>
					<a href="?controller=hethong&act=category">Categories</a>
				</li>
				<li>
					<a href="?controller=hethong&act=listings">
						Listings
					</a>
					<ul class="dropdown">
						<li><a href="?controller=hethong&act=postads">Ad Grid</a></li>
						<li><a href="?controller=hethong&act=listings">Ad Listing</a></li>
						<li><a href="?controller=hethong&act=details">Listing Detail</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="dropdown">
						<li><a href="?controller=hethong&act=about">About Us</a></li>
						<li><a href="?controller=hethong&act=service">Services</a></li>
						<li><a href="?controller=hethong&act=details">Ads Details</a></li>
						<li><a href="?controller=hethong&act=postads">Ads Post</a></li>
						<li><a href="?controller=hethong&act=pricing">Packages</a></li>
						<li><a href="?controller=hethong&act=testimonial">Testimonial</a></li>
						<li><a href="?controller=hethong&act=faq">FAQ</a></li>
						<li><a href="?controller=hethong&act=_404">404</a></li>

				
					</ul>
				</li>
				<li>
					<a href="#">Blog</a>
					<ul class="dropdown">
						<li><a href="?controller=hethong&act=blog">Blog - Right Sidebar</a></li>
						<li><a href="?controller=hethong&act=blogleftsidebar">Blog - Left Sidebar</a></li>
						<li><a href="?controller=hethong&act=blogfullwidth"> Blog full width </a></li>
						<li><a href="?controller=hethong&act=singleblog">Blog Details</a></li>

					
					</ul>
				</li>
				<li>
					<a href="?controller=hethong&act=contact">Contact Us</a>
				</li>
				<li>
					<a>My Account</a>
					<ul class="dropdown">
						<li><a href="?controller=hethong&act=accountprofilesetting"><i class="lni-home"></i> Account Home</a></li>
						<li><a href="?controller=hethong&act=accountmyads"><i class="lni-wallet"></i> My Ads</a></li>
						<li><a href="?controller=hethong&act=accountfavouriteads"><i class="lni-heart"></i> Favourite ads</a></li>
						<li><a href="?controller=hethong&act=accountarchivedads"><i class="lni-folder"></i> Archived</a></li>
						<li><a href="?controller=hethong&act=login"><i class="lni-lock"></i> Log In</a></li>
						<li><a href="?controller=hethong&act=signup"><i class="lni-user"></i> Signup</a></li>
						<li><a href="?controller=hethong&act=forgotpassword"><i class="lni-reload"></i> Forgot Password</a></li>
						<li><a href="?controller=hethong&act=accountclose"><i class="lni-close"></i>Account close</a></li>
				
					</ul>
				</li>
			</ul>

		</nav>