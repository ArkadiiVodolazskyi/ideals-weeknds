<?php
	$section_title = get_field('section_title');
	$section_subtitle = get_field('section_subtitle');
	$slides = get_field('slides');
?>

<section class="slider-section">
	<img class="bg-buy" src="<?= IMG_DIR; ?>/buy-now.png">
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

		<?php if (count($slides) > 0) { ?>
			<div class="slider-wrapper">
				<ul class="cards" data-cards="merch" data-slider="merch">

					<?php foreach ($slides as $slide) { ?>
						<li class="card">
							<div class="info">
								<h4 class="title">
									<?= $slide['title']; ?>
								</h4>
								<div class="description">
									<?= $slide['description']; ?>
								</div>
							</div>
							<div class="thumbnail-wrapper">
								<img class="thumbnail" src="<?= $slide['thumbnail']; ?>">
							</div>
						</li>
					<?php } ?>

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
		<?php } ?>

	</div>
</section>