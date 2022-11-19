<?php get_header();
/* Template Name: Homepage */
?>

<main class="main-home">
	<section class="intro">
		<svg class="bg-leaf">
			<use href="<?= IMG_DIR; ?>/icons.svg#leaf"></use>
		</svg>
		<div class="wrapper">
			<div class="content">
				<h1>Blinding Lights</h1>
				<p>“Blinding Lights,” the second single to The Weeknd's fourth studio album After Hours, released on November 27, 2019.</p>
				<button class="button">
					<span>Listen now</span>
					<svg>
						<use href="<?= IMG_DIR; ?>/icons.svg#apple"></use>
					</svg>
				</button>
				<small>No credit cards required</small>
			</div>
			<a class="next-section" href="#hot-news">
				<svg width="23" height="15">
					<use href="<?= IMG_DIR; ?>/icons.svg#chevron-down"></use>
				</svg>
			</a>
		</div>
	</section>
	<section id="hot-news" class="hot-news">
		<div class="wrapper">
			<h3 class="section-title">Hot News</h3>
			<h4 class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
			<div class="cards" data-cards="news-default">
				<a class="card" href="">
					<article>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-1.png">
						</div>
						<div class="info">
							<h4 class="title">Heading One</h4>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
						</div>
					</article>
				</a><a class="card" href="">
					<article>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-2.png">
						</div>
						<div class="info">
							<h4 class="title">Heading Two</h4>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
						</div>
					</article>
				</a><a class="card" href="">
					<article>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-3.png">
						</div>
						<div class="info">
							<h4 class="title">Heading Three</h4>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
						</div>
					</article>
				</a>
			</div>
		</div>
	</section>
	<section class="merch">
		<img class="bg-buy" src="<?= IMG_DIR; ?>/buy-now.png">
		<div class="wrapper">
			<h3 class="section-title">Merch</h3>
			<h4 class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
			<div class="slider-wrapper">
				<ul class="cards" data-cards="merch" data-slider="merch">
					<li class="card">
						<div class="info">
							<h4 class="title">AFTER HOURS POSTER 001</h4>
							<div class="description">LIMITED QUANTITIES AVAILABLE.<br><br>24" X 30"<br><br>DIGITAL ALBUM DELIVERED VIA EMAIL UPON PURCHASE.<br><br>DIGITAL DOWNLOADS NOT AVAILABLE TO CUSTOMERS OUTSIDE OF THE US.<br><br>ITEMS AVAILABLE SEPARATELY FOR PURCHASE.</div>
						</div>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/merch/1.png">
						</div>
					</li>
					<li class="card">
						<div class="info">
							<h4 class="title">AFTER HOURS POSTER 001</h4>
							<div class="description">LIMITED QUANTITIES AVAILABLE.<br><br>24" X 30"<br><br>DIGITAL ALBUM DELIVERED VIA EMAIL UPON PURCHASE.<br><br>DIGITAL DOWNLOADS NOT AVAILABLE TO CUSTOMERS OUTSIDE OF THE US.<br><br>ITEMS AVAILABLE SEPARATELY FOR PURCHASE.</div>
						</div>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/merch/1.png">
						</div>
					</li>
					<li class="card">
						<div class="info">
							<h4 class="title">AFTER HOURS POSTER 001</h4>
							<div class="description">LIMITED QUANTITIES AVAILABLE.<br><br>24" X 30"<br><br>DIGITAL ALBUM DELIVERED VIA EMAIL UPON PURCHASE.<br><br>DIGITAL DOWNLOADS NOT AVAILABLE TO CUSTOMERS OUTSIDE OF THE US.<br><br>ITEMS AVAILABLE SEPARATELY FOR PURCHASE.</div>
						</div>
						<div class="thumbnail-wrapper">
							<img class="thumbnail" src="<?= IMG_DIR; ?>/merch/1.png">
						</div>
					</li>
				</ul>
				<div class="slider-controls">
					<ul class="slider-dots">
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<div class="slider-buttons">
						<button data-controls="prev"></button>
						<button data-controls="next"></button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="clients">
		<div class="wrapper">
			<h3 class="section-title">Clients</h3>
			<div class="cards" data-cards="clients">
				<div class="card" title="Somesuch">
					<img src="<?= IMG_DIR; ?>/clients/somesuch.png" alt="Somesuch">
				</div>
				<div class="card" title="Electric Lady Studios">
					<img src="<?= IMG_DIR; ?>/clients/electric-lady-studios.png" alt="Electric Lady Studios">
				</div>
				<div class="card" title="Mathematic">
					<img src="<?= IMG_DIR; ?>/clients/mathematic.png" alt="Mathematic">
				</div>
				<div class="card" title="Republic Records">
					<img src="<?= IMG_DIR; ?>/clients/republic-records.png" alt="Republic Records">
				</div>
				<div class="card" title="Ubem">
					<img src="<?= IMG_DIR; ?>/clients/ubem.png" alt="Ubem">
				</div>
				<div class="card" title="Kobalt">
					<img src="<?= IMG_DIR; ?>/clients/kobalt.png" alt="Kobalt">
				</div>
			</div>
		</div>
	</section>
	<section class="about-us">
		<div class="wrapper">
			<h3 class="section-title">About Us</h3>
			<div class="info">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor cras a, id accumsan. Ac feugiat sapien ornare tristique eget eget ornare. Egestas tristique eget quam molestie platea urna commodo quisque a. Commodo diam at pharetra eget pretium proin euismod id velit. Sed eu diam morbi consectetur faucibus hac id ut. Odio risus arcu, sapien vitae porttitor vitae neque, fermentum. Adipiscing ut sit massa, lobortis vel.</p>
				<p>Proin proin magnis pharetra tristique. Amet, tellus turpis dui ut massa cursus in donec. Morbi venenatis dictum velit, sit ipsum tristique. Ornare tempor ipsum amet eget. Ornare consectetur arcu euismod ac. Non amet diam et ullamcorper ac pellentesque mauris aliquam. Pellentesque egestas in consequat, eget arcu mattis. </p>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>