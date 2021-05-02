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
<div class="row">
	<div class="col-xs-6 col-xs-offset-3 ossn-page-contents green-error-content">
 			<div class="ossn-error-page">
				<i class="fa fa-exclamation-triangle"></i>
				<?php
				if(ossn_isLoggedin()) {
				?>
					<div class="error-text"><?php echo ossn_print('page:error:text'); ?></div>
				<?php
				} else {
					header('Location: ' . ossn_site_url());
					exit;
				}
				?>
			</div>   
    </div>
</div>