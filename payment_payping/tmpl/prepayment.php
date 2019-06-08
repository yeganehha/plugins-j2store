<?php
/**
 * @package     Joomla - > Site and Administrator payment info
 * @subpackage  com_j2store
 * @subpackage 	j2stor_Payping
 * @copyright   Erfan Ebrahimi => http://erfanebrahimi.ir
 * @copyright   Copyright (C) 20019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die('Restricted access');
?>

<form action="<?php echo @$vars->paypingGoUrl; ?>" method="get" >
	<p>درگاه پی‌پینگ</p>
	<br />
    <input type="submit" class="j2store_cart_button button btn btn-primary" value="<?php echo JText::_($vars->button_text); ?>" />
</form>
