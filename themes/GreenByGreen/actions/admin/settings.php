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
 
$site  = new OssnFile;
$site->setFile('logo_site');
$site->setExtension(array(
		'png',
));

if(isset($site->file['tmp_name']) && $site->typeAllowed()){
	$file = $site->file['tmp_name'];
	$size = filesize($file);
	if($size > 0){
			if($size > 500000){ //500KB
					ossn_trigger_message(ossn_print('theme:greenbygreen:logo:large'), 'error');
					redirect(REF);
			}
			$contents = file_get_contents($file);
			if(strlen($contents) > 0 && file_put_contents(ossn_route()->themes.'GreenByGreen/images/logo.png', $contents)){
					$cache  = ossn_site_settings('cache');
					if($cache == false) {
							$done = true;
					} else {
							$done = 2;
					}								
			} else {
				$done = false;
		
			}
	}
} elseif(!isset($site->file['tmp_name'])) {
	// GREETING PART
	$greetingText = input('gbg:greeting_text');
	if(!strlen($greetingText)) {
		$greetingText = false;
	}
	
	// LOGO PART
	// use empty png file
	$im = imagecreatefrompng(ossn_route()->themes.'GreenByGreen/images/transparent-logo.png');
	// create alpha channel, otherwise the background will be black
	imagesavealpha($im, true);
	
	$logoText = input('gbg:logo_text_text');
	if(!strlen($logoText)) {
		$logoText = ' ';
	}

	$logoColor = input('gbg:logo_text_color');
	$r = hexdec(substr($logoColor, 0, 2));
	$g = hexdec(substr($logoColor, 2, 2));
	$b = hexdec(substr($logoColor, 4, 2));
	$txtColor = imagecolorallocate($im, $r , $g, $b);

	$logoSize = input('gbg:logo_text_size');
	if($logoSize == '' || $logoSize < 1) {
		$logoSize = 1;
	}
	$angle    = 0;
	$fontPath = ossn_route()->themes.'GreenByGreen/fonts/PT_Sans/PTSans-Bold.ttf';

	// calculate bounding box depending on vars above
	$bbox = imagettfbbox ($logoSize, $angle, $fontPath, $logoText);
	$x    = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2);
	$y    = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) - ($logoSize/2.5);
	
	// put logoText into image - we need ttftext because of utf-8 support
	imagettftext($im, $logoSize, $angle, $x , $y, $txtColor, $fontPath, $logoText );
	// create new png in memory
	ob_start();
	imagepng($im);
	// retrieve it from mememory and save to file
	if(file_put_contents(ossn_route()->themes.'GreenByGreen/images/logo.png', ob_get_clean())){
			// save other settings
			$setting = new OssnSite;
			if(!$greetingText) {
				$setting->deleteSetting('gbg:greeting_text');
			} else {
				$setting->setSetting('gbg:greeting_text', $greetingText);
			}
			$setting->setSetting('gbg:logo_text_text', $logoText);
			$setting->setSetting('gbg:logo_text_color', $logoColor);
			$setting->setSetting('gbg:logo_text_size', $logoSize);
			
			$cache  = ossn_site_settings('cache');
			if($cache == false) {
					$done = true;
			} else {
					$done = 2;
			}								
	} else {
		$done = false;
		
	}
	imagedestroy($im);
}


$admin  = new OssnFile;
$admin->setFile('logo_admin');
$admin->setExtension(array(
		'jpg',
		'jpeg',
));
if(isset($admin->file['tmp_name']) && $admin->typeAllowed()){
	$file = $admin->file['tmp_name'];
	$size = filesize($file);
	if($size > 0){
			if($size > 500000){ //500KB
					ossn_trigger_message(ossn_print('theme:greenbygreen:logo:large'), 'error');
					redirect(REF);
			}
			$contents = file_get_contents($file);
			if(strlen($contents) > 0 && file_put_contents(ossn_route()->themes.'GreenByGreen/images/logo_admin.jpg', $contents)){
					$cache  = ossn_site_settings('cache');
					if($cache == false) {
							$done = true;
					} else {
							$done = 2;
					}								
			} else {
				$done = false;
		
			}
	}
}

if($done === true){
	ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
	redirect(REF);	
} elseif($done == 2){
	//redirect and flush cache
	ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));	
	$action = ossn_add_tokens_to_url("action/admin/cache/flush");
	redirect($action);	
} else {
	ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
	redirect(REF);		
}
