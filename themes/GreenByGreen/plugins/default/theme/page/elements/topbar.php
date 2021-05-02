<?php
if(ossn_isLoggedin()){		
?>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-xs-2 left-side left">
				<div class="topbar-menu-left">
					<li id="sidebar-toggle" data-toggle='0'>
						<a role="button" data-target="#"> <i class="fa fa-th-list"></i></a>
					</li>
				</div>
			</div>
			<div class="col-md-7 site-name text-center hidden-sm hidden-xs">
				<span><a href="<?php echo ossn_site_url('home');?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ossn_site_settings('site_name');?></a></span>
			</div>
			<div class="hidden-lg hidden-md site-name text-center col-sm-2 col-xs-2">
				<a href="<?php echo ossn_site_url('home');?>"><i class="fa fa-home"></i></a>
			</div>
			<div class="col-md-3 col-xs-8 text-right right-side">
				<div class="topbar-menu-right">
					<ul>
					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-toggle' => 'dropdown',
									'data-target' => '#',
									'text' => '<i class="fa fa-sort-desc"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
						?>
						</div>
					</li>                
					<?php
							echo ossn_plugin_view('notifications/page/topbar'); 
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->
<script>
$(document).ready(function() { 
	$('.ossn-page-container').css('margin-top', '48px');
	$('#ossn-notif-notification').find('i').addClass('fa-bell');
	$('#ossn-notif-notification').find('i').removeClass('fa-globe');
});
</script>
<?php
} else {
	if(current_url(true) != ossn_site_url()) {
?>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 site-name text-center">
				<span><a href="<?php echo ossn_site_url();?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ossn_site_settings('site_name');?></a></span>
			</div>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->
<script>
$(document).ready(function() { 
	$('.ossn-page-container').css('margin-top', '48px');
});
</script>
<?php
	}
}
?>
