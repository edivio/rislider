<?php
/**
 * @version 1.0.0
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');
$app = JFactory::getApplication();

// get images from dir

$images = modRISliderHelper::getImagesFromFolder($params);

$title = modRISliderHelper::getTitle($params);

$folder = modRISliderHelper::getFolder($params);

$document = JFactory::getDocument();

$document->addStyleSheet('modules/mod_rislider/assets/css/style.css');

if($params->get('jquery')){
	$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js');
}
$noconflict = "jQuery.noConflict();";
$document->addScriptDeclaration($noconflict);
$document->addScript('modules/mod_rislider/assets/js/jquery.transform-0.9.3.min_.js');
$document->addScript('modules/mod_rislider/assets/js/jquery.mousewheel.js');
$document->addScript('modules/mod_rislider/assets/js/jquery.RotateImageMenu.js');

require JModuleHelper::getLayoutPath('mod_rislider', $params->get('layout','default'));
