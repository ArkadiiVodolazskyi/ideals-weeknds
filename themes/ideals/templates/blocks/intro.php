<?php
	$section_title = get_field('section_title');
	$section_subtitle = get_field('section_subtitle');
	$intro_button = get_field('intro_button');
	$intro_small_text = get_field('intro_small_text');
?>

<section class="intro">
	<svg class="bg-leaf">
		<use href="<?= IMG_DIR; ?>/icons.svg#leaf"></use>
	</svg>
	<div class="wrapper">
		<div class="content">

			<?php if ($section_title) { ?>
				<h1><?= $section_title; ?></h1>
			<?php } ?>

			<?php if ($section_subtitle) { ?>
				<p><?= $section_subtitle; ?></p>
			<?php } ?>

			<?php if ($intro_button) { ?>
				<button class="button">
					<span><?= $intro_button; ?></span>
					<svg>
						<use href="<?= IMG_DIR; ?>/icons.svg#apple"></use>
					</svg>
				</button>
			<?php } ?>

			<?php if ($intro_small_text) { ?>
				<small><?= $intro_small_text; ?></small>
			<?php } ?>

		</div>
		<a class="next-section" href="#hot-news">
			<svg width="23" height="15">
				<use href="<?= IMG_DIR; ?>/icons.svg#chevron-down"></use>
			</svg>
		</a>
	</div>
</section>