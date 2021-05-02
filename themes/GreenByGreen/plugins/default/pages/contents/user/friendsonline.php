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
?>

<div class="ossn-page-contents">
	<div class="ossn-widget">
		<div class="widget-heading">
			<i class="fa fa-commenting"></i> <?php echo ossn_print('theme:greenbygreen:section:menu:friendsonline'); ?>
		</div>
		<div class="widget-contents">

<?php
$chat = new OssnChat;
$users = $chat->getOnlineFriends('', 10);
if ($users) {
    foreach ($users as $user) {
		$user = arrayObject($user, 'OssnUser'); ?>
			<div class="row ossn-users-list-item">
    	        <div class="col-md-2 col-sm-2 col-xs-2">
					<img src="<?php echo $user->iconURL()->large; ?>" width="100" height="100"/>
				</div>
                <div class="col-md-10 col-sm-10 col-xs-10">
	    	        <div class="uinfo">
                        <?php
							$user_name = $user->first_name . ' ' . $user->last_name;
							if (com_is_active('DisplayUsername')) {
								$user_name = $user->username;
							}
							echo ossn_plugin_view('output/url', array(
									'text' => $user_name,
									'href' =>  $user->profileURL(),
									'class' => 'userlink',
							));						
						?>
        	   		</div>
                    <div class="right users-list-controls">
						<input onclick="Ossn.ChatExpand('<?php echo $user->username; ?>')" type="button" class="btn btn-success btn-sm" value="<?php echo ossn_print('message');?>">
						<input onclick="Ossn.ChatnewTab(<?php echo $user->guid;?>); Ossn.ChatOpenTab(<?php echo $user->guid;?>);" type="button" class="btn btn-success btn-sm" value="Chat">
                   </div>
               </div>         
			</div>
    <?php
    }
}?>
		</div>
	</div>
</div>
