<?php 
/**
 * @package		JJ Fake Users Online
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - 2012 - JoomJunk
 * @license		http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php

$minimum_guest = intval( $params->get( 'lownumber_guest', 50 ) );
$maximum_guest = intval ($params->get( 'highnumber_guest', 60 ) );
$minimum_member = intval( $params->get( 'lownumber_member', 20 ) );
$maximum_member = intval ($params->get( 'highnumber_member', 30 ) );

function randomGen($min_guest, $max_guest){
    srand((float) microtime() * 10000000);
    $random = rand($min_guest,$max_guest);
    return $random;
}

$random_number = randomGen($minimum_guest,$maximum_guest);
echo JText::_( 'NUMBERTEXT' );
echo "&nbsp;";
echo "" .$random_number. "";
echo "&nbsp;";

$random_number = randomGen($minimum_guest,$maximum_guest);
$random_number_member = randomGen($minimum_member,$maximum_member);
echo JText::_( 'AND' );
echo "&nbsp;";
echo "" .$random_number_member. "";
echo "&nbsp;";
echo JText::_( 'GUESTS' );
 ?>
<div>
</div>