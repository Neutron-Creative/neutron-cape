<?php
/*
   Plugin Name: Neutron Cape!
   Plugin URI: https://getneutron.com
   description: A pretty dress for WordPress!
   Version: 1.0
   Author: Neutron Creative Inc.
   Author URI: https://neutroncreative.com
   License: GPL2
   */
   
   add_action('admin_head', 'wear_cape', 9999);

   function wear_cape() {
      $url = plugin_dir_url(__FILE__) . '/assets/styles.css';
      $url = join('/', explode(' ', $url));
      $temporary_url = plugin_dir_url(__FILE__) . '/assets/temporary.css';
      $temporary_url = join('/', explode(' ', $temporary_url));
      echo '<link rel="stylesheet" href="' . $url . '"/>';
      echo '<link rel="stylesheet" href="' . $temporary_url . '"/>';
   }

   // Custom Fonts
   function custom_admin_inter_font() {
      echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">' . PHP_EOL;
      echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family:"Inter",sans-serif !important;}</style>' . PHP_EOL;
   }
   add_action( 'admin_head', 'custom_admin_inter_font' );

   // WordPress Custom Font @ Admin Frontend Toolbar
   function custom_admin_inter_font_frontend_toolbar() {
      if(current_user_can('administrator')) {
         echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">' . PHP_EOL;
         echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family:"Inter",sans-serif !important;}</style>' . PHP_EOL;
      }
   }
   add_action( 'wp_head', 'custom_admin_inter_font_frontend_toolbar' );

   // WordPress Custom Font @ Admin Login
   function custom_admin_inter_font_login_page() {
      if(stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
         echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">' . PHP_EOL;
         echo '<style>body{font-family:"Inter",sans-serif !important;}</style>' . PHP_EOL;
   }
   }
   add_action( 'login_head', 'custom_admin_inter_font_login_page' );

   // Brand user login
   add_action('login_enqueue_scripts', 'whitelabel_login');

function whitelabel_login() {
	?>
		<style type="text/css">
			body {
				background: #F5F6F8 !important;
			}
			#login h1 a {
				background: url('https://getneutron.com/wp-content/uploads/2020/05/NC-Favicon.png') !important;
				background-size: contain !important;
				background-repeat: no-repeat !important;
				width: 65px !important;
				
			}
			body.login div#login p#backtoblog {
			  display: none !important;
			}
			
			.login #nav {
				display: flex !important;
				justify-content: center !important;
				align-items: center !important;
			}
			
			body.login form {
				border: solid 1px rgba(0,0,0,.1) !important;
				border-radius: 4px !important;
				display: flex;
				flex-direction: column;
				padding: 26px !important;
			}
			
			body.login form input:focus {
				border-color:  #5353EC !important;
			}
			
			.dashicons-visibility:before {
				color: #5353EC !important;
			}
			
			body.login label {
				font-size: 14px !important;
				line-height: 1.5 !important;
				margin-bottom: 4px !important;
			}
			
			body.login input {
				font-size: 14px !important;
			}
			
			p.forgetmenot {
				display: flex;
				width: 100%;
				justify-content: center;
				align-items: center;
				order: 999;
				margin-bottom: 0;
				margin-top: 10px;
			}
			
			input[type=submit] {
				display: flex;
				width: 100%;
				justify-content: center;
				align-items: center;
				padding: 5px 15px !important;
				color: #FFF !important;
				background: #5353EC !important;
				border-color: #5353EC !important;
				margin: 10px 0 10px 0 !important;
				outline: none !important;
				transition: .2s ease-in-out !important;
			}
			
			input[type=submit]:hover {
				outline: none !important;
				transform: scale(1.03) !important;
			}
			
			input[type=submit]:active {
				outline: none !important;
				transform: scale(.98) !important;
			}
			
			a:hover {
				color: #5353EC !important;
			}
		</style>
	<?php
}


?>