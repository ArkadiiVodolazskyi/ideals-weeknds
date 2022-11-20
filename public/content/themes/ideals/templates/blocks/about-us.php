<?php
	$section_title = get_field('section_title');
	$about_us_description = get_field('about_us_description');
?>

<section class="about-us">
	<div class="wrapper">

		<?php if ($section_title) { ?>
			<h3 class="section-title">
				<?= $section_title; ?>
			</h3>
		<?php } ?>

		<?php if ($about_us_description) { ?>
			<div class="info">
				<?= $about_us_description; ?>
			</div>
		<?php } ?>
	</div>
</section>