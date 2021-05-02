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
 
$setting = new OssnSite;

$frontpage_bg_lcolor = input('gbg:frontpage_bg_lcolor');
$setting->setSetting('gbg:frontpage_bg_lcolor', $frontpage_bg_lcolor);
$frontpage_bg_dcolor = input('gbg:frontpage_bg_dcolor');
$setting->setSetting('gbg:frontpage_bg_dcolor', $frontpage_bg_dcolor);
$frontpage_fg_color = input('gbg:frontpage_fg_color');
$setting->setSetting('gbg:frontpage_fg_color', $frontpage_fg_color);

$topbar_bg_lcolor = input('gbg:topbar_bg_lcolor');
$setting->setSetting('gbg:topbar_bg_lcolor', $topbar_bg_lcolor);
$topbar_bg_dcolor = input('gbg:topbar_bg_dcolor');
$setting->setSetting('gbg:topbar_bg_dcolor', $topbar_bg_dcolor);
$topbar_fg_color = input('gbg:topbar_fg_color');
$setting->setSetting('gbg:topbar_fg_color', $topbar_fg_color);
$topbar_hv_color = input('gbg:topbar_hv_color');
$setting->setSetting('gbg:topbar_hv_color', $topbar_hv_color);

$sidebar_bg_color = input('gbg:sidebar_bg_color');
$setting->setSetting('gbg:sidebar_bg_color', $sidebar_bg_color);
$sidebar_fg_mcolor = input('gbg:sidebar_fg_mcolor');
$setting->setSetting('gbg:sidebar_fg_mcolor', $sidebar_fg_mcolor);
$sidebar_hv_mcolor = input('gbg:sidebar_hv_mcolor');
$setting->setSetting('gbg:sidebar_hv_mcolor', $sidebar_hv_mcolor);
$sidebar_fg_scolor = input('gbg:sidebar_fg_scolor');
$setting->setSetting('gbg:sidebar_fg_scolor', $sidebar_fg_scolor);
$sidebar_hv_scolor = input('gbg:sidebar_hv_scolor');
$setting->setSetting('gbg:sidebar_hv_scolor', $sidebar_hv_scolor);
$sidebar_bb_color = input('gbg:sidebar_bb_color');
$setting->setSetting('gbg:sidebar_bb_color', $sidebar_bb_color);

$page_bg_color = input('gbg:page_bg_color');
$setting->setSetting('gbg:page_bg_color', $page_bg_color);
$page_fg_color = input('gbg:page_fg_color');
$setting->setSetting('gbg:page_fg_color', $page_fg_color);
$section_bg_color = input('gbg:section_bg_color');
$setting->setSetting('gbg:section_bg_color', $section_bg_color);
$link_fg_color = input('gbg:link_fg_color');
$setting->setSetting('gbg:link_fg_color', $link_fg_color);
$link_hv_color = input('gbg:link_hv_color');
$setting->setSetting('gbg:link_hv_color', $link_hv_color);
$input_bg_color = input('gbg:input_bg_color');
$setting->setSetting('gbg:input_bg_color', $input_bg_color);

$widget_head_bg_color = input('gbg:widget_head_bg_color');
$setting->setSetting('gbg:widget_head_bg_color', $widget_head_bg_color);
$widget_body_bg_color = input('gbg:widget_body_bg_color');
$setting->setSetting('gbg:widget_body_bg_color', $widget_body_bg_color);

$cache  = ossn_site_settings('cache');
if($cache == false) {
	$done = true;
} else {
	$done = 2;
}								

$data = '
/* const */
.ossn-red-borders {
	border: 1px solid #ec2828 !important;
}

.ossn-chat-windows-long .friends-list-item img {
    border: 3px solid #ec2828;
}
.ossn-required,
.ossn-chat-icon-offline:before {
	color: #ec2828;
}
.ossn-chat-base .ossn-chat-bar .friends-list-item .ossn-chat-icon-online,
img.ustatus.ossn-chat-icon-online {
    border: 3px solid #77d560;
}
.ossn-chat-icon-online:before {
	color: #77d560;
}
.friends-list-item .ossn-chat-icon-online {
	border: 1px solid #77d560 !important;
}

