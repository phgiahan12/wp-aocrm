<?php
add_action( 'widgets_init', 'hello_reg_wg_related_td' );
function hello_reg_wg_related_td() {
	register_widget( 'hello_wg_related_td' );
}

class hello_wg_related_td extends WP_Widget
{
	/**
	 * Holds widget settings defaults, populated in constructor.
	 *
	 * @var array
	 */
	protected $defaults;
	/**
	 * Constructor
	 *
	 * @return HRM_Widget_Recent_Posts
	 */
	function __construct()
	{
		$this->defaults = array(
			'title'         => 'Công việc tương tự',
			'limit'         => 4,
		);
		parent::__construct(
			'hello-related-td-widget',
			__( '[TADA] Related Job', 'hello' ),
			array(
				'classname'   => 'hello-related-td-widget',
			)
		);
	}
	/**
	 * Display widget
	 *
	 * @param array $args     Sidebar configuration
	 * @param array $instance Widget settings
	 *
	 * @return void
	 */
	function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		extract( $instance );
		extract( $args );
		global $post;
		$cr_post = $post->ID;
		$query_args = array(
			'posts_per_page'      => $limit,
			'post_status'         => 'publish',
			'post_type'           => 'tuyen-dung',
			'ignore_sticky_posts' => true,
		);
		if ($cr_post) {
			$query_args['post__not_in'] = array($cr_post);
		}
		$terms_obj = wp_get_post_terms( get_the_id(), 'job-cat' );
		$terms     = array();
		foreach ($terms_obj as $term_ob) {
			$terms[] = $term_ob->term_id;
		}
		if (count($terms) > 0) {
			$query_args['tax_query'] =   array(
				array(
					'taxonomy'         => 'job-cat',
					'field'            => 'id',
					'terms'            => $terms,
					'include_children' => true,
				),
			);
		}

		$query = new WP_Query( $query_args );
		if ( ! $query->have_posts() ) {
			return;
		} ?>
		
		<div id="related-td">
			<?php if ( $title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base ) ) { ?>
				<div class="title-block"><?= $title ?></div>
			<?php } ?>
			
			<div class="list-posts-td">
				<?php while ( $query->have_posts() ) { $query->the_post(); ?>
					<div class="item-td">
						
						<h4 class="title-related-td"><a class="link-post" href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h4>
						<div class="td-meta">
							<?php if (function_exists('get_field')) { ?>
								<?php if (get_field('muc_luong')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/luong.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title">Mức lương</h3>
											<p class="image-box-description"><?php the_field('muc_luong') ?></p>
										</div>
									</div>
								<?php } if (get_field('so_luong')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/slg.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title">Số lượng</h3>
											<p class="image-box-description"><?php the_field('so_luong') ?></p>
										</div>
									</div>
								<?php } if (get_field('gioi_tinh')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/gioitinh.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title">Giới tính</h3>
											<p class="image-box-description"><?php the_field('gioi_tinh') ?></p>
										</div>
									</div>
								<?php } if (get_field('hinh_thuc_lam_viec')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/tgian.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title fsz-15">Hình thức làm việc</h3>
											<p class="image-box-description"><?php the_field('hinh_thuc_lam_viec') ?></p>
										</div>
									</div>
								<?php } if (get_field('cap_bac')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/capbac.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title">Cấp bậc</h3>
											<p class="image-box-description"><?php the_field('cap_bac') ?></p>
										</div>
									</div>
								<?php } if (get_field('kinh_nghiem')){ ?>
									<div class="image-box-wrapper">
										<figure class="image-box-img">
											<img src="<?= get_stylesheet_directory_uri() ?>/tuyen-dung/img/kinhnghiem.svg" >
										</figure>
										<div class="image-box-content">
											<h3 class="image-box-title">Kinh nghiệm</h3>
											<p class="image-box-description"><?php the_field('kinh_nghiem') ?></p>
										</div>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" class="td-view-detail">Xem chi tiết >></a>
					</div>
				<?php } ?>
			</div>
		</div>

		<?php wp_reset_postdata();

	}
	/**
	 * Update widget
	 *
	 * @param array $new_instance New widget settings
	 * @param array $old_instance Old widget settings
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance )	{
		return $new_instance;
	}
	/**
	 * Display widget settings
	 *
	 * @param array $instance Widget settings
	 *
	 * @return void
	 */
	function form( $instance )
	{
		$instance = wp_parse_args( $instance, $this->defaults );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title', 'hrm' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $instance['title']; ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'limit' ) ); ?>"><?php _e( 'Number Of Posts', 'hrm' ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'limit' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'limit' ) ); ?>" type="text" size="2" value="<?php echo $instance['limit']; ?>">
		</p>
		<div style="clear: both;"></div>
		<?php
	}
}