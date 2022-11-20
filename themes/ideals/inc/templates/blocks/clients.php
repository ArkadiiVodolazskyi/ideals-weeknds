<?php
	$section_title = get_field('section_title');
	$section_subtitle = get_field('section_subtitle');
	$posts = get_posts([
		'post_type' => 'clients',
		'numberposts' => -1
	]);

	if (count($posts) > 0) {
?>
	<section class="clients">
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

			<?php if (count($posts) > 0) { ?>
				<div class="cards" data-cards="clients">
					<?php foreach ($posts as $post) { ?>
						<a class="card" href="<?= get_home_url(); ?>" title="<?= $post->post_title; ?>">
							<img src="<?= get_the_post_thumbnail_url($post->ID, [210, 106]); ?>" alt="<?= $post->post_title; ?>">
						</a>
					<?php } ?>
				</div>
			<?php } ?>

		</div>
	</section>
<?php } ?>