.ossn-group-profile .profile-header .group-name,
.ossn-profile .user-fullname {
	color: #F6F7F8;
}
/* front-page */
.body-background-image {
	background-image: linear-gradient(161deg, #' . $frontpage_bg_lcolor . ' 54%, #' . $frontpage_bg_dcolor . ' 50%);
}
.frontpage-bottom {
	background-color: #' . $frontpage_bg_dcolor . ';
}
.green-home-left-contents .description,
.footer-wrapper footer .ossn-footer-menu a {
	color: #' . $frontpage_fg_color . ';
}
.footer-wrapper footer .col-md-12 {
	border-color: #' . $frontpage_fg_color . ';
}
/* topbar */
.topbar {
	background-image: linear-gradient(161deg, #' . $topbar_bg_lcolor . ' 54%, #' . $topbar_bg_dcolor . ' 50%);
}
.topbar,
.topbar .site-name a,
.topbar-menu-right li a,
.topbar-menu-left li a,
.topbar .ossn-icons-topbar-friends,
.topbar .ossn-icons-topbar-messages,
.topbar .ossn-icons-topbar-notification i,
.topbar .ossn-icons-topbar-friends-new,
.topbar .ossn-icons-topbar-messages-new,
.topbar .ossn-icons-topbar-notifications-new i {
	color: #' . $topbar_fg_color . ';
}
.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	background-color: #' . $topbar_hv_color . ';
}
/* sidebar */
.sidebar {
	background-color: #' . $sidebar_bg_color . ';
}
.ossn-search {
	border-color: #' . $sidebar_bg_color . ';
}
.tooltip .tooltip-inner,
.newseed-uinfo .name a,
.sidebar-menu-nav li a {
	color: #' . $sidebar_fg_mcolor . ';
}
.sidebar-menu .menu-content li:hover {
	background-color: #' . $sidebar_hv_mcolor . ';
}
li[class^="menu-section-item-"] {
	color: #' . $sidebar_fg_scolor . ';
}
.sidebar-menu-nav ul .sub-menu li:hover,
.sidebar-menu-nav li .sub-menu li:hover {
	background-color: #' . $sidebar_hv_scolor . ';
}
.sidebar-menu-nav li,
.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	border-bottom-color: #' . $sidebar_bb_color . ';
}
/* page */
body {
	background-color: #' . $page_bg_color . ';
}
body,
pre,
.ap-name,
.ap-address,
div.token-input-dropdown ul li,
div.token-input-dropdown ul li .full_name,
div.token-input-dropdown ul li p,
.friend-tab-item .data .message-reciever .text,
.friend-tab-item .data .message-sender .text,
.ossn-search input[type="text"],
.ossn-form input[type="number"],
.ossn-form input[type="email"],
.ossn-form input[type="password"],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type="text"],
.comment-box,
.ossn-notifications-box,
.ossn-notifications-box .notfi-meta,
.ossn-notifications-box .type-name,
.link-preview-item-contents-desc,
.dropdown-menu>li>a,
.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	color: #' . $page_fg_color . ' !important;
}
::-webkit-scrollbar-track {
	/* background */
	background-color: #' . $page_bg_color . ';
}
::-webkit-scrollbar-thumb {
	/* glider */
	background-color: #' . $widget_head_bg_color . ';
}
.emojii-container .emojii-list-emoticons,
.ossn-chat-windows-long .inner,
.sidebar {
  scrollbar-color: #' . $widget_head_bg_color . ' #' . $page_bg_color . ' !important;
}
/* sections */
.emojii-container,
.dropdown-menu,
.ossn-wall-item,
.ossn-wall-container,
.ossn-layout-newsfeed .newsfeed-right,
.newsfeed-middle-top,
.ossn-layout-media .content,
.ossn-page-contents,
.page-sidebar,
.ossn-layout-module,
.ads-inserter-newsfeed,
.ossn-profile-sidebar {
	background-color: #' . $section_bg_color . ';
}
/* links */
.gbg-search-magnifying-glass,
.user-fullname.user-fullname-without-cover,
.ossn-group-profile .profile-header .group-name.group-name-without-cover,
.btn-link,
a,
.ossn-ad-item a,
.link-preview-item-title,
.time-created,
footer .ossn-footer-menu a,
.menu-likes-comments-share li:after,
.ossn-notifications-box .notfi-meta strong,
.ossn-notification-messages .user-item .data .name,
.notification-friends .notfi-meta a {
	color: #' . $link_fg_color . ';
}
.btn-link:focus,
.btn-link:hover,
.ossn-wall-container .wall-tabs .item:hover,
.ossn-wall-container .controls li:hover,
.dropdown-menu>li>a:focus,
.dropdown-menu>li>a:hover, 
a:hover {
	color: #' . $link_hv_color . ';
}
.ossn-form input[type="checkbox"]:checked,
.ossn-form input[type="radio"]:checked {
	background-color: #' . $link_hv_color . ';
}
/* input */
select:not([class*="ui-datepicker-"]),
.ossn-chat-icon-smile-set,
.friend-tab-item .friend-tab input[type="text"],
.ossn-form input[type="radio"],
.ossn-form input[type="checkbox"],
.ossn-form input[type="number"],
.ossn-form input[type="email"],
.ossn-form input[type="password"],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type="text"],
.comment-box {
	background-color: #' . $input_bg_color . ';
}

