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
$search = input('search_users');
$users = new OssnUser;
$pagination = new OssnPagination;

if (!empty($search)) {
   $list = $users->searchUsers(array(
				 'keyword' => $search,
			));
   $count = $users->searchUsers(array(
				 'count' => true,
			));  
} else {
   $list = $users->searchUsers(array(
				 'keyword' => false,
			));
   $count = $users->searchUsers(array(
				 'keyword' => false,
				 'count' => true,
			));  }
?>
<div class="margin-top-10">
<table class="table ossn-users-list">
    <tbody>
    <tr class="table-titles">
        <th><?php echo ossn_print('name'); ?></th>
        <th><?php echo ossn_print('lastlogin'); ?></th>
        <th><?php echo ossn_print('edit'); ?></th>
        <th><?php echo ossn_print('delete'); ?></th>
    </tr>
    <?php 
	if($list){
	foreach ($list as $user) {
		$user_type = 'normal';
		if($user->type == 'admin') {
			$user_type = 'admin';
		} else {
			if($user->is_banned && $user->is_banned == '1'){
				$user_type = 'banned';
			} else {
				if($user->can_moderate && $user->can_moderate == 'yes'){
					$user_type = 'moderator';
				} else {
					if($user->is_verified_user && $user->is_verified_user == '1'){
						$user_type = 'verified';
					}
				}
			}
		}
		
		$lastlogin = '';
		if(!empty($user->last_login)){
			$lastlogin_date = date('d M Y', $user->last_login);
			$lastlogin_time = date('H:i', $user->last_login);
			$lastlogin = $lastlogin_date . '<br>' . $lastlogin_time;
		}
        ?>
        <tr>
            <td>
                <div class="left image"><img class="<?php echo $admin_image_class; ?>" src="<?php echo $user->iconURL()->small; ?>" title="<?php echo $user->username; ?>"/></div>
                <div class="name"><a href="<?php echo ossn_site_url("u/{$user->username}"); ?>"><?php echo $user->fullname; ?></a><br><span class="greenbygreen-user-list-admin-type-<?php echo $user_type; ?>"><?php echo ossn_print('theme:greenbygreen:usertype:' . $user_type); ?></span></div>
            </td>
            <td><?php echo $lastlogin; ?></td>
            <td>
                <a href="<?php echo ossn_site_url("administrator/edituser/{$user->username}"); ?>"><?php echo ossn_print('edit'); ?></a>
            </td>
            <td><a href="<?php echo ossn_site_url("action/admin/delete/user?guid={$user->guid}", true); ?>" class="userdelete"><?php echo ossn_print('delete'); ?></a></td>

        </tr>
    <?php 
		} 
	}
	?>
    </tbody>
</table>
</div>
<div class="row">
	<?php echo ossn_view_pagination($count); ?>
</div>
