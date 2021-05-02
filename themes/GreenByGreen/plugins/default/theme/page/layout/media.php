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

if (ossn_is_hook( 'newsfeed', 'sidebar:right')) {
	$modules = ossn_call_hook('newsfeed', 'sidebar:right', null);
	$modules = implode( '', $modules);
	$isempty = trim($modules);
}
?>
<div class="container-fluid">
	<div class="row">
       <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-media">
				<div id="gbg-media-column">
					<div class="content">
						<?php echo $params['content']; ?>
					</div>
				</div>
				<?php 
				if(!empty($isempty)) { ?>
				<div class="col-md-4">
					<div class="page-sidebar">
						<?php
						echo $modules;
						?>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
 	 <?php echo ossn_plugin_view('theme/page/elements/footer');?> 
</div>