.ossn-form input[readonly],
.ossn-form text[readonly],
.ossn-form select[readonly],
.ossn-form textarea[readonly] {
	background-color: #' . $input_bg_color . ' !important;
}
::-webkit-input-placeholder {
	color:    #' . $page_fg_color . ';
	opacity:  .7;
}
:-moz-placeholder {
	color:    #' . $page_fg_color . ';
	opacity:  .7;
}
::-moz-placeholder {
	color:    #' . $page_fg_color . ';
	opacity:  .7;
}
:-ms-input-placeholder {
	color:    #' . $page_fg_color . ';
	opacity:  .7;
}
/* widgets */
.notification-friends li:hover,
.ossn-group-cover,
.ossn-profile .top-container .profile-cover,
.button-grey,
.btn-action,
.ap-suggestion:hover,
.ap-suggestion.ap-cursor,
.ossn-like-reactions-panel,
.pagination>li>a:focus,
.pagination>li>a:hover,
.pagination>li>span:focus,
.pagination>li>span:hover,
.ossn-chat-base .ossn-chat-bar .friends-list-item:hover,
.friend-tab-item .data .message-reciever .text,
.friend-tab-item .data .message-sender .text,
.message-box-recieved,
.message-box-sent,
#green-group-header-menu li > a:hover,
#green-group-header-menu ul li:hover > a,
#group-header-menu li ul a:hover,
#group-header-menu li ul li:hover > a,
#group-header-menu ul li:hover > a,
.ossn-notification-messages .user-item:hover,
.ossn-notifications-all li:hover,
.ossn-notifications-box .bottom-all,
.profile-edit-layout-title,
.profile-edit-tabs a:hover,
.profile-hr-menu ul li a:hover,
.dropdown-menu>li>a:focus,
.dropdown-menu>li>a:hover,
.ossn-widget .widget-heading,
.ossn-wall-container .wall-tabs,
.ossn-wall-container .controls,
.ossn-wall-item .meta,
.comments-list,
.comments-list .comments-item,
.comment-contents,
.ossn-layout-module .module-title,
.ossn-site-pages-title,
.ossn-message-box .title {
	background-color: #' . $widget_head_bg_color . ';
}

.ap-dropdown-menu,
div.token-input-dropdown,
.ossn-chat-base .ossn-chat-bar .friends-list,
.friend-tab-item .tab-container .data,
#group-header-menu li ul,
#group-header-menu ul,
#group-header-menu li a,
.ossn-group-profile .profile-header .header-bottom,
.ossn-profile .top-container,
.ossn-profile-edit-layout,
.profile-edit-tabs,
.profile-edit-layout-right,
.ossn-block-lists,
.ossn-site-pages-body,
.ossn-widget .widget-contents,
.ossn-wall-item .post-contents,
.ossn-users-list-item,
.ossn-photos,
.ossn-photo-viewer,
.container-table,
.link-preview-item-inner,
.ossn-message-box .contents,
.ossn-message-box .control,
.green-search-results,
.ossn-notification-unviewed {
	background-color: #' . $widget_body_bg_color . ';
}

.comments-list .comments-item {
	border-top: 5px solid #' . $widget_body_bg_color . ';
}
/* misc  */
.ossn-chat-base .ossn-chat-bar .inner,
.friend-tab-item .friend-tab,
.ossn-chat-tab-titles {
	background-color: #' . $topbar_bg_lcolor . ';
}
.ossn-chat-tab-titles .options,
.ossn-chat-base .ossn-chat-bar .inner,
.ossn-chat-inner-text,
.ossn-chat-tab-titles .text {
	color: #' . $topbar_fg_color . ';
}
.ossn-loading:after {
	border-color: #' . $topbar_bg_dcolor . ' transparent #' . $topbar_bg_dcolor . ' transparent;
}
[data-balloon]:after,
.tooltip > .tooltip-inner,
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
	background-color: #' . $sidebar_bg_color . ';
}
.tooltip.top .tooltip-arrow { 
	border-top-color: #' . $sidebar_bg_color . ';
}
.tooltip.right .tooltip-arrow {
	border-right-color: #' . $sidebar_bg_color . ';
}
.tooltip.bottom .tooltip-arrow {
	border-bottom-color: #' . $sidebar_bg_color . ';
}
.tooltip.left .tooltip-arrow {
	border-left-color: #' . $sidebar_bg_color . ';
}

