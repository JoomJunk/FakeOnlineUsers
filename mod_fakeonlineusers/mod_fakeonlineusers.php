<?php
/**
 * @package		JJ Fake Users Online
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - 2012 - JoomJunk
 * @license		http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//Include the helper
require_once( dirname(__FILE__).'/helper.php' );

//Retrieve the parameters
$minimum_guest = intval( $params->get( 'lownumber_guest', 50 ) );
$maximum_guest = intval ($params->get( 'highnumber_guest', 60 ) );
$minimum_member = intval( $params->get( 'lownumber_member', 20 ) );
$maximum_member = intval ($params->get( 'highnumber_member', 30 ) );
 
// Include the syndicate functions only once
require( JModuleHelper::getLayoutPath( 'mod_fakeonlineusers' ) );
?>
