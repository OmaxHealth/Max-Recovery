<?php get_template_part('content','header'); ?>
<?php the_post(); ?>

<main id="home">
	<section id="hero">
		<div class="upper">
			<div class="container">
				<h2>
					<span class="ln1">Train harder.</span>
					<span class="ln2">Recover faster.</span>
					<span class="ln3">Defy your limits.</span>
					<span class="ln4">GUARANTEED!</span>
				</h2>		
			</div>
		</div>
		<div class="lower">
			<div class="row r1">
				<div class="container">
					<div class="productGroup">
						<img class="product" src="<?php bloginfo('template_directory'); ?>/images/product-box.png" alt="Omax Max Recovery" />
						<img class="seal" src="<?php bloginfo('template_directory'); ?>/images/product-seal.png" alt="100% Money Back Guarantee" />
					</div>
					<a class="button" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
				</div>
			</div>
			<div class="row r2">
				<div class="container">
					<div class="flexbox">
						<div class="box">2,000 mg omega-3</div>
						<div class="box">NSF Certified for Sport</div>
						<div class="box">93.9% pure</div>
					</div>			
				</div>
			</div>
		</div>		
	</section>
	
	<section id="fuel">
		<div class="container">
			<div class="text">
				<h2>
					<span class="ln1">Fuel your game with</span>
					<span class="ln2">2,000 mg of omega-3</span>
				</h2>
				<p>Max Recovery gives you a 2,000 mg blast of omega-3s to fight inflammation and boost athletic performance.</p>
				<ul>
					<li><strong>IMPROVED MUSCLE PROTEIN SYNTHESIS</strong> Reduce inflammation to avoid delayed-onset muscle soreness.</li>
					<li><strong>FASTER REBOUND</strong> Accelerate muscle recovery to get more mileage out of your training.</li>	
					<li><strong>OPTIMAL FITNESS</strong> Stay in top shape with better joint, heart, and brain health.</li>	
				</ul>			
			</div>
		</div>
	</section>
	
	<section id="strength">
		<div class="container">
			<div class="inner">
				<h2>Pro-level strength for all athletes</h2>
				<p>Only Omax3 has the patented ProResolv&trade; formula with four times more EPA than DHA. Used by athletes, coaches and healthcare professionals, our patented 2,000 mg formula is one of the most potent omega-3 supplements on the market.</p>
				<div class="flexbox">
					<div class="box">
						<img class="icon" src="<?php bloginfo('template_directory'); ?>/images/strength-icon1.svg" alt="icon" />
						<h3>ratio of EPA to DHA<br/> for extra<br/> inflammation-<br/>fighting power</h3>
					</div>
					<div class="box">
						<img class="icon" src="<?php bloginfo('template_directory'); ?>/images/strength-icon2.svg" alt="icon" />
						<h3>93.9% ultra-pure<br/> omega-3<br/> fatty acids</h3>
					</div>
					<div class="box">
						<img class="icon" src="<?php bloginfo('template_directory'); ?>/images/strength-icon3.svg" alt="icon" />
						<h3>Developed by<br/> Yale-affiliated<br/> scientists</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="midCTA">
		<div class="container">
			<div class="flexbox">
				<div class="box"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/midcta-icon1.svg" alt="icon" /></div>
				<div class="box"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/midcta-icon2.svg" alt="icon" /></div>
				<div class="box"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/midcta-icon3.svg" alt="icon" /></div>
				<div class="box"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/midcta-icon4.svg" alt="icon" /></div>
			</div>
			<a class="button" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
		</div>
	</section>

	<section id="certified">
		<div class="container">
			<div class="text">
				<h2>NSF Certified for Sport</h2>
				<p>Max Recovery meets strict NSF guidelines for professional athletes.</p>
				<ul>
					<li>Accurate labeling</li>
					<li>No unsafe levels of contaminants, prohibited substances, masking agents</li>
					<li>Tested for more than 200 banned or prohibited substances</li>
				</ul>
			</div>
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/certified-nsf-logo.png" alt="NSF Certified for Sports" />
		</div>
	</section>	
	
	<section id="work">
		<div class="container">
			<div class="inner">
				<h2><span>Work Hard. Play Hard.</span> Life to the Max.</h2>
			</div>
		</div>
	</section>
	
	<section id="lowerCTA">
		<div class="container">
			<h2>MAX Recovery</h2>
			<div class="productGroup">
				<img class="product" src="<?php bloginfo('template_directory'); ?>/images/product-box.png" alt="Omax Max Recovery" />
				<img class="seal" src="<?php bloginfo('template_directory'); ?>/images/product-seal.png" alt="100% Money Back Guarantee" />
			</div>
			<div class="price">
				<span class="ln1">Save up to 50%*</span>
				<span class="ln2">+FREE SHIPPING</span>
			</div>
			<a class="button" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
		</div>
	</section>
	
</main>

<?php get_template_part('content','footer'); ?>