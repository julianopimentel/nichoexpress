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
 
$cache  = ossn_site_settings('cache');
$sub	= ossn_site_settings('last_cache');
?>
<!DOCTYPE html>
<html lang="<?php echo $sitelanguage; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php
	if($cache) {
	?>
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_site_url() . 'cache/css/' . $sub . '/view/bootstrap.min.css' ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_site_url() . 'cache/css/' . $sub . '/view/ossn.default.css' ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_theme_url() . 'plugins/default/css/core/cache/' . $sub . '/frontpage.css' ?>" />
	<?php
	} else {
	?>
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_site_url() . 'css/view/bootstrap.min.css' ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_site_url() . 'css/view/ossn.default.css?t=' . time() ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo ossn_theme_url() . 'plugins/default/css/core/colorized/frontpage.css?t=' . time() ?>" />
	<?php
	}
	?>
</head>
<body class="body-background-image">

<div class="ossn-halt ossn-light"></div>
<div class="ossn-message-box"></div>
    
<div class="opensource-socalnetwork">
	<div class="ossn-page-container">
		<div class="ossn-inner-page">    
			<div class="ossn-layout-startup">
				<div class="container-fluid">
					<div class="row">
						<div class="ossn-system-messages">
							<div class="row">
								<div class="col-md-11 ossn-system-messages-inner">
								</div>
							</div>
						</div>
        
						<div class="ossn-home-container">
							<div class="inner">
								<div class="row ossn-page-contents">
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
									<div class="col-md-6 home-right-contents">
										<?php 
										$signup_form = 'green_signup';
										if(com_is_active('AnonymousRegistration')) {
										$signup_form = 'signup';
										}
										$contents = ossn_view_form($signup_form, array(
										'id' => 'ossn-home-signup',
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrapper">
				<footer>
					<div id="gbg-footer-column" class="col-md-12">
						<div class="footer-contents">
							<div class="ossn-footer-menu">
								<?php echo ossn_view_menu('footer'); ?>
							</div>
							<?php echo ossn_fetch_extend_views('ossn/page/footer/contents'); ?>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
</body>
</html>