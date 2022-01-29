<?php
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}

class Mfn_Builder_Helper {

  /**
   * Unique ID
   * Generate unique ID and check for collisions
   */

  public static function unique_ID($uids = array()){

  	if (function_exists('openssl_random_pseudo_bytes')) {

  		// openssl_random_pseudo_bytes

  		$uid = substr(bin2hex(openssl_random_pseudo_bytes(5)), 0, 9);

  	} else {

  		// fallback

  		$keyspace = '0123456789abcdefghijklmnopqrstuvwxyz';
  		$keyspace_length = 36;
  		$uid = '';

  		for ($i = 0; $i < 9; $i++) {
  			$uid .= $keyspace[rand(0, $keyspace_length - 1)];
      }

  	}

   	if( in_array( $uid, $uids ) ){
   		return self::unique_ID($uids);
   	}

   	return $uid;
  }

  /**
	 * Set new uniqueID for all builder sections, wrap and items
	 * This function also checks for possible collisions
	 */

	public static function unique_ID_reset($data, $uids){

		if (! is_array($data)) {
			return false;
		}

		foreach($data as $section_k => $section){

			$uids[] = self::unique_ID($uids);
			$data[$section_k]['uid'] = end($uids);

			if(is_array($section['wraps'])){
				foreach($section['wraps'] as $wrap_k => $wrap){

					$uids[] = self::unique_ID($uids);
					$data[$section_k]['wraps'][$wrap_k]['uid'] = end($uids);

					if(is_array($wrap['items'])){
						foreach($wrap['items'] as $item_k => $item){

							$uids[] = self::unique_ID($uids);
							$data[$section_k]['wraps'][$wrap_k]['items'][$item_k]['uid'] = end($uids);

						}
					}

				}
			}

		}

		return $data;

	}

}
