<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_rislider
 * @copyright	Copyright (C) 2013 Meta, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later;
 */

// no direct access
defined('_JEXEC') or die;

/**
 * @package		Joomla.Site
 * @subpackage	mod_rislider
 * @since		2.5
 */
class modRISliderHelper
{
	static function getFolder(&$params){
		$folder = $params->get('image_folder');
		
		return $folder;
	}
	
	static function getImagesFromFolder(&$params) {
    
        $folder = $params->get('image_folder');
        if(!$dir = @opendir($folder)) return null;
        while (false !== ($file = readdir($dir)))
        {
            if (preg_match('/.+\.(jpg|jpeg|gif|png)$/i', $file)) {
            	// check with getimagesize() which attempts to return the image mime-type 
            	if(getimagesize(JPATH_ROOT.DS.$folder.DS.$file)!==FALSE) $files[] = $file;
			}
        }
        closedir($dir);

		$images = array($files);
		
		asort($images[0]);
				
		return $images;
    }
	
	static function getTitle(&$params){
		$title = $params->get('title');
		
		return $title;
	}
}
