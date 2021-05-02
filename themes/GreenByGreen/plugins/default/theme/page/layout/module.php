<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 
if(ossn_is_hook('newsfeed', "sidebar:right")) {
	$newsfeed_right = ossn_call_hook('newsfeed', "sidebar:right", NULL, array());
	$sidebar = implode('', $newsfeed_right);
	$isempty = trim($sidebar);
}

$params['controls'] = (isset($params['controls'])) ? $params['controls'] : '';

?>
	<div class="col-md-8">
		<div class="ossn-layout-module">
			<div class="module-title">
				<div class="title"><?php echo $params['title']; ?></div>
				<div class="controls">
					<?php echo $params['controls']; ?> 
				</div>
			</div>
			<div class="module-contents">
				<?php echo $params['content']; ?>
			</div>
		</div>
	</div>
	<?php 
	if(!empty($isempty)) { ?>
	<div class="col-md-4 hidden-xs hidden-sm">
		<div class="ossn-layout-module">
			<div class="newsfeed-right">
				<?php
				echo $sidebar;
				?>                            
			</div>
		</div>
	</div>
	<?php } ?>
	