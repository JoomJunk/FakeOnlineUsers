<?php 
/**
 * @package		JJ Fake Users Online
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - 2012 - JoomJunk
 * @license		http://www.gnu.org/licenses/gpl-3.0.html
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div>
<?php
echo JText::_( 'NUMBERTEXT' ) . "&nbsp;" . modfakeonlineusersHelper::randomGen($minimum_guest,$maximum_guest) .
"&nbsp;" . JText::_( 'AND' ) . "&nbsp;" . modfakeonlineusersHelper::randomGen($minimum_member,$maximum_member) .
"&nbsp;" . JText::_( 'GUESTS' );
 ?>
</div>