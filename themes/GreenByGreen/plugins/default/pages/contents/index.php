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
?>
<div class="row ossn-page-contents">
	<div class="topbar" style="position:absolute; left: 0px; top: 0px; height:0px"></div>
	<div id="hlc" class="col-md-6 green-home-left-contents">
		<div class="logo">
		<?php if(ossn_site_settings('cache')) {?>
          	<img src="<?php echo ossn_theme_url();?>images/logo.png" />
		<?php } else { ?>
			<img src="<?php echo ossn_theme_url() . 'images/logo.png?ver=' . time();?>" />
		<?php } ?>
		</div>	
		<div class="description">
           	<?php 
				$setting = new OssnSite;
				if(! $greeting = $setting->getSettings('gbg:greeting_text')) {
					echo ossn_print('home:top:heading', array(ossn_site_settings('site_name')));
				} elseif ($greeting != 'none') {
					echo $greeting;
				}
			?>
		</div>
		<div class="col-xs-6 green-login">
			<?php
			echo ossn_view_form('green_login', array(
            	'id' => 'ossn-login',
				'class' => 'ossn-login-form text-center',
				'format' => true,
           		'action' => ossn_site_url('action/user/login'),
    	    ));			
			if(!com_is_active('DisableSignup')) {?>
            <div class="buttons">
				<button id="open_create" type="button" class="button-grey frontpage"><?php echo ossn_print('create:account'); ?></button>
            </div>
			<?php
			}
			?>
		</div>
	</div>   
	<div class="col-md-6 home-right-contents home-right-contents-invisible">
    	<?php 
		$signup_form = 'green_signup';
		if(com_is_active('AnonymousRegistration')) {
			$signup_form = 'signup';
		}
		$contents = ossn_view_form($signup_form, array(
    			'id' => 'ossn-home-signup',
    			'action' => ossn_site_url('action/user/register')
	 	));
		$heading = "<p>".ossn_print('its:free')."</p>";
		echo ossn_plugin_view('widget/view', array(
				'title' => ossn_print('create:account'),
				'contents' => $heading.$contents,
				'class' => 'green-create-account',
		));
		?>	       			
	</div>     
</div>	

<script>
$(document).ready(function() {
	$('.opensource-socalnetwork').css('background', 'unset');
	$('.ossn-page-container .ossn-inner-page').css('margin-top', '0px');
	$('html').addClass('frontpage-bottom');
	var widget_heading = $('.widget-heading').html();
	widget_heading = widget_heading + '<span id=\"close_create\" style=\"float:right; font-weight:normal; cursor:pointer\"><i class="fa fa-close"></i></span>';
	$('.widget-heading').html(widget_heading);
	$('#open_create').click(function() {
		$('.home-right-contents').removeClass('home-right-contents-invisible');
	});
	$('#close_create').click(function() {
		$('.home-right-contents').addClass('home-right-contents-invisible');
	});
});
</script>