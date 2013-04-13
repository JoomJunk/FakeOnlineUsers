<?php 
/**
 * @package		JJ Fake Users Online
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - 2012 - JoomJunk
 * @license		http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');

/**
 * Fake Users Online helper connector class.
 *
 * @package     Fake Online Users
 *
 */
class modfakeonlineusersHelper {
	function randomGen($min_guest, $max_guest){
		srand((float) microtime() * 10000000);
		$random = rand($min_guest,$max_guest);
		return $random;
	}
}
?>
