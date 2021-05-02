<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
	<div class="green-login-extended-views">
		<?php echo ossn_fetch_extend_views('forms/login2/before/submit'); ?>
	</div>
	<div>
	<input type="text" name="username" class="form-control" placeholder="<?php echo ossn_print('username'); ?>" />
	<input type="password" name="password" class="form-control" placeholder="<?php echo ossn_print('password'); ?>" />
	<input type="submit" value="<?php echo ossn_print('site:login');?>" class="button-grey frontpage" /> 
	</div>
