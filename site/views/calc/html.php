<?php
/**
 * @file        html.php
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
 * @created     01.11.13
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

class IntercalcViewsCalcHtml extends JViewHtml {

    function render() {

        //@todo this loaders must be in helper, temporary placed here
        JHtml::stylesheet('components/com_intercalc/assets/css/styles.css');
        //load jquery framevork in noConflict mode
        JHtml::_('jquery.framework', true);
        //load self scripts
        JHtml::script('components/com_intercalc/assets/js/intercalc.js', false);

        return parent::render();

    }
}