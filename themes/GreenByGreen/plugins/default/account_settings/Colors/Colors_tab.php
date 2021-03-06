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
$user = ossn_loggedin_user();
if($user->GreenByGreenColors) {
	$color = $user->GreenByGreenColors;
} else {
	$color = 'gbg_light_mode';
}
$params['color'] = $color;
$params['username'] = $user->username;
echo ossn_view_form('GreenByGreen/colors', array(
    'action' => ossn_site_url() . 'action/GreenByGreen/colors',
    'params' => $params	
));
?>