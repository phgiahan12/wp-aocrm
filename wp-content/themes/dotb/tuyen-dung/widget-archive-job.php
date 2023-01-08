<?php
add_action( 'widgets_init', 'hello_reg_wg_archive_td' );
function hello_reg_wg_archive_td() {
	register_widget( 'hello_wg_archive_td' );
}

class hello_wg_archive_td extends WP_Widget
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
			'hello-archive-td-widget',
			__( '[TADA] archive Job', 'hello' ),
			array(
				'classname'   => 'hello-archive-td-widget',
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
		
		$paged      = (get_query_var('paged')) ? get_query_var('paged') : get_query_var('page');
		$paged      = ($paged) ? $paged : 1;
		$query_args = array(
			'posts_per_page' => $limit,
			'post_status'    => 'publish',
			'post_type'      => 'tuyen-dung',
			'paged'          => $paged,
		);

		if (is_tax()) {
			$terms = get_queried_object()->term_id;
			$query_args['tax_query'] =   array(
				array(
					'taxonomy'         => 'job-cat',
					'field'            => 'id',
					'terms'            => $terms,
					'include_children' => true,
				),
			);
		}

		// $query = new WP_Query( $query_args );
		query_posts( $query_args );
		if ( have_posts() ) { ?>

			<div id="list_posts_td_wp clearfix">

				<div class="list-posts-td">
					<?php while ( have_posts() ) { the_post(); ?>
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
				<div class="hello_pagination">
					<?php hello_pagination() ?>
				</div>
			</div>
		<?php } else { ?>

			<div id="list_posts_td_wp clearfix">
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'hello-elementor' ); ?></p>
				</div>
			</div>
		<?php } ?>

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