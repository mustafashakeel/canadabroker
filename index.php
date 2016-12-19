<?php include 'lib/header.php'; ?>

<!-- IMPORTANT! You can start to editing from here -->

	<!-- Header -->
		
	<header>
		<div class="wrapper">
			
			<!-- Add your logo -->
			<img class="logo slide-left" src="<?php echo $logo; ?>" alt="Canada Broker" />

			<!-- Menu -->
			<ul id="menu" class="slide-right">
				<li><a href="#top" title="Home">Home</a></li>
				<li><a href="Lumber.php" title="Lumber">Lumber</a></li>
				<li><a class='inline' href="#inline_content">Get Quote</a></li>
				<li><a href="single.php" title="About us">About us</a></li>
				<li><a href="#footer" title="Contact">Contact</a></li>
                
			</ul>
			
			<div class="responsive-menu"></div>
			
			<!-- Responsive Menu -->
			<ul id="responsive-menu">
				<li><a href="#top" title="Home">Home</a></li>
				<li><a href="lumber.php" title="Lumber">Lumber</a></li>
				<li><a class='inline' href="#inline_content">Get Quote</a></li>
				<li><a href="single.php" title="About us">About us</a></li>
				<li><a href="#footer" title="Contact">Contact</a></li>
			</ul>

		</div>
	</header>
	<!-- Header -->

	<!-- restaurant_booking -->
	<div id="top"></div>
	
		<!--open slideshow-->
		<ul class="rslides" id="slide">
			   <li><img src="images/restaurant-1.jpg" alt="" /></li>
			   <li><img src="images/restaurant-2.jpg" alt="" /></li>
			   <li><img src="images/restaurant-3.jpg" alt="" /></li>
		</ul>
		<!--close slideshow-->	
	
		<div class="restaurant_booking">		
			<div class="wrapper">
			
				<div class="one-column slide-down">
					<h1>Canada lumber & forest products  </h1>
					<p>We are your partner in Canada and make sure you get the best price, quality, quantity & specification available to your door step. Click on get quote to contact us and know the details and we will update you with  prices, rules &amp; procedures.</p>
                    <p>Call now  : <a href="tel:16047670944" title="16047670944">1.604.767.0944</a></p> 
					<a class='inline' href="#inline_content"><div class="button modern-white aligncenter">Get Quote</div></a>
					
					<!-- colorbox -->
					<div style='display:none'>
						<div id='inline_content' style='padding:10px; background:#f2f2f2;'>					
							
							<!-- form -->
								<?php include 'lib/booking-form.html'; ?>
							<!-- form -->
						
						</div>				
					</div>
					<!-- colorbox -->
					
				</div>
								
			</div>
		</div>
		
	<!-- restaurant_booking -->

	<!-- three-columns -->
	
		<div id="menu-item-2" class="three-columns">
			<div class="wrapper slide-down">	

			  <h2>Canada Broker is your agent  who will supply you forest products like lumber, pulp & paper </h2>
				
				<div class="left-column">
					<img class="framed" src="images/restaurant-1.jpg" alt="" />
					<h3>Products &amp; Services</h3>
					<p>Check out the list of our products &amp; services.</p>
				  <a href="lumber.php"><div class="button">Products & Services</div></a>
				</div>
				
				<div class="middle-column">
					<img class="framed" src="images/restaurant-2.jpg" alt="" />
					<h3>Get Quote</h3>
					<p>Find out more and contact us 
                   we will update you the latest quotes</p>
				  <a class='inline' href="#inline_content"><div class="button">Get Quote</div></a>
				</div>
				
				<div class="right-column">
					<img class="framed" src="images/restaurant-3.jpg" alt="" />
					<h3>About Canada Broker </h3>
					<p>Know our history, meet our team and discover our philosophy.</p>
					<a href="single.php"><div class="button">Know more about us</div></a>
				</div>
				
				<div class="clear"></div>			
							
			</div>
		</div>
	
	<!-- three-columns -->

	<!-- one-column -->
	
		<div class="one-column colored">
			<div class="wrapper slide-down">
				<blockquote>Call us anytime at 1.604.767.0944</blockquote>
			</div>
		</div>
		
	<!-- one-column -->


	<!-- left-quote -->
	
		<div class="left-quote">
			<div class="wrapper">
				
				<div class="right-column slide-right">
					<h2>Featured products</h2>
					
					<!-- product -->
					<div class="product">
							<div class="price"></div>
							<h3>SPF</h3>
							<p>Spruce, Pine, and Fir, the three softwood species that make up SPF lumber products, are processed together due to similar appearance and properties. SPF represents the largest reserve of commercial softwood in Canada.</p>
						</div>
						<hr />
					<!-- product -->

					<!-- product -->
		 

					<!-- product -->
<div class="product">
							<div class="price"></div>
							<h3>Hemlock Fir</h3>
			<p>Consists of two species: Hemlock and Pacific Silver Fir. Due to their similarities in appearance and composition, they are commonly logged, processed, and marketed under the collective reference Fir.</p>
				  </div>
						<hr />
					<!-- product -->					
				</div>
				
				<div class="left-column slide-left">
					<h2>&nbsp;</h2>
			  </div>
				
				<div class="clear"></div>				
			</div>
		</div>
	
	<!-- left-quote -->

	<!-- testimonials -->
	
		<div class="testimonials colored background">
			<div class="wrapper">
			
				<h2>Testimonials</h2>

				<div class="flexslider slide-down">
				  <ul class="slides">
				    <li>
				    <blockquote>“Canadabroker are indeed are our agents who made sure they procure for the right lumber at short notice and according to our specifications”</blockquote>
				    <small><strong>Ahmed Ziyad VP , Nesma group</strong>, </small>
				    </li>
				    <li>
				    <blockquote>“Canada Broker gave us indept knowledge of the lumber industry which made us succeed in this industry”</blockquote>
				    <small><strong>Satish Nagarajan</strong>, ACI Wood Suppliers</small>
				    </li>
				  </ul>
				</div>

			</div>
		</div>
		
	<!-- testimonials -->
	
<?php include 'lib/footer.php'; ?>