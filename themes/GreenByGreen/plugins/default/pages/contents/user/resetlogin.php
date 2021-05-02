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
?>
<div class="row">
       <div class="col-md-6 col-sm-6 col-xs-8 col-center ossn-page-contents">
    	<?php 
			$contents = ossn_view_form('user/resetlogin', array(
 				   'action' => ossn_site_url('action/resetlogin'),
  				   'class' => 'ossn-reset-login',
			));
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('reset:password') . "<span style='float: right'><a href='" . ossn_site_url() . "'><i class='fa fa-close'></i></a></span>",
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