<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_search
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$count_div = 4;
?>
<div class="rm_wrapper">
	<div id="rm_container" class="rm_container">
		<ul>
			<?php
				$rotation = array(1=>'-15', 2=>'-5', 3=>'5', 4=>'15');
				for($f=1;$f<=$count_div;$f++){
					echo '<li data-images="rm_container_'.$f.'" data-rotation="'.$rotation[$f].'"><img src="'.$folder.'/'.$f.'.jpg" /></li>';
				}
			?>
		</ul>
			<div id="rm_mask_left" class="rm_mask_left"></div>
			<div id="rm_mask_right" class="rm_mask_right"></div>
			<div id="rm_corner_left" class="rm_corner_left"></div>
			<div id="rm_corner_right" class="rm_corner_right"></div>
		<h2 class="slider"><?php echo $title; ?></h2>
		<div style="display:none;">
			<?php
				for($i=1;$i<=$count_div;$i++){
					echo '<div id="rm_container_'.$i.'">';
					
					switch($i){
						case 1: $step = 4; 
							break;
						case 2: $step = 7;
							break;
						case 3: $step = 10;
							break;
						case 4: $step = 13;
							break;
					}
					
						echo '<img src="'.$folder.'/'.$i.'.jpg" />';
						$step = $step + 1;
						echo '<img src="'.$folder.'/'.$step.'.jpg" />';
						$step = $step + 1;
						echo '<img src="'.$folder.'/'.$step.'.jpg" />';
						$step = $step + 1;
						echo '<img src="'.$folder.'/'.$step.'.jpg" />';
					echo '</div>';
				}
			?>
		</div>
	</div>
	<div class="rm_nav">
		<a id="rm_next" href="#" class="rm_next"></a>
		<a id="rm_prev" href="#" class="rm_prev"></a>
	</div>
	<div class="rm_controls">
		<a id="rm_play" href="#" class="rm_play">Play</a>
		<a id="rm_pause" href="#" class="rm_pause">Pause</a>
	</div>
</div>