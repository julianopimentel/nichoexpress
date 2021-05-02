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
		
$modes = array(
	'gbg_light_mode',
	'gbg_dark_mode'
);
foreach($modes as $mode){
	$img = "<div class='gbg-screenshot-container'><div class='gbg-screenshot'><iframe src='".ossn_site_url("home?gbg_mode={$mode}")."' frameborder='0'></iframe></div></div>";
	$options[$mode] = ossn_print("theme:greenbygreen:account:settings:colors:mode:{$mode}") . '<div>' . $img . '</div>'; 
}
?>
<div>
 	<label><?php echo ossn_print('theme:greenbygreen:account:settings:colors:label');?></label>
    <?php 
		echo ossn_plugin_view('input/radio', array(
				'name' => 'GreenByGreenColors',
				'value' => $params['color'],
				'options' => $options,
		));
	?>		
</div>
<div class="margin-top-10">
<input type="hidden" value="<?php echo $params['username']; ?>" name="username"/>
<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
</div>