@media (max-width: 480px) {
	#green-group-header-menu li > a:hover,
	#group-header-menu ul li:hover > a {
			background-color: #' . $widget_body_bg_color . ' !important;
	}
}

';

/* write custom css file */
$css_section = input('gbg:css:section:file');
$filename = $css_section . '.css';
$filepath = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/colorized/' . $filename;
file_put_contents ($filepath, $data);

/* create accompanying pdf */
require(ossn_route()->themes . 'GreenByGreen/vendors/fpdf182/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Courier','',14);
$pdf->Cell(0, 14, 'GreenByGreen ' . $css_section, 0, 1, 'C');
$pdf->Cell(120, 7, ossn_print('gbg:section:frontpage'), 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:frontpage_bg_lcolor', array('', '')), 1);
$pdf->Cell(20, 7, $frontpage_bg_lcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:frontpage_bg_dcolor', array('', '')), 1);
$pdf->Cell(20, 7, $frontpage_bg_dcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:frontpage_fg_color', array('', '')), 1);
$pdf->Cell(20, 7, $frontpage_fg_color, 1, 1);
$pdf->Cell(120, 7, ossn_print('gbg:section:topbar'), 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:topbar_bg_lcolor', array('', '')), 1);
$pdf->Cell(20, 7, $topbar_bg_lcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:topbar_bg_dcolor', array('', '')), 1);
$pdf->Cell(20, 7, $topbar_bg_dcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:topbar_fg_color'), 1);
$pdf->Cell(20, 7, $topbar_fg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:topbar_hv_color'), 1);
$pdf->Cell(20, 7, $topbar_hv_color, 1, 1);
$pdf->Cell(120, 7, ossn_print('gbg:section:sidebar'), 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_bg_color'), 1);
$pdf->Cell(20, 7, $sidebar_bg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_fg_mcolor', array('', '')), 1);
$pdf->Cell(20, 7, $sidebar_fg_mcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_hv_mcolor', array('', '')), 1);
$pdf->Cell(20, 7, $sidebar_hv_mcolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_fg_scolor', array('', '')), 1);
$pdf->Cell(20, 7, $sidebar_fg_scolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_hv_scolor', array('', '')), 1);
$pdf->Cell(20, 7, $sidebar_hv_scolor, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:sidebar_bb_color'), 1);
$pdf->Cell(20, 7, $sidebar_bb_color, 1, 1);
$pdf->Cell(120, 7, ossn_print('gbg:section:page'), 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:page_bg_color'), 1);
$pdf->Cell(20, 7, $page_bg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:page_fg_color'), 1);
$pdf->Cell(20, 7, $page_fg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:section_bg_color'), 1);
$pdf->Cell(20, 7, $section_bg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:link_fg_color'), 1);
$pdf->Cell(20, 7, $link_fg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:link_hv_color'), 1);
$pdf->Cell(20, 7, $link_hv_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:input_bg_color'), 1);
$pdf->Cell(20, 7, $input_bg_color, 1, 1);
$pdf->Cell(120, 7, ossn_print('gbg:section:widget'), 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:widget_head_bg_color', array('', '')), 1);
$pdf->Cell(20, 7, $widget_head_bg_color, 1, 1);
$pdf->Cell(100, 7, ossn_print('gbg:widget_body_bg_color', array('', '')), 1);
$pdf->Cell(20, 7, $widget_body_bg_color, 1, 1);

$filename = $css_section . '.pdf';
$filepath = ossn_route()->themes . 'GreenByGreen/plugins/default/css/core/pdf/' . $filename;
$pdf->Output('F', $filepath);


if($done === true){
	ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
	redirect(REF);	
} elseif($done == 2){
	//redirect and flush cache
	ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));	
	$action = ossn_add_tokens_to_url("action/admin/cache/flush");
	redirect($action);	
} else {
	ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
	redirect(REF);		
}
