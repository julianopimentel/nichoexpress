 <?php
 $setting = new OssnSite;
 $logo_text_text  = $setting->getSettings('gbg:logo_text_text');
 $logo_text_color = $setting->getSettings('gbg:logo_text_color');
 $logo_text_size  = $setting->getSettings('gbg:logo_text_size');
 $greeting_text   = $setting->getSettings('gbg:greeting_text');
 
 ?>
 
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#home"><?php echo ossn_print('theme:greenbygreen:settings:tab1');?></a></li>
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen2'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab2');?></a></li>
	<li><a href="<?php echo ossn_site_url('administrator/settings/GreenByGreen3'); ?>"><?php echo ossn_print('theme:greenbygreen:settings:tab3');?></a></li>
</ul>

 
 <fieldset class="titleform">
	<h3><?php echo ossn_print('theme:greenbygreen:frontpage:settings');?></h3>
 	<div class="alert alert-warning">
    	<?php echo ossn_print('theme:greenbygreen:instruction:1');?>
    </div>	
 	<div>	
    	<label><?php echo ossn_print('theme:greenbygreen:logo:site');?> (450 x 90 | 500 kB png) </label>
        <input type="file" name="logo_site" />
        <div class="logo-container-greenbygreen">
	        <img src="<?php echo ossn_theme_url() . 'images/logo.png?ver=' . time();?>" />
        </div>
    </div>
	
	<br>
 	<div class="alert alert-warning">
    	<?php echo ossn_print('theme:greenbygreen:instruction:2');?>
    </div>	
 	<div>
    	<label><?php echo ossn_print('theme:greenbygreen:logo:text:text');?> </label>
        <input type="text" name="gbg:logo_text_text" value="<?php echo ($logo_text_text ?: ossn_site_settings('site_name')); ?>" />
    </div>

 	<div>	
    	<label><?php echo ossn_print('theme:greenbygreen:logo:text:color');?> </label>
		<input readonly type="text" name="gbg:logo_text_color" class="jscolor" value="<?php echo ($logo_text_color ?: 'D2D23C'); ?>" />
	</div>

 	<div>	
    	<label><?php echo ossn_print('theme:greenbygreen:logo:text:size');?> </label>
		<input class="greenbygreen-number" type="number" name="gbg:logo_text_size" value="<?php echo ($logo_text_size ?: '22'); ?>" min="1" max="50" />
	</div>

	<br>
 	<div class="alert alert-warning">
    	<?php echo ossn_print('theme:greenbygreen:instruction:3');?>
    </div>	
 	<div>
    	<label><?php echo ossn_print('theme:greenbygreen:greeting:text');?> </label>
        <input type="text" name="gbg:greeting_text" value="<?php echo ($greeting_text ?: ''); ?>" />
    </div>

	<br>
	<hr>
	<h3><?php echo ossn_print('theme:greenbygreen:backend:settings');?></h3>
 	<div class="alert alert-warning">
    	<?php echo ossn_print('theme:greenbygreen:instruction:4');?>
    </div>	
  	<div>	
    	<label><?php echo ossn_print('theme:greenbygreen:logo:admin');?> (180 x 45 | 500 kB jpg)</label>
        <input type="file" name="logo_admin" />
        <div class="admin-logo-container-greenbygreen">
	        <img src="<?php echo ossn_theme_url();?>images/logo_admin.jpg" />
        </div>
    </div>   
	<input type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('save');?>"/>
</fieldset>