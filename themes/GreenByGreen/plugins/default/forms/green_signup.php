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
<div class="form-inline">
	<div class="ossn-form-group-half">
	    <input type="text" class="form-control" name="firstname" placeholder="<?php echo ossn_print('first:name'); ?>"/>
    </div>
    <div class="ossn-form-group-half"> 	   
	    <input type="text" class="form-control" name="lastname" placeholder="<?php echo ossn_print('last:name'); ?>"/>
    </div>
</div>
<div class="form-inline">
	<div class="ossn-form-group-half">
    	<input type="text" class="form-control" name="email" placeholder="<?php echo ossn_print('email'); ?>"/>
    </div>
    <div class="ossn-form-group-half"> 	   
    	<input name="email_re" class="form-control" type="text" placeholder="<?php echo ossn_print('email:again'); ?>"/>
    </div>
</div>
<div class="form-inline">
	<div class="ossn-form-group-half">
		<input type="text" class="form-control" name="username" placeholder="<?php echo ossn_print('username'); ?>"/>
	</div>
	<div class="ossn-form-group-half">
		<input id="hiddenPassword" type="password" class="form-control" name="password" placeholder="<?php echo ossn_print('password'); ?>" />
	</div>
	<div id="togglePassword" class="fa fa-eye" style="position:relative; top: -28px; right: 5px; height: 0px; float: right"></div>
</div>
<?php
$fields = ossn_default_user_fields();
if($fields){
			$vars	= array();
			$vars['items'] = $fields;
			echo ossn_plugin_view('user/fields/item', $vars);
}
?>
<div>
<?php echo ossn_fetch_extend_views('forms/signup/before/submit'); ?>
</div>

<div id="ossn-signup-errors" class="alert alert-danger"></div>

<p>
    <?php echo ossn_print('account:create:notice'); ?>
    <?php //Loosing typed in data when clicking Terms and Conditions link #620 ?>
    <a target="_blank" href="<?php echo ossn_site_url('site/terms'); ?>"><?php echo ossn_print('site:terms'); ?></a>
</p>
<div class="ossn-loading ossn-hidden"></div>
<input type="submit" id="ossn-submit-button" class="btn btn-success" value="<?php echo ossn_print('create:account'); ?>" class=""/>

<script type="text/javascript">
	$("#togglePassword").bind("click", function () {
		var hiddenPassword = $("#hiddenPassword");
		if (hiddenPassword.is(":visible")) {
			hiddenPassword.after('<input onchange = "greenPasswordInput(this);" id = "un_' + hiddenPassword.attr("id") + '" class="form-control" type = "text" value = "' + hiddenPassword.val() + '" />');
			hiddenPassword.hide();
			$("#togglePassword").removeClass("fa fa-eye");
			$("#togglePassword").addClass("fa fa-eye-slash");
		} else {
			hiddenPassword.val(hiddenPassword.next().val());
			hiddenPassword.next().remove();
			hiddenPassword.show();
			$("#togglePassword").removeClass("fa fa-eye-slash");
			$("#togglePassword").addClass("fa fa-eye");
		}
	});
	function greenPasswordInput(txt) {
		$(txt).prev().val($(txt).val());
	};
</script>