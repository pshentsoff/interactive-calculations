<?php
/**
 * @file        default.php
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

class IntercalcControllerdefault extends JControllerBase {

    public function execute() {

        // Get the application
        $app = $this->getApplication();

        // Get the document object.
        $document = JFactory::getDocument();

        $viewName = $app->input->getWord('view', 'calc');
        $viewFormat = $document->getType();
        $layoutName = $app->input->getWord('layout', 'default');

        $app->input->set('view', $viewName);

        // Register the layout paths for the view
        $paths = new SplPriorityQueue;
        $paths->insert(JPATH_COMPONENT . '/views/' . $viewName . '/tmpl', 'normal');

        $viewClass = 'IntercalcViews' . ucfirst($viewName) . ucfirst($viewFormat);
        $modelClass = 'IntercalcModels' . ucfirst($viewName);

        if (false === class_exists($modelClass)) {
            $modelClass = 'IntercalcModelsDefault';
        }

        $view = new $viewClass(new $modelClass, $paths);
        $view->setLayout($layoutName);

        // Render our view.
        echo $view->render();

        return true;
    }
}