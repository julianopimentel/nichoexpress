<?php
$setting = new OssnSite;
$frontpage_bg_lcolor  = $setting->getSettings('gbg:frontpage_bg_lcolor');
$frontpage_bg_dcolor  = $setting->getSettings('gbg:frontpage_bg_dcolor');
$frontpage_fg_color   = $setting->getSettings('gbg:frontpage_fg_color');

$topbar_bg_lcolor  = $setting->getSettings('gbg:topbar_bg_lcolor');
$topbar_bg_dcolor  = $setting->getSettings('gbg:topbar_bg_dcolor');
$topbar_fg_color   = $setting->getSettings('gbg:topbar_fg_color');
$topbar_hv_color   = $setting->getSettings('gbg:topbar_hv_color');

$sidebar_bg_color   = $setting->getSettings('gbg:sidebar_bg_color');
$sidebar_fg_mcolor  = $setting->getSettings('gbg:sidebar_fg_mcolor');
$sidebar_hv_mcolor  = $setting->getSettings('gbg:sidebar_hv_mcolor');
$sidebar_fg_scolor  = $setting->getSettings('gbg:sidebar_fg_scolor');
$sidebar_hv_scolor  = $setting->getSettings('gbg:sidebar_hv_scolor');
$sidebar_bb_color   = $setting->getSettings('gbg:sidebar_bb_color');
 
$page_bg_color    = $setting->getSettings('gbg:page_bg_color');
$page_fg_color    = $setting->getSettings('gbg:page_fg_color');
$section_bg_color = $setting->getSettings('gbg:section_bg_color');
$link_fg_color    = $setting->getSettings('gbg:link_fg_color');
$link_hv_color    = $setting->getSettings('gbg:link_hv_color');
$input_bg_color   = $setting->getSettings('gbg:input_bg_color');

$widget_head_bg_color = $setting->getSettings('gbg:widget_head_bg_color');
$widget_body_bg_color = $setting->getSettings('gbg:widget_body_bg_color');

$styles = array(
	'frontpage',
	'light_mode',
	'dark_mode'
);
foreach($styles as $style){
	 $options[$style] = ossn_print("theme:greenbygreen:settings:tab2:css:{$style}"); 
}

?>
 
<ul class="nav nav-tabs">
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab1');?></a></li>
	<li class="active"><a data-toggle="tab" href="#home"><?php echo ossn_print('theme:greenbygreen:settings:tab2');?></a></li>
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen3'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab3');?></a></li>
</ul>

<br>

