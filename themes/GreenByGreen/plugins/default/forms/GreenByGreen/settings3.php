<?php
$setting = new OssnSite;
$extra_newsfeed_link   = $setting->getSettings('gbg:extra_newsfeed_link');
$date_format = $setting->getSettings('gbg:date:format');

$dateFormats = array(
	'elapsed',
	'exact'
);
foreach($dateFormats as $style){
	 $date_format_options[$style] = ossn_print("theme:greenbygreen:settings:tab3:date:format:{$style}"); 
}
?>
 
<ul class="nav nav-tabs">
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab1');?></a></li>
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen2'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab2');?></a></li>
	<li class="active"><a data-toggle="tab" href="#home"><?php echo ossn_print('theme:greenbygreen:settings:tab3');?></a></li>
</ul>

<fieldset class="titleform">
<div>
	<br>
	<input type="checkbox" name="gbg:extra_newsfeed_link" value="checked"<?php echo ' ' . $extra_newsfeed_link;?> > <?php echo ossn_print('theme:greenbygreen:settings:tab3:extra:newsfeed:link');?> 
</div>
<div>
	<br>
	<?php 
		echo ossn_plugin_view('input/radio', array(
				'name' => 'gbg:date:format',
				'value' => ($date_format ?: 'elapsed'),
				'options' => $date_format_options,
				'class' => ''
		));
	?>		
</div>
	<br>
	<hr>
	<input type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('save');?>"/>
</fieldset>

<script>
$(document).ready(function(){
	$('.radio-block span').css('font-weight', 'normal');
	$('.radio-block').css('margin', '0');
	$("input[type='number']").css('padding', '0');
	$("input[type='number']").css('margin-bottom', '0');
});
</script>