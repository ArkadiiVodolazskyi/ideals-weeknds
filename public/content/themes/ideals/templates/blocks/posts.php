<?php
	$section_title = get_field('section_title');
	$section_subtitle = get_field('section_subtitle');
	$posts_category = get_field('posts_category');
?>

<section id="hot-news" class="posts">
	<div class="wrapper">

		<?php if ($section_title) { ?>
			<h3 class="section-title">
				<?= $section_title; ?>
			</h3>
		<?php } ?>

		<?php if ($section_subtitle) { ?>
			<h4 class="section-subtitle">
				<?= $section_subtitle; ?>
			</h4>
		<?php } ?>

		<?php if ($posts_category) {
			$posts = get_posts([
				'post_type' => 'post',
				'numberposts' => 3,
				'category' => $posts_category
			]);

			if (count($posts) > 0) {
		?>
			<div class="cards" data-cards="news-default">

				<?php foreach ($posts as $post) { ?>
					<a class="card" href="<?= get_post_permalink($post->ID); ?>">
						<article>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= get_the_post_thumbnail_url($post->ID, [300, 300]); ?>">
							</div>
							<div class="info">
								<h4 class="title">
									<?= $post->post_title; ?>
								</h4>

								<?php if ($post->post_excerpt) { ?>
									<p class="excerpt">
										<?= $post->post_excerpt; ?>
									</p>
								<?php } ?>
							</div>
						</article>
					</a>
				<?php } ?>

			</div>
		<?php } } ?>

	</div>
</section>