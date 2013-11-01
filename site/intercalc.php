<?php
/**
 * @file        intercalc.php
 * @description
 *
 * PHP Version  5.3.13
 *
 * @package 
 * @category
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

//sessions
jimport( 'joomla.session.session' );

//load classes
JLoader::registerPrefix('Intercalc', JPATH_COMPONENT);

//application
$app = JFactory::getApplication();

// Require specific controller if requested
if($controller = $app->input->get('controller','default')) {
    require_once (JPATH_COMPONENT.'/controllers/'.$controller.'.php');
}

// Create the controller
$classname = 'IntercalcController'.$controller;
$controller = new $classname();

// Perform the Request task
$controller->execute();