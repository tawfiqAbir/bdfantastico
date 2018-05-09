<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">      
		<link href="{{asset('frontend/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
		
		<link href="{{asset('frontend/themes/css/bootstrappage.css')}}" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{{asset('frontend/themes/css/flexslider.css')}}" rel="stylesheet"/>
		<link href="{{asset('frontend/themes/css/main.css')}}" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{asset('frontend/themes/js/jquery-1.7.2.min.js')}}"></script>
		<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>				
		<script src="{{asset('frontend/themes/js/superfish.js')}}"></script>	
		<script src="{{asset('frontend/themes/js/jquery.scrolltotop.js')}}"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="{{route('cart.index')}}">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="{{asset('frontend/themes/images/logo.png')}}" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="{{route('shop.index')}}">ALL Products</a></li>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="{{asset('img/slider/slider-5.jpg')}}" alt="" />
						</li>
						<li>
							<img src="{{asset('img/slider/slider-2.jpg')}}" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
											@foreach($products as $product)											
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="" /></a></p>
														<a href="{{route('shop.show',$product->slug)}}" class="title">{{$product->name}}</a><br/>
														<p class="price">{{'৳'.$product->price}}</p>
													</div>
												</li>
											@endforeach
												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">

												@foreach($products2 as $product)											
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="" /></a></p>
															<a href="{{route('shop.show',$product->slug)}}" class="title">{{$product->name}}</a><br/>
															<p class="price">{{'৳'.$product->price}}</p>
														</div>
													</li>
												@endforeach
																																							
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
											@foreach($products3 as $product)											
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="" /></a></p>
														<a href="{{route('shop.show',$product->slug)}}" class="title">{{$product->name}}</a><br/>
														<p class="price">{{'৳'.$product->price}}</p>
													</div>
												</li>
											@endforeach											
												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												@foreach($products4 as $product)											
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="" /></a></p>
															<a href="{{route('shop.show',$product->slug)}}" class="title">{{$product->name}}</a><br/>
															<p class="price">{{'৳'.$product->price}}</p>
														</div>
													</li>
												@endforeach

																																												
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="{{asset('frontend/themes/images/feature_img_2.png')}}" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="{{asset('frontend/themes/images/feature_img_1.png')}}" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="{{asset('frontend/themes/images/feature_img_3.png')}}" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/14.png')}}"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/35.png')}}"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/1.png')}}"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/2.png')}}"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/3.png')}}"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="{{asset('frontend/themes/images/clients/4.png')}}"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="{{asset('frontend/themes/images/logo.png')}}" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="{{asset('frontend/themes/js/common.js')}}"></script>
		<script src="{{asset('frontend/themes/js/jquery.flexslider-min.js')}}"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>