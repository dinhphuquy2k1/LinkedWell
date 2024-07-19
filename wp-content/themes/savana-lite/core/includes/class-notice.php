<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if( !class_exists( 'savana_lite_admin_notice' ) ) {

	class savana_lite_admin_notice {
	
		/**
		 * Constructor
		 */
		 
		public function __construct( $fields = array() ) {

			if ( 
				!get_option( 'savana-lite-dismissed-notice') &&
				version_compare( PHP_VERSION, SAVANA_LITE_MIN_PHP_VERSION, '>=' )
			) {

				add_action( 'admin_notices', array(&$this, 'admin_notice') );
				add_action( 'admin_head', array( $this, 'dismiss' ) );
				add_action( 'admin_init', array(&$this, 'add_script') ,11);

            }

		}
        
		 /**
		 * Loads the notice style
		 */

		public function add_script() {

			global $wp_version;

			$file_dir = get_template_directory_uri() . '/core/admin/assets/';
			wp_enqueue_style ( 'savana-lite-notice', $file_dir.'css/notice.css' );

		}
        
        
        /**
		 * Dismiss notice.
		 */
		
		public function dismiss() {

			if ( isset( $_GET['savana-lite-dismiss'] ) && check_admin_referer( 'savana-lite-dismiss-action' ) ) {
		
				update_option( 'savana-lite-dismissed-notice', intval($_GET['savana-lite-dismiss']) );
				remove_action( 'admin_notices', array(&$this, 'admin_notice') );
				
			} 
		
		}

		/**
		 * Admin notice.
		 */
		 
		public function admin_notice() {
			
		?>
			
            <div class="notice notice-warning is-dismissible">
                
				<p>
            		<strong>
                        <?php esc_html_e( 'Upgrade to the premium version of Savana, to enable 600+ Google Fonts, Unlimited sidebars, Portfolio section and much more.', 'savana-lite' );  ?>
                    </strong>
                </p>
            	
                <p class="notice-coupon-message">
					<span class="dashicon dashicons dashicons-yes-alt" size="10"></span><?php esc_html_e( ' Unlock a 20% discount on all plans now! Use the limited-time coupon code SAVANA20', 'savana-lite' ); ?><br/>
                </p>

				<p>
            		
					<a target="_blank" href="<?php echo esc_url( 'https://www.themeinprogress.com/savana-clean-elegant-wordpress-woocommerce-theme/?ref=2&campaign=savana-notice' ); ?>" class="button button-primary"><?php esc_html_e( 'Upgrade Now', 'savana-lite' ); ?></a>
                
            	</p>

            	<p>

                    <?php

                        printf( 
                            '<a href="%1$s" class="dismiss-notice">' . esc_html__( 'Dismiss this notice', 'savana-lite' ) . '</a>', 
                            esc_url( wp_nonce_url( add_query_arg( 'savana-lite-dismiss', '1' ), 'savana-lite-dismiss-action'))
                        );

                    ?>
                    
            	</p>
                    
            </div>
		
		<?php
		
		}

	}

}

new savana_lite_admin_notice();

?>