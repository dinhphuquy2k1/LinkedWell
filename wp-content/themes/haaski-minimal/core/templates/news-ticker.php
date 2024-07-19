<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

?>

<div class="ticker-wrapper">

	<div class="ticker">

		<h3><?php echo savana_lite_setting('haaski_minimal_news_ticker_title', esc_html__( 'HOT', 'haaski-minimal' ));?></h3>

		<ul>

			<?php

				$args = array(
					'post_type' => 'post',
					'posts_per_page' => intval(savana_lite_setting('haaski_minimal_news_ticker_limit', 5)),
					'orderby' => esc_attr(savana_lite_setting('haaski_minimal_news_ticker_order', 'date')),
					'order' => esc_attr(savana_lite_setting('haaski_minimal_news_ticker_sort_order', 'desc')),
				);

				if ( is_numeric(savana_lite_setting('haaski_minimal_news_ticker_category')) ) :
					$args['cat'] = savana_lite_setting('haaski_minimal_news_ticker_category');
				endif;

				$recent_posts = new WP_Query($args);

				if ($recent_posts->have_posts()) : while ($recent_posts->have_posts()) : $recent_posts->the_post();

			?>

					<li><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></li>

			<?php

				endwhile;
				endif;
				wp_reset_postdata();

			?>

		</ul>

	</div>

 </div>