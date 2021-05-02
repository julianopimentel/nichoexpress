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
$users      = new OssnUser;
$search = input('search_users');

$list = $users->getUnvalidatedUSERS($search);
$count = $users->getUnvalidatedUSERS($search, 'count');
?>
<div class="row">
	<div class="col-md-12">
    <form method="post">
        <input type="text" name="search_users" placeholder="<?php echo ossn_print('search'); ?>" />
    </form>    
    </div>
</div>
<div class="row margin-top-10">
<div class="col-md-12">
<table class="table ossn-users-list">
    <tbody>
    <tr class="table-titles">
        <th><?php echo ossn_print('name'); ?></th>
        <th><?php echo ossn_print('validate'); ?></th>
        <th><?php echo ossn_print('edit'); ?></th>
        <th><?php echo ossn_print('delete'); ?></th>
    </tr>
    <?php
if($list) {
		foreach($list as $user) {
?>
        <tr>
            <td>
                <div class="left image"><img class="<?php echo $admin_image_class; ?>" src="<?php echo $user->iconURL()->smaller; ?>" title="<?php echo $user->username; ?>"/></div>
                <div class="name"><a href="<?php echo ossn_site_url("u/{$user->username}"); ?>"><?php echo $user->fullname; ?></a><br><span class="greenbygreen-user-list-admin-type-<?php echo $user->type; ?>"><?php echo $user->type; ?></span></div>
            </td>
            <td><a href="<?php echo ossn_site_url("action/admin/validate/user?guid={$user->guid}", true); ?>"><?php echo ossn_print('validate'); ?></a></td>
            <td>
                <a href="<?php echo ossn_site_url("administrator/edituser/{$user->username}");?>"><?php echo ossn_print('edit'); ?></a>
            </td>
            <td><a href="<?php echo ossn_site_url("action/admin/delete/user?guid={$user->guid}", true); ?>"><?php echo ossn_print('delete'); ?></a></td>
        </tr>
    <?php
		}
}
?>
    </tbody>
</table>
<?php echo ossn_view_pagination($count); ?>
</div>
</div>
