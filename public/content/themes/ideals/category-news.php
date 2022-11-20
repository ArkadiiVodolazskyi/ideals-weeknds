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

		<?php if (is_active_sidebar( 'sidebar-right')) { ?>
			<aside>
				<?php dynamic_sidebar( 'sidebar-right' ); ?>
			</aside>
		<?php } ?>

	</div>
</section>

<?php get_footer();
