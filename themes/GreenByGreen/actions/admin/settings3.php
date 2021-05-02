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
 
$setting = new OssnSite;
if(input('gbg:extra_newsfeed_link')) {
	$setting->setSetting('gbg:extra_newsfeed_link', 'checked');
} else {
	$setting->deleteSetting('gbg:extra_newsfeed_link');
}
$date_format = input('gbg:date:format');
$setting->setSetting('gbg:date:format', $date_format);

$cache  = ossn_site_settings('cache');
if($cache == false) {
	$done = true;
} else {
	$done = 2;
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