<div class='container-fluid'>
	<div class="col-md-12">
		<p>
		<?php echo ossn_print('theme:greenbygreen:settings:tab2:css:instructions'); ?>
		</p>
		<br /><br />
	</div>
	<div class="col-md-6">
		<div>
			<?php echo ossn_print('theme:greenbygreen:settings:tab2:css:frontpage:iframe:header'); ?>
			<iframe src="<?php echo ossn_site_url('gbgfp'); ?>" width="100%" height="550" frameborder="2"></iframe>
		</div>
		<div>
			<br />
			<?php echo ossn_print('theme:greenbygreen:settings:tab2:css:light_mode:iframe:header'); ?>
			<iframe src="<?php echo ossn_site_url('home?gbg_mode=gbg_light_mode'); ?>" width="100%" height="550" frameborder="2"></iframe>
		</div>
		<div>
			<br />
			<?php echo ossn_print('theme:greenbygreen:settings:tab2:css:dark_mode:iframe:header'); ?>
			<iframe src="<?php echo ossn_site_url('home?gbg_mode=gbg_dark_mode'); ?>" width="100%" height="550" frameborder="2"></iframe>
		</div>
	</div>
	<div class="col-md-6">
		<table  class="table">
			<tr>
				<th style="width:90%"><label><?php echo ossn_print('gbg:section'); ?></label></th>
				<th style="padding-left:20px"><label><?php echo ossn_print('gbg:custom'); ?></label></th>
				<th style="padding-left:20px"><label><?php echo ossn_print('gbg:default:lightmode'); ?></label></th>
				<th style="padding-left:20px"><label><?php echo ossn_print('gbg:default:darkmode'); ?></label></th>
			</tr>

			<tr class="table-titles">
				<th colspan="4"><label><?php echo ossn_print('gbg:section:frontpage'); ?></label></th>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:frontpage_bg_lcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:frontpage_bg_lcolor" class="jscolor inline-input" value="<?php echo ($frontpage_bg_lcolor ?: '4DAC71'); ?>" /></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:frontpage_bg_dcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:frontpage_bg_dcolor" class="jscolor inline-input" value="<?php echo ($frontpage_bg_dcolor ?: '3BA666'); ?>" /></td>
				<td><input style="background-color:#3BA666" type='text' class="inline-input" value="3BA666" readonly></td>
				<td><input style="background-color:#3BA666" type='text' class="inline-input" value="3BA666" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:frontpage_fg_color'); ?></td>
				<td><input type="text" name="gbg:frontpage_fg_color" class="jscolor inline-input" value="<?php echo ($frontpage_fg_color ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#F4F4F4" type='text' class="inline-input" value="F4F4F4" readonly></td>
				<td><input style="background-color:#F4F4F4" type='text' class="inline-input" value="F4F4F4" readonly></td>
			</tr>
			<tr class="table-titles">
				<th colspan="4" ><label><?php echo ossn_print('gbg:section:topbar'); ?></label></th>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:topbar_bg_lcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:topbar_bg_lcolor" class="jscolor inline-input" value="<?php echo ($topbar_bg_lcolor ?: '4DAC71'); ?>" /></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:topbar_bg_dcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:topbar_bg_dcolor" class="jscolor inline-input" value="<?php echo ($topbar_bg_dcolor ?: '3BA666'); ?>" /></td>
				<td><input style="background-color:#3BA666" type='text' class="inline-input" value="3BA666" readonly></td>
				<td><input style="background-color:#3BA666" type='text' class="inline-input" value="3BA666" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:topbar_fg_color', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:topbar_fg_color" class="jscolor inline-input" value="<?php echo ($topbar_fg_color ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:topbar_hv_color'); ?></td>
				<td><input type="text" name="gbg:topbar_hv_color" class="jscolor inline-input" value="<?php echo ($topbar_hv_color ?: '0D6C31'); ?>" /></td>
				<td><input style="background-color:#0D6C31; color:#FFFFFF" type='text' class="inline-input" value="0D6C31" readonly></td>
				<td><input style="background-color:#0D6C31; color:#FFFFFF" type='text' class="inline-input" value="0D6C31" readonly></td>
			</tr>

			<tr class="table-titles">
				<th colspan="4" ><label><?php echo ossn_print('gbg:section:sidebar'); ?></label></th>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_bg_color'); ?></td>
				<td><input type="text" name="gbg:sidebar_bg_color" class="jscolor inline-input" value="<?php echo ($sidebar_bg_color ?: '7A8D81'); ?>" /></td>
				<td><input style="background-color:#7A8D81" type='text' class="inline-input" value="7A8D81" readonly></td>
				<td><input style="background-color:#7A8D81" type='text' class="inline-input" value="7A8D81" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_fg_mcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:sidebar_fg_mcolor" class="jscolor inline-input" value="<?php echo ($sidebar_fg_mcolor ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_hv_mcolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:sidebar_hv_mcolor" class="jscolor inline-input" value="<?php echo ($sidebar_hv_mcolor ?: '4DAC71'); ?>" /></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
				<td><input style="background-color:#4DAC71" type='text' class="inline-input" value="4DAC71" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_fg_scolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:sidebar_fg_scolor" class="jscolor inline-input" value="<?php echo ($sidebar_fg_scolor ?: 'DDDDDD'); ?>" /></td>
				<td><input style="background-color:#DDDDDD" type='text' class="inline-input" value="DDDDDD" readonly></td>
				<td><input style="background-color:#DDDDDD" type='text' class="inline-input" value="DDDDDD" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_hv_scolor', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:sidebar_hv_scolor" class="jscolor inline-input" value="<?php echo ($sidebar_hv_scolor ?: '8A9D91'); ?>" /></td>
				<td><input style="background-color:#8A9D91" type='text' class="inline-input" value="8A9D91" readonly></td>
				<td><input style="background-color:#8A9D91" type='text' class="inline-input" value="8A9D91" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:sidebar_bb_color'); ?></td>
				<td><input type="text" name="gbg:sidebar_bb_color" class="jscolor inline-input" value="<?php echo ($sidebar_bb_color ?: '23282E'); ?>" /></td>
				<td><input style="background-color:#23282E; color:#FFFFFF" type='text' class="inline-input" value="23282E" readonly></td>
				<td><input style="background-color:#23282E; color:#FFFFFF" type='text' class="inline-input" value="23282E" readonly></td>
			</tr>

			<tr class="table-titles">
				<th colspan="4" ><label><?php echo ossn_print('gbg:section:page'); ?></label></th>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:page_bg_color'); ?></td>
				<td><input type="text" name="gbg:page_bg_color" class="jscolor inline-input" value="<?php echo ($page_bg_color ?: 'F0F2F5'); ?>" /></td>
				<td><input style="background-color:#F0F2F5" type='text' class="inline-input" value="F0F2F5" readonly></td>
				<td><input style="background-color:#000000;  color:#FFFFFF" type='text' class="inline-input" value="000000" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:page_fg_color'); ?></td>
				<td><input type="text" name="gbg:page_fg_color" class="jscolor inline-input" value="<?php echo ($page_fg_color ?: '333333'); ?>" /></td>
				<td><input style="background-color:#333333; color:#FFFFFF" type='text' class="inline-input" value="333333" readonly></td>
				<td><input style="background-color:#C0C0C0" type='text' class="inline-input" value="C0C0C0" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:section_bg_color'); ?></td>
				<td><input type="text" name="gbg:section_bg_color" class="jscolor inline-input" value="<?php echo ($section_bg_color ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
				<td><input style="background-color:#1E1E1E; color:#FFFFFF" type='text' class="inline-input" value="1E1E1E" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:link_fg_color'); ?></td>
				<td><input type="text" name="gbg:link_fg_color" class="jscolor inline-input" value="<?php echo ($link_fg_color ?: '666666'); ?>" /></td>
				<td><input style="background-color:#666666; color:#FFFFFF" type='text' class="inline-input" value="666666" readonly></td>
				<td><input style="background-color:#AAAAAA;" type='text' class="inline-input" value="AAAAAA" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:link_hv_color'); ?></td>
				<td><input type="text" name="gbg:link_hv_color" class="jscolor inline-input" value="<?php echo ($link_hv_color ?: '4DAC71'); ?>" /></td>
				<td><input style="background-color:#4DAC71;" type='text' class="inline-input" value="4DAC71" readonly></td>
				<td><input style="background-color:#4DAC71;" type='text' class="inline-input" value="4DAC71" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:input_bg_color'); ?></td>
				<td><input type="text" name="gbg:input_bg_color" class="jscolor inline-input" value="<?php echo ($input_bg_color ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
				<td><input style="background-color:#373737; color:#FFFFFF" type='text' class="inline-input" value="373737" readonly></td>
			</tr>

			<tr class="table-titles">
				<th colspan="4" ><label><?php echo ossn_print('gbg:section:widget'); ?></label></th>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:widget_head_bg_color', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:widget_head_bg_color" class="jscolor inline-input" value="<?php echo ($widget_head_bg_color ?: 'F3F4F5'); ?>" /></td>
				<td><input style="background-color:#F3F4F5" type='text' class="inline-input" value="F3F4F5" readonly></td>
				<td><input style="background-color:#454545; color:#FFFFFF" type='text' class="inline-input" value="454545" readonly></td>
			</tr>
			<tr>
				<td><?php echo ossn_print('gbg:widget_body_bg_color', array('<sup>', '</sup>')); ?></td>
				<td><input type="text" name="gbg:widget_body_bg_color" class="jscolor inline-input" value="<?php echo ($widget_body_bg_color ?: 'FFFFFF'); ?>" /></td>
				<td><input style="background-color:#FFFFFF" type='text' class="inline-input" value="FFFFFF" readonly></td>
				<td><input style="background-color:#1E1E1E; color:#FFFFFF" type='text' class="inline-input" value="1E1E1E" readonly></td>
			</tr>

		</table>
		<hr>
		<div>
			<label><?php echo ossn_print('theme:greenbygreen:settings:tab2:css:sections:label');?></label>
			<?php 
				echo ossn_plugin_view('input/radio', array(
						'name' => 'gbg:css:section:file',
						'value' => '',
						'options' => $options,
						'class' => 'gbg-css-sections'
				));
			?>		
		</div>
		<hr>
		<input id="gbg-css-submit" style="display: none" type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('save');?>"/>
		
		<hr>
		<div>
			<label><?php echo ossn_print('theme:greenbygreen:settings:tab2:css:colortables:label');?></label>
			<a href="<?php echo ossn_theme_url() . 'plugins/default/css/core/pdf/frontpage.pdf?t=' . time() ?>" target="_blank">frontpage.pdf</a>
			<br />
			<a href="<?php echo ossn_theme_url() . 'plugins/default/css/core/pdf/light_mode.pdf?t=' . time() ?>" target="_blank">light_mode.pdf</a>
			<br />
			<a href="<?php echo ossn_theme_url() . 'plugins/default/css/core/pdf/dark_mode.pdf?t=' . time() ?>" target="_blank">dark_mode.pdf</a>
		</div>
	</div>
</div>
<script>
    $('form input').keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });
	$('.gbg-css-sections').click(function() {
		$('#gbg-css-submit').show();
	});
</script>