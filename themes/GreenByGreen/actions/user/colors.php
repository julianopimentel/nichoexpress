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

$user_get = ossn_user_by_username(input('username'));
if ((!$user_get) || ($user_get && $user_get->guid !== ossn_loggedin_user()->guid)) {
    redirect("home");
}
$user_get->data = new stdClass;
$guid = $user_get->guid;
if (!empty($guid)) {
	$user_get->data->GreenByGreenColors = input('GreenByGreenColors');
	$user_get->save();
    ossn_trigger_message(ossn_print('user:updated'), 'success');
}
redirect(REF);
