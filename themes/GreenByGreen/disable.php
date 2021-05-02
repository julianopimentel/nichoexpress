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

if(!copy(ossn_route()->themes . 'GreenByGreen/images/nopictures/photos/org-nophoto-album.png', ossn_route()->com . 'OssnPhotos/images/nophoto-album.png')) { 
	error_log('GreenByGreen: Error copying org-nophoto-album.png');
}

$dst_dir = ossn_get_userdata() . 'themes/GreenByGreen/plugins/default/css/core/colorized';
if(!is_dir($dst_dir)) {
	mkdir("{$dst_dir}", 0755, true);
}
$src_dir = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/colorized/';
$files = array('dark_mode.css', 'frontpage.css', 'light_mode.css');
foreach($files as $file) {
	if(!copy($src_dir . $file, $dst_dir . '/' . $file)) { 
		error_log('GreenByGreen: Error saving ' . $dst_dir . '/' . $file);
	}
}

$dst_dir = ossn_get_userdata() . 'themes/GreenByGreen/plugins/default/css/core/pdf';
if(!is_dir($dst_dir)) {
	mkdir("{$dst_dir}", 0755, true);
}
$src_dir = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/pdf/';
$files = array('dark_mode.pdf', 'frontpage.pdf', 'light_mode.pdf');
foreach($files as $file) {
	if(!copy($src_dir . $file, $dst_dir . '/' . $file)) { 
		error_log('GreenByGreen: Error saving ' . $dst_dir . '/' . $file);
	}
}

$dst_dir = ossn_get_userdata() . 'themes/GreenByGreen/plugins/default/css/core';
$src_dir = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/';
$files = array('site_custom_css.php');
foreach($files as $file) {
	if(!copy($src_dir . $file, $dst_dir . '/' . $file)) { 
		error_log('GreenByGreen: Error saving ' . $dst_dir . '/' . $file);
	}
}

$dst_dir = ossn_get_userdata() . 'themes/GreenByGreen/images';
if(!is_dir($dst_dir)) {
	mkdir("{$dst_dir}", 0755, true);
}
$src_dir = ossn_route()->themes . 'GreenByGreen/images/';
$files = array('favicon.ico', 'logo.png', 'logo_admin.jpg');
foreach($files as $file) {
	if(!copy($src_dir . $file, $dst_dir . '/' . $file)) { 
		error_log('GreenByGreen: Error saving ' . $dst_dir . '/' . $file);
	}
}
