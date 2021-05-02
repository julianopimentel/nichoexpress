<?php
$setting = new OssnSite;
$date_format = $setting->getSettings('gbg:date:format');
if($date_format && $date_format == 'exact') {
	$site_timepassed_data = 'site:timepassed:data';
} else {
	$site_timepassed_data = 'site:timepassed:data:default';
}

ossn_register_languages('fr', array(
	$site_timepassed_data => '%h %e, %G %H:%M|en_EN.UTF-8',
	'copyright' => '&copy; ',
	'theme:greenbygreen:cover:tooltip' => 'Turn device 90° clockwise and touch this area again to upload or reposition cover images',
	'theme:greenbygreen:dragging:instruction' => 'Note: For best results set the browser to a cover image width of 1040 - the current width is: %s',
	'personal' => 'Personal',
	'theme:greenbygreen:section:menu:settings' => 'Settings',
	'theme:greenbygreen:section:menu:mygroups' => 'My Groups',
	'theme:greenbygreen:section:menu:friendsonline'	=> 'Friends online',
	'theme:greenbygreen:topbar:menu:togglechatbar' => 'Chat Tab on/off <span></span>',
	
	'greenbygreen:settings' => 'GreenByGreen Setup',
	'greenbygreen2:settings' => 'GreenByGreen Setup',
	'greenbygreen3:settings' => 'GreenByGreen Setup',
	'admin:theme:greenbygreen' => 'GreenByGreen Setup',
	
	'theme:greenbygreen:settings:tab1' => 'Logos',
	'theme:greenbygreen:settings:tab2' => 'Colors',
	'theme:greenbygreen:settings:tab3' => 'Misc',

	'theme:greenbygreen:settings:tab2:css:instructions' =>
"		GreenByGreen is using three individual CSS files in order to colorize your frontpage, the inner part of your site in 'lightmode',
		and the inner part of your site in 'darkmode'. For your convenience, all default colors of the light and dark mode are listed in
		the two rightmost columns. And as you notice, the light and dark mode differs by default only for PAGE and WIDGETS.
		Initially, FRONTPAGE, TOPBAR and MENU are using the same colors in light as in dark mode.
		But of course it's up to you to style them individually, too.
		<br />
		Since the CSS editor is limited to store only one complete color set to be applied to either the frontpage, the light mode, or the dark mode,
		it makes sense to customize the frontpage completely first, then the light mode completely and finally the dark mode.
		<br />
		The steps required to customize the frontpage as an example are:
		<br />
		<ul>
		<li>click the color(s) you want to change in the 'custom color' column</li>
		<li>use the slider to get the color of your choice or enter the hexadecimal equivalent manually</li>
		<li>choose the section you want to assign these colors to (in this case 'Frontpage')</li>
		<li>click the 'Save' button</li>
		</ul>
		The setup page will reload and you will instantly see the result of your changes in the left preview column. When you're satisfied
		and finished with the frontpage repeat the same steps for your inner site in light mode and/or dark mode.
",
	'theme:greenbygreen:settings:tab2:css:frontpage:iframe:header' => 'Frontpage preview',
	'theme:greenbygreen:settings:tab2:css:light_mode:iframe:header' => 'Lightmode preview',
	'theme:greenbygreen:settings:tab2:css:dark_mode:iframe:header' => 'Darkmode preview',
	'theme:greenbygreen:settings:tab2:css:sections:label' => 'Choose a section of your site that you want to assign these colors to',
	'theme:greenbygreen:settings:tab2:css:frontpage' => 'Frontpage',
	'theme:greenbygreen:settings:tab2:css:light_mode' => 'Inner site in light mode',
	'theme:greenbygreen:settings:tab2:css:dark_mode' => 'Inner site in dark mode',
	'theme:greenbygreen:settings:tab2:css:colortables:label' => 'Color tables currently in use',	
	
	'theme:greenbygreen:settings:tab3:extra:newsfeed:link' => '&nbsp;Add an additional <b><i class="fa fa-bullhorn"></i> News Feed</b> entry to the <b>Links</b> submenu on the left sidebar',
	'theme:greenbygreen:settings:tab3:date:format:elapsed' => 'display timestamps as elapsed time (e.g. <i>25 minutes ago</i>)',
	'theme:greenbygreen:settings:tab3:date:format:exact' => 'display timestamps as exact time (e.g. <i>Feb 13, 2021 16:33</i>)',
	
	'theme:greenbygreen:account:settings:colors:tab' => 'Colors',
	'theme:greenbygreen:account:settings:colors:label' => 'Select your preferred site color mode',
	'theme:greenbygreen:account:settings:colors:mode:gbg_light_mode' => 'light',
	'theme:greenbygreen:account:settings:colors:mode:gbg_dark_mode' => 'dark',

	'theme:greenbygreen:account:settings:delete:account:tab' => 'Delete Account',
	'theme:greenbygreen:account:settings:delete:account:label' => "
	 Caution: Deleting your member account will irreversibly<br><br>
	 <ul>
	 <li>delete all of your personal data</li>
	 <li>as all relations to other members</li>
	 <li>and everything you ever posted</li>
	 </ul>
	 This action can not be undone.",
	'theme:greenbygreen:account:settings:delete:account:button' => 'Delete Account',
	'theme:greenbygreen:account:delete:error' => 'Your account could not be deleted - please contact the administrator',
	
	'theme:greenbygreen:frontpage:settings' => 'Frontpage Settings',
	'theme:greenbygreen:instruction:1' => 'Option 1: Replacement of the current site logo by a new one',
	'theme:greenbygreen:logo:site' => 'Logo Image',
	'theme:greenbygreen:instruction:2' => "Option 2: Replacement of the current site logo by some text (in case you don't upload an image)",
	'theme:greenbygreen:logo:text:text' => 'Logo Text',
	'theme:greenbygreen:logo:text:color' => 'Logo Color',
	'theme:greenbygreen:logo:text:size' => 'Logo Size',
	'theme:greenbygreen:instruction:3' => "Option 3: Replacement of the default Welcome message by a different one. Choose '<b>none</b>' to hide it completely",
	'theme:greenbygreen:greeting:text' => 'Welcome Text',
	'theme:greenbygreen:backend:settings' => 'Backend Settings',
	'theme:greenbygreen:instruction:4' => 'Option 1: Replacement of the current admin page logo image by a new one',
	'theme:greenbygreen:logo:admin' => 'Admin Backend Logo Image',
	'theme:greenbygreen:logo:large' => 'Logo file too large',
	
	'theme:greenbygreen:usertype:admin' => 'Admin',
	'theme:greenbygreen:usertype:moderator' => 'Moderator',
	'theme:greenbygreen:usertype:verified' => 'verified',
	'theme:greenbygreen:usertype:banned' => 'banned',

	'theme:greenbygreen:component:compatibility:error' => '<b>%s</b> cannot be enabled as long as <b>GreenByGreen</b> is activated',
	
	// colorizing
	'gbg:section' => 'Section',
	'gbg:custom' => "custom color",
	'gbg:default:lightmode' => 'default light',
	'gbg:default:darkmode' => 'default dark',

	'gbg:section:frontpage' => 'FRONTPAGE',
	'gbg:frontpage_bg_lcolor' => 'background %stop left%s',
	'gbg:frontpage_bg_dcolor' => 'background %sbottom right%s',
	'gbg:frontpage_fg_color' => 'foreground',

	'gbg:section:topbar' => 'TOPBAR',
	'gbg:topbar_bg_lcolor' => 'background %stop left%s',
	'gbg:topbar_bg_dcolor' => 'background %sbottom right%s',
	'gbg:topbar_fg_color' => 'foreground',
	'gbg:topbar_hv_color' => 'hovered',
	
	'gbg:section:sidebar' => 'MENU',
	'gbg:sidebar_bg_color' => 'background',
	'gbg:sidebar_fg_mcolor' => 'foreground %smain entries%s',
	'gbg:sidebar_hv_mcolor' => 'hovered %smain entries%s',
	'gbg:sidebar_fg_scolor' => 'foreground %ssub entries%s',
	'gbg:sidebar_hv_scolor' => 'hovered %ssub entries%s',
	'gbg:sidebar_bb_color' => 'separator lines',
	
	'gbg:section:page' => 'PAGE',
	'gbg:page_bg_color' => 'background',
	'gbg:page_fg_color' => 'foreground',
	'gbg:section_bg_color' => 'columns',
	'gbg:link_fg_color' => 'links',
	'gbg:link_hv_color' => 'hovered links',
	'gbg:input_bg_color' => 'input background',
	
	'gbg:section:widget' => 'WIDGETS',
	'gbg:widget_head_bg_color' => 'background %sheader%s',
	'gbg:widget_body_bg_color' => 'background %scontent%s',
	
	'menubuilder:submenu:personal' => 'Personal',
	
));