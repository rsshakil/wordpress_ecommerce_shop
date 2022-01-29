<?php
/**
 * Muffin Builder 3.1
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 *
 * @changelog
 *
 * 3.1
 * added: unique IDs for all builder elements
 */

if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}

if (! class_exists('Mfn_Builder'))
{
  class Mfn_Builder {

  	/**
  	 * Constructor
  	 */

  	public function __construct() {

			require_once(get_theme_file_path('/functions/builder/class-mfn-builder-helper.php'));
			require_once(get_theme_file_path('/functions/builder/fields.php'));

      if (is_admin()) {

      	require_once(get_theme_file_path('/functions/builder/class-mfn-builder-admin.php'));
      	require_once(get_theme_file_path('/functions/builder/class-mfn-builder-ajax.php'));

      } else {

				require_once(get_theme_file_path('/functions/builder/class-mfn-builder-front.php'));
				require_once(get_theme_file_path('/functions/builder/class-mfn-builder-items.php'));

			}

  	}

  }
}

$mfn_builder = new Mfn_Builder();
