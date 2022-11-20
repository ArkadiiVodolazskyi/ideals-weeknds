<?php

if( ! defined('ABSPATH') ) exit;

function register_latest_posts() {
	register_widget( 'Latest_Posts_Widget' );
}
add_action( 'widgets_init', 'register_latest_posts' );

// Добавляем новый виджет
class Latest_Posts_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'latest_posts_widget',
			'Latest Posts Widget',
			['description' => '']
		);
	}

	// Front output
	public function widget( $args, $instance ) {

		$title = apply_filters( 'widget_title', $instance['title'] );
		$category = $instance['category'];
		$quantity = $instance['quantity'];

		$posts = get_posts([
			'post_status' => 'publish',
			'category__in' => $category,
			'posts_per_page' => $quantity,
			'order' => 'DESC',
		]);
	?>
		<section class="news-aside">

			<?php if ($title) { ?>
				<h3 class="section-title">
					<?= $title; ?>
				</h3>
			<?php } ?>

			<?php if (count($posts) > 0) { ?>
				<div class="cards" data-cards="news-aside">
					<?php foreach ($posts as $post) { ?>
						<a class="card" href="<?= get_post_permalink($post->ID); ?>">
							<article>
								<div class="thumbnail-wrapper">
									<img class="thumbnail" src="<?= get_the_post_thumbnail_url($post->ID, [300, 300]); ?>">
								</div>
								<div class="content">
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
			<?php } ?>

		</section>
	<?php }

	// Admin view
	public function form( $instance ) {
		$title = @ $instance['title'] ?: 'Title';
		$category = @ $instance['category'] ?: 1;
		$quantity = @ $instance['quantity'] ?: '1';
	?>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_html( $title ); ?>">

		<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Category:' ); ?></label>
		<?php
			wp_dropdown_categories([
				'class' => 'widefat',
				'id' => $this->get_field_id( 'category' ),
				'name' => $this->get_field_name( 'category' ),
				'selected' => $category,
				'show_count' => true
			]);
		?>

		<label for="<?php echo $this->get_field_id( 'quantity' ); ?>"><?php _e( 'Number of posts:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'quantity' ); ?>" name="<?php echo $this->get_field_name( 'quantity' ); ?>" type="text" value="<?php echo esc_attr( $quantity ); ?>">
	<?php }

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? ( $new_instance['title'] ) : '';
		$instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';
		$instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? strip_tags( $new_instance['quantity'] ) : '';

		return $instance;
	}
}