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

$groups = ossn_get_user_groups(ossn_loggedin_user());

if($groups) {
	// since OssnGroups->getMyGroups() is currently missing count and pagination
	// here's a little ugly replacement
	$count = count((array)$groups);
	$offset = 1;
	if(input('offset') != null) {
		$offset = input('offset');
	}
	$offset = ($offset * 10) - 1;
	$first_record = $offset - 9;
	$last_record  = $offset;
?>
	<div class="ossn-page-contents">
		<div class="ossn-widget">
			<div class="widget-heading">
				<i class="fa fa-venus-mars"></i> <?php echo ossn_print('theme:greenbygreen:section:menu:mygroups'); ?>
			</div>
			<div class="widget-contents">
			<?php
					$record_count = 0;
					foreach($groups as $group){
						if($record_count < $first_record || $record_count > $last_record) {
							$record_count++;
							continue;
						}
						$record_count++;
						$owner = ossn_user_by_guid($group->owner_guid);
					?>
					<div class="row green-mygroups-list">
						<div class="col-md-6 green-mygroups-list-name">
								<span>
								<a class="green-group-link" href="<?php echo 'group/' . $group->guid?>"><span  class="green-group-link"><?php echo $group->title;?></span></a>
								</span>
						<?php
						if($group->owner_guid != ossn_loggedin_user()->guid) {
						?>
						<span class="green-mygroups-list-owner">
								<i style="font-weight:normal; font-size:smaller">&nbsp;<?php echo ossn_print('ossn:group:by');?>&nbsp;<a href="<?php echo $owner->profileURL();?>"><?php echo $owner->fullname;?></a></i> 
						</span>
						<?php
						}
						?>
						</div>
					</div>	
					<?php
					}
					echo ossn_view_pagination($count);
			?>
			</div>
		</div>
	</div>
<?php
}
?>