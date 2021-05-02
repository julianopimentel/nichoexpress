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
define('__THEMEDIR__', ossn_route()->themes . 'GreenByGreen/');

ossn_register_callback('ossn', 'init', 'theme_GreenByGreen_init', 2110);

function theme_GreenByGreen_init(){	
	//add bootstrap
	ossn_new_css('bootstrap.min', 'css/bootstrap/bootstrap.min.css');
	
	ossn_new_css('ossn.default', 'css/core/site');
	ossn_new_css('ossn.default.important', 'css/core/site_important');
	ossn_new_css('ossn.default.customcss', 'css/core/site_custom_css');
	ossn_new_css('ossn.admin.default', 'css/core/admin');

	//load bootstrap
	ossn_load_css('bootstrap.min', 'admin');
	ossn_load_css('bootstrap.min');

	ossn_load_css('ossn.default');
	ossn_load_css('ossn.default.important');
	ossn_load_css('ossn.default.customcss');
	ossn_load_css('ossn.admin.default', 'admin');
	
	ossn_extend_view('ossn/admin/head', 'theme_GreenByGreen_admin_head');
	ossn_extend_view('ossn/site/head', 'theme_GreenByGreen_site_head');
    ossn_extend_view('js/opensource.socialnetwork', 'js/script');

	// use fancybox provided by OssnPhotos
	ossn_new_external_js('jquery.fancybox.min.js', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js', false);
	ossn_new_external_css('jquery.fancybox.min.css', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css', false);
	ossn_load_external_css('jquery.fancybox.min.css');
	ossn_load_external_js('jquery.fancybox.min.js');
	
	if(ossn_isAdminLoggedin()) {
		ossn_register_action('GreenByGreen/settings', __THEMEDIR__ . 'actions/admin/settings.php');
		ossn_register_action('GreenByGreen/settings2', __THEMEDIR__ . 'actions/admin/settings2.php');
		ossn_register_action('GreenByGreen/settings3', __THEMEDIR__ . 'actions/admin/settings3.php');
		ossn_register_admin_sidemenu('admin:theme:greenbygreen', 'admin:theme:greenbygreen', ossn_site_url('administrator/settings/GreenByGreen'), ossn_print('admin:sidemenu:themes'));
		ossn_register_site_settings_page('GreenByGreen', 'settings/admin/GreenByGreen');
		ossn_register_site_settings_page('GreenByGreen2', 'settings/admin/GreenByGreen2');
		ossn_register_site_settings_page('GreenByGreen3', 'settings/admin/GreenByGreen3');
		ossn_unregister_menu_item('help', 'help', 'topbar_admin');
		ossn_unregister_menu_item('support', 'support', 'topbar_admin');
		ossn_unregister_menu_item('viewsite', 'viewsite', 'topbar_admin');
		ossn_register_callback('cache', 'created', 'theme_GreenByGreen_minify_css');
		ossn_register_page('gbgfp', 'theme_GreenByGreen_frontpage_pagehandler');
	}	

	if(ossn_isLoggedin()) {
		$user_loggedin = ossn_loggedin_user();

		ossn_add_hook('newsfeed_member', "sidebar:left", 'theme_GreenByGreen_member_menu_handler');
		ossn_add_hook('profile', 'edit:section', 'theme_GreenByGreen_profile_edit_section_page');	
		ossn_register_menu_item('profile/edit/tabs', array(
			'name' => 'Colors',
			'href' => '?section=Colors',
			'text' => ossn_print('theme:greenbygreen:account:settings:colors:tab'),
			'priority' => 100
		));									
		ossn_register_action('GreenByGreen/colors', __THEMEDIR__ . 'actions/user/colors.php');	

		if(!ossn_isAdminLoggedin()) {
			ossn_register_menu_item('profile/edit/tabs', array(
				'name' => 'DeleteAccount',
				'href' => '?section=DeleteAccount',
				'text' => ossn_print('theme:greenbygreen:account:settings:delete:account:tab'),
				'priority' => 900
			));									
			ossn_register_action('GreenByGreen/delete_account', __THEMEDIR__ . 'actions/user/delete_account.php');	
		}
		
		ossn_register_sections_menu('newsfeed', array(
			'name' => 'settings',
			'text' => ossn_print('theme:greenbygreen:section:menu:settings'),
			'url' => ossn_loggedin_user()->profileURL('/edit'),
			'parent' => 'personal',
			'priority' => 1,
		));
		ossn_unregister_menu_item('account_settings', 'account_settings', 'topbar_dropdown');
		ossn_unregister_menu_item('deleteaccount', 'deleteaccount', 'topbar_dropdown');

		if(com_is_active('OssnChat') && com_is_active('OssnMessages')) {
			ossn_register_sections_menu('newsfeed', array(
				'name' => 'friendsonline',
				'text' => ossn_print('theme:greenbygreen:section:menu:friendsonline'),
				'url' => ossn_site_url('friendsonline'),
				'parent' => 'personal',
				'priority' => 5,
			));
			ossn_register_page('friendsonline', 'theme_GreenByGreen_pagehandler');
			
			ossn_register_menu_item('topbar_dropdown', array(
				'name' => 'togglechatbar',
				'text' => ossn_print('theme:greenbygreen:topbar:menu:togglechatbar'),
				'href' => 'javascript:void(0);',
				'priority' => 900
			));	
		}
		if(com_is_active('OssnGroups')) {
			ossn_register_sections_menu('newsfeed', array(
				'name' => 'mygroups',
				'text' => ossn_print('theme:greenbygreen:section:menu:mygroups'),
				'url' => ossn_site_url('mygroups'),
				'parent' => 'personal',
				'priority' => 10,
			));
			ossn_register_page('mygroups', 'theme_GreenByGreen_pagehandler');
		}

		ossn_register_callback('component', 'enabled', 'theme_GreenByGreen_compatibility_check');
	}
}

function theme_GreenByGreen_compatibility_check($event, $type, $params) {
	$incompatible_coms = array('fancybox');
	if(in_array($params['component'], $incompatible_coms)) {
		ossn_trigger_message(ossn_print('theme:greenbygreen:component:compatibility:error', array($params['component'])), 'error');
		$com = new OssnComponents;
		$com->DISABLE($params['component']);
	}
}

function theme_GreenByGreen_frontpage_pagehandler() {
	echo ossn_plugin_view('pages/contents/gbgfp');
}

function theme_GreenByGreen_profile_edit_section_page($hook, $type, $return, $params){
		if($params['section'] == 'Colors'){
			return ossn_plugin_view('account_settings/Colors/Colors_tab');
		}
		if($params['section'] == 'DeleteAccount'){
			return ossn_plugin_view('account_settings/DeleteAccount/DeleteAccount_tab');
		}
}

function theme_GreenByGreen_minify_css($event, $type, $params) {
	OssnFile::DeleteDir(ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/cache');
	require_once(ossn_route()->libs . 'minify/CSSmin.php');
	$minify = new CSSmin;
		
	$dir = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/cache';
	$sub = $params['time'];
	if(!is_dir($dir)) {
		mkdir("{$dir}/{$sub}/", 0755, true);
	}
	$css_src_dir = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/colorized';
	$css_src_files = array_diff(scandir($css_src_dir), array('..', '.'));
	foreach($css_src_files as $file) {
		$cache_file = "{$dir}/{$sub}/{$file}";
		$css        = $minify->run(file_get_contents("{$css_src_dir}/{$file}"));
		file_put_contents($cache_file, $css);
	}
}

function theme_GreenByGreen_member_menu_handler($hook, $type, $return) {
		$setting = new OssnSite;
		if(!$setting->getSettings('gbg:extra_newsfeed_link')) {
			ossn_unregister_menu_item('newsfeed', 'links', 'newsfeed');
		}
		theme_GreenByGreen_remove_group_menu_items();

		/* menu transfers */
		theme_GreenByGreen_transfer_menu_item('notifications', 'links', 'newsfeed', true, 'personal', 2);
		theme_GreenByGreen_transfer_menu_item('messages', 'links', 'newsfeed', true, 'personal', 3);
		theme_GreenByGreen_transfer_menu_item('friends', 'links', 'newsfeed', true, 'personal', 4);
		theme_GreenByGreen_transfer_menu_item('photos', 'links', 'newsfeed', true, 'personal', 6);
		theme_GreenByGreen_transfer_menu_item('notes', 'links', 'newsfeed', true, 'personal', 7);
		
		theme_GreenByGreen_transfer_menu_item('myblogs', 'blogs', 'newsfeed', true, 'personal', 20);
		theme_GreenByGreen_transfer_menu_item('files_my', 'files', 'newsfeed', true, 'personal', 21);
		theme_GreenByGreen_transfer_menu_item('videos_my', 'videos', 'newsfeed', true, 'personal', 22);
		theme_GreenByGreen_transfer_menu_item('events_my', 'event', 'newsfeed', true, 'personal', 23);

		theme_GreenByGreen_transfer_menu_item('newsfeed', 'links', 'newsfeed', true, 'links', 100);
		theme_GreenByGreen_transfer_menu_item('invite_friends', 'links', 'newsfeed', true, 'links', 101);

		return $return;
}

function theme_GreenByGreen_remove_group_menu_items() {
		global $Ossn;
		if(isset($Ossn->menu['newsfeed']['groups'])) {
			foreach($Ossn->menu['newsfeed']['groups'] as $key => $item) {
				if($item['name'] != 'addgroup' && $item['name'] != 'allgroups') {
					unset($Ossn->menu['newsfeed']['groups'][$key]);
				}
			}
		}
}

function theme_GreenByGreen_transfer_menu_item($name, $menu, $menutype = 'newsfeed', $entry_transfer = false, $destination, $priority) {
		global $Ossn;
		if(isset($Ossn->menu[$menutype][$menu])) {
			foreach($Ossn->menu[$menutype][$menu] as $key => $item) {
				if($item['name'] == $name) {
					if($entry_transfer) {
						$entry = $Ossn->menu[$menutype][$menu][$key];
						if($entry) {
							ossn_register_sections_menu('newsfeed', array(
							'name' => $entry['name'],
							'text' => $entry['text'],
							'url' => $entry['href'],
							'parent' => $destination,
							'priority' => $priority,
							));
						}
					}
					unset($Ossn->menu[$menutype][$menu][$key]);
				}
			}
		}
}

function theme_GreenByGreen_pagehandler($home, $handler) {
		switch($handler) {
				case 'mygroups':
						$title = ossn_print('theme:greenbygreen:section:menu:mygroups');
						if(com_is_active('OssnGroups')) {
								$contents['content'] = ossn_plugin_view('pages/contents/user/mygroups');
						}
						$content = ossn_set_page_layout('contents', $contents);
						echo ossn_view_page($title, $content);
						break;
				
				case 'friendsonline':
						$title = ossn_print('theme:greenbygreen:section:menu:friendsonline');
						if(com_is_active('OssnChat')) {
								$contents['content'] = ossn_plugin_view('pages/contents/user/friendsonline');
						}
						$content = ossn_set_page_layout('contents', $contents);
						echo ossn_view_page($title, $content);
						break;
				
				default:
						ossn_error_page();
						break;
						
		}
}

function theme_GreenByGreen_site_head(){
	$head	 = array();
	// <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	$head[]  = ossn_html_css(array(
				'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
				// 'href' => '//use.fontawesome.com/releases/v5.7.2/css/all.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=PT+Sans:400italic,700,400',
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));	

	$cache  = ossn_site_settings('cache');
	$sub	= ossn_site_settings('last_cache');
	if($cache) {
		if(ossn_isLoggedin()) {
			$user = ossn_loggedin_user();
			if($user->GreenByGreenColors) {
				$color = $user->GreenByGreenColors;
			} else {
				$color = 'gbg_light_mode';
			}
			if(input('gbg_mode')) {
				$color = input('gbg_mode');
			}
			if($color == 'gbg_light_mode') {
				$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/cache/' . $sub . '/light_mode.css'
				));
			} else {
				$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/cache/' . $sub . '/dark_mode.css'
				));
			}	
			
		} else {
			$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/cache/' . $sub . '/frontpage.css'
			));
		}
	} else {
		if(ossn_isLoggedin()) {
			$user = ossn_loggedin_user();
			if($user->GreenByGreenColors) {
				$color = $user->GreenByGreenColors;
			} else {
				$color = 'gbg_light_mode';
			}
			if(input('gbg_mode')) {
				$color = input('gbg_mode');
			}
			if($color == 'gbg_light_mode') {
				$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/colorized/light_mode.css'
				));
			} else {
				$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/colorized/dark_mode.css'
				));
			}	
		} else {
			$head[]  = ossn_html_css(array(
					'href' => ossn_theme_url() . 'plugins/default/css/core/colorized/frontpage.css'
			));
		}
	}	
	return implode('', $head);
}

function theme_GreenByGreen_admin_head(){
	$head	 = array();	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=PT+Sans:400italic,700,400',
					'href' =>  '//fonts.googleapis.com/css?family=Roboto+Slab:300,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
			  ));
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/jscolor/colorpicker.js'
			  ));
	return implode('', $head);
}
