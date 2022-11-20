<?php get_header(); ?>

<section class="intro">
	<svg class="bg-leaf">
		<use href="<?= IMG_DIR; ?>/icons.svg#leaf"></use>
	</svg>
	<div class="wrapper">
		<div class="content">
			<h2>News</h2>
		</div>
	</div>
</section>

<section class="news">
	<div class="wrapper">

		<main>
			<ul class="breadcrumbs">
				<li><a href="<?= get_home_url(); ?>">Home</a></li>
				<li><a>News</a></li>
			</ul>

			<div class="cards" data-cards="news-main">
				<article class="card">
					<div class="thumbnail-wrapper">
						<img class="thumbnail" src="<?= IMG_DIR; ?>/news/main-1.png">
					</div>
					<div class="content">
						<h4 class="title">Post Title Here</h4>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, quis bibendum arcu sagittis. Nisl praesent leo porttitor tortor auctor gravida dignissim. Magna feugiat augue maecenas sagittis, sagittis. Elementum dictumst sed ut sed accumsan. Urna integer egestas id eget ac..</p>
						<a class="read-more" href="">Read More</a>
					</div>
				</article>
				<article class="card">
					<div class="thumbnail-wrapper">
						<img class="thumbnail" src="<?= IMG_DIR; ?>/news/main-2.png">
					</div>
					<div class="content">
						<h4 class="title">Post Title Here</h4>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis, quis bibendum arcu sagittis. Nisl praesent leo porttitor tortor auctor gravida dignissim. Magna feugiat augue maecenas sagittis, sagittis. Elementum dictumst sed ut sed accumsan. Urna integer egestas id eget ac..</p>
						<a class="read-more" href="">Read More</a>
					</div>
				</article>
			</div>
			<div class="pagination">
				<a class="shift prev" href="" aria-disabled="true"></a>
				<ul class="pages">
					<li><a class="page" href="" data-current="">1</a></li>
					<li><a class="page" href="">2</a></li>
					<li><a class="page" href="">3</a></li>
				</ul>
				<a class="shift next" href=""></a>
			</div>
		</main>

		<aside>
			<section class="news-aside">
				<h3 class="section-title">Latest posts</h3>
				<div class="cards" data-cards="news-aside">
					<a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-1.png">
							</div>
							<div class="content">
								<h4 class="title">Heading One</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a><a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-2.png">
							</div>
							<div class="content">
								<h4 class="title">Heading Two</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a><a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/latest-3.png">
							</div>
							<div class="content">
								<h4 class="title">Heading Three</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a>
				</div>
			</section>
			<section class="news-aside">
				<h3 class="section-title">Recent releases</h3>
				<div class="cards" data-cards="news-aside">
					<a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/recent-1.png">
							</div>
							<div class="content">
								<h4 class="title">Heading One</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a><a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/recent-2.png">
							</div>
							<div class="content">
								<h4 class="title">Heading Two</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a><a class="card" href="">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= IMG_DIR; ?>/news/recent-3.png">
							</div>
							<div class="content">
								<h4 class="title">Heading Three</h4>
								<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis elit venenatis tempus porta risus. Eu tristique vitae fames a. Bibendum duis in facilisis auctor senectus nisl vel.</p>
							</div>
						</article>
					</a>
				</div>
			</section>
		</aside>

	</div>
</section>

<?php get_footer();
