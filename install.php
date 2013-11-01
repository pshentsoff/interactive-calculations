<?php
/**
 * @file        install.php
 * @description Component installer
 *
 * PHP Version  5.3.13
 *
 * @package     com_intercalc
 * @category    components
 * @plugin URI
 * @copyright   2013, Vadim Pshentsov. All Rights Reserved.
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author      Vadim Pshentsov <pshentsoff@gmail.com> 
 * @link        http://pshentsoff.ru Author's homepage
 * @link        http://blog.pshentsoff.ru Author's blog
 *
 * @created     31.10.13
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.installer.installer');
jimport('joomla.installer.helper');

/**
 * Method to update the component
 *
 * @param mixed $parent The class calling this method
 * @return void
 */
function update($parent) {
    echo JText::_('COM_INTERCALC_UPDATE_SUCCESSFULL');
}