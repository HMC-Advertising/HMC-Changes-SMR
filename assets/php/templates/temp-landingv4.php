<?php
/* 
	Template Name: Landing Page V4 Snow 
*/
	get_header();
	$weather = $_GET["weather"];
?>

<section id="snow" class="landingpage Winter">
	<!-- header -->
	<div class="header">
			<div class="col-lg-12">
				<div class="container">
					<div class="col-xs-12 col-sm-7">
						<h1>Stowe just got a fresh coat.</h1>
						<a href="https://www.stoweonestore.com/eStore/Content/Commerce/Products/DisplayProducts.aspx?ProductGroupCode=1000002&ProductCategoryCode=826" target="_blank" class="button red" id="Weatherapres_Ready">Ready. Set. Ski!</a>
						
					</div>
				</div>
			</div>
		</div>
	<!-- \header -->

	<!-- Brand -->
	<div class=" brand">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<p>Whatever you crave, we’ve got it all. From world-class dining, drinks and cocktails, to Vermont’s legendary terrain and everything in-between, the ultimate mountain experience is yours for the taking. Take it. </p>
				</div>
			</div>
		</div>
	</div>
	<!-- \Brand -->

	<!-- Triangle -->
	<div class="triangle">
		<div class="col-lg-12">
			<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/triangle.png'); ?>">
		</div>
	</div>
	<!-- \Triangle -->

	<!-- Bypass -->
	<div class="bypass">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-sm-12">
					<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/bypassLogo.png'); ?>">
					<h1>A legendary experience awaits. Without the wait. </h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>ByPass is a feature you can add to your Evolution Stowe Card. And it’s as easy as: Add. Grab. And Go!</p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>

					
					<a href="/ski-ride/bypass/" class="button red" id="Weatherapres_Discover">Discover the Benefits</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Bypass -->

	<!-- Seize -->
	<div class="seize">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Seize the mountain!</h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>Go Direct-to-Lift with your Evolution Stowe Card for everyday you load online.</p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="https://www.stoweonestore.com/eStore/Content/Commerce/Products/DisplayProducts.aspx?ProductGroupCode=1000002&ProductCategoryCode=826"  target="_blank" class="button red" id="Weatherapres_Ready2">Ready. Set. Ski!</a>
					<p class="note">Please Note: Lift access products are non-refundable and non-transferable</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Seize -->

	<!-- Lodging -->
	<div class="lodging">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Take me to my room.</h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>We have the perfect room waiting for you and your every need. From the Classic Guest Room to our Mountain Cabins, we’ve got you covered.</p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="/plan/lodging/" class="button red" id="Weatherapres_Book">Book Now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Lodging -->

</section>

<script type='text/javascript'>
	(function($){
		$('#Weatherapres_Book').on('click', function() {
			var href = $(this).attr('href');
				_gaq.push(['_trackEvent', 'weatherapres', 'book', href]);
		});
		$('#Weatherapres_Discover').on('click', function() {
			var href = $(this).attr('href');
	        _gaq.push(['_trackEvent', 'weatherapres', 'discover', href]);
		});
		$('#Weatherapres_Ready').on('click', function() {
			var href = $(this).attr('href');
	        _gaq.push(['_trackEvent', 'weatherapres', 'ready', href]);
		});
		$('#Weatherapres_Ready2').on('click', function() {
			var href = $(this).attr('href');
	        _gaq.push(['_trackEvent', 'weatherapres', 'readyset', href]);
	       
		});
	}(jQuery))
</script>



<?php get_footer(); ?>