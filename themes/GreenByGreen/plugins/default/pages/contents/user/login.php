<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$error = input('error');
?>
<div class="row">
       <div class="col-md-4 col-sm-6 col-xs-8 col-center ossn-page-contents">
    <?php if ($error == 1) { ?>
        <div class="alert alert-danger">
            <strong><?php echo ossn_print('login:error'); ?></strong><br/>
            <p><?php echo ossn_print('login:error:sub'); ?></p>
        </div>
    	<?php } ?>       
    	<?php 
			$contents = ossn_view_form('login2', array(
            		'id' => 'ossn-login',
           			'action' => ossn_site_url('action/user/login'),
        	));
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('site:login') . "<span style='float: right'><a href='" . ossn_site_url() . "'><i class='fa fa-close'></i></a></span>",
						'contents' => $contents,
						'class' => 'green-create-account',
			));
			?>	       			
       </div>     
</div>
<script>
$(document).ready(function() {
	$('.opensource-socalnetwork').css('background', 'unset');
	$('html').addClass('frontpage-bottom');
	$('.footer-wrapper').css('bottom', '0');
});
</script>