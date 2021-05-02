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

/******************************
	Basic
**********************************/

.footer-wrapper {
	width: 100%;
	position: absolute;
}

.ossn-search {
	margin-top: -2px !important;
    border-width: 4px;
	border-style: solid;
	border-radius: 1px;
}

.ossn-search input[type='text'] {
    width: 100% !important;
    margin: 0 auto;
    border-radius: 1px;
    height: 30px;
}

.gbg-search-magnifying-glass {
	position: absolute;
	top: 10px;
	right: 0px;
	z-index: 2;
	width: 25px;
	text-align: center;
}

body {
	font-size: 14px;
	font-family: 'PT Sans', sans-serif;
	height: 100%;
}

::-webkit-scrollbar {
	width: 12px;
}

.ossn-messages .message-inner,
.emojii-container .emojii-list-emoticons,
.ossn-chat-windows-long .inner,
.sidebar {
	scrollbar-width: thin !important;
}

::-webkit-scrollbar-thumb {
	border: 1px solid rgba(144, 144, 144, 0.75);
	border-radius: 3px;
}

a:hover {
	text-decoration: none;
}

.ossn-form input[type='number'],
.ossn-form input[type='email'],
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
	width: 100%;
	border: 1px solid rgba(144, 144, 144, 0.75);
	padding: 8px;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	box-shadow: none;
	border-radius: 4px;
	-webkit-box-shadow: none
}

.ossn-form input[type='submit'] {
	margin-top: 5px;
	margin-bottom: 5px;
}


.ossn-form input[type='radio'] {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	width: 15px;
	height: 15px;
	border-radius: 9px;
	border: 1px solid rgba(144, 144, 144, 0.75);
}

.ossn-form input[type='checkbox'] {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	width: 15px;
	height: 15px;
	border-radius: 3px;
	border: 1px solid rgba(144, 144, 144, 0.75);
}

.ossn-form input[type='radio']:focus,
.ossn-form input[type='checkbox']:focus {
	outline: 0px;
}

.ossn-form input[type='radio']:checked,
.ossn-form input[type='checkbox']:checked {
	border: 3px solid;
}

.form-control {
	height: initial;
}

.fa {
	margin-right: 5px;
}

.ossn-hidden {
	display: none;
}

p {
	font-size: 15px;
}

.col-center {
	float: none;
	margin: 0 auto;
}

.container-table {
	display: table;
	width: 100%;
}

.center-row {
	display: table-cell;
	text-align: center;
}

.radio-block {
	margin-top: 0px;
	margin-bottom: 0px;
}

.radio-block span {
	margin-right: 10px;
	font-size: 14px;
	margin-left: 10px;
}

.btn {
	padding: 4px 8px;
}

.btn-primary {
	background-color: #999;
	border-color: #999;
}
.btn-primary:hover { 
	background-color: #888 ;
	border-color: #999;
	
} 

/************************************
	Layouts
************************************/

.ossn-layout-contents,
.ossn-layout-media,
.ossn-layout-newsfeed {
	margin-top: 10px;
	min-height: 370px;
}

.ossn-home-container,
.ossn-layout-startup {
	min-height: 560px;
}

.ossn-home-container .ossn-page-contents {
	background: rgba(255, 255, 255, 0);
	border: 0px;
	box-shadow: unset;
}

.green-search-results {
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	padding: 10px;
	padding-right: 15px;
}

.ossn-layout-startup {
	min-height: 560px;
	height: -webkit-fill-available;
	height: -moz-available;
	height: fill-available;
}

.ossn-home-container {
	margin-top: 48px;
}

.ossn-wall-container,
.ossn-wall-item,
.ossn-layout-newsfeed .newsfeed-right,
.page-sidebar,
.ossn-profile-sidebar,
.ossn-profile-edit-layout,
.ossn-layout-module,
.ads-inserter-newsfeed {
	padding: 5px;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
}

.ossn-page-container {
	overflow-x: hidden;
	min-height: 400px;
}

.ossn-layout-module .module-title {
	border-radius: 3px;
	padding: 10px;
}


.ossn-layout-module .module-title .title {
	font-weight: bold;
	display: inline-block;
}

.ossn-layout-module .controls {
	float: right;
	display: inline-table;
}

.ossn-layout-media {
	margin-top: 10px;
}

.ossn-layout-media .like-share,
.ossn-layout-media .comments-list {
	margin-left: 0px;
	margin-right: 0px;
}

.ossn-layout-media .content,
.ossn-page-contents {
	padding: 5px;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
}

.opensource-socalnetwork {
	min-height: 500px;
}

.ossn-home-container .row {
	margin-right: 10px;
	margin-left: 10px;
}

#ossn-signup-errors {
	display: none;
	margin-top: 10px;
}

.green-error-content {
	margin-top: 20px;
}

.ossn-error-page {
	text-align: center;
	padding-top: 8px;
}

.ossn-error-page .error-heading {
	font-size: 50px;
	font-weight: bold;
}

.ossn-error-page .error-text {
	font-size: 16px;
}

.ossn-error-page .fa-exclamation-triangle {
	font-size: 100px;
}

.ossn-page-loading-annimation {
	background: #5a6d61;
	opacity: .9;
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
}

.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
	width: 24px;
	margin: 0 auto;
	margin-top: 20%;
}

.newsfeed-middle-top {
	display: none;
	border-radius: 2px;
	margin-top: 2px;
	margin-bottom: 4px;
	padding: 5px;
}

/*******************************
	Topbar	
********************************/

.topbar {
    height: 48px;
	z-index: 99;
	position: fixed;
	top: 0px;
	width: 100%;
	-webkit-box-shadow: 0px 2px 4px 0px rgba(153,153,153,1);
	-moz-box-shadow: 0px 2px 4px 0px rgba(153,153,153,1);
	box-shadow: 0px 2px 4px 0px rgba(153,153,153,1);
}

.topbar .fa {
	font-size: 20px;
	margin-top: 5px;
}

.topbar .site-name a {
	text-transform: uppercase;
	font-size: 20px;
	padding: 10px;
	display: block;
	font-weight: bold;
}

.topbar .site-name a:hover {
	text-decoration: none;
}

.topbar-menu-left {
	position: relative;
	z-index: 1;
}

.topbar-menu-right {
	width: 100%;
}

.topbar-menu-right li,
.topbar-menu-left li {
	display: inline-block;
}

.topbar-menu-right li a,
.topbar-menu-left li a {
	padding: 10px;
	display: block;
}

.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	cursor: pointer;
}

.topbar .right-side-nospace .topbar-menu-right {
	margin-right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .right-side-space .topbar-menu-right {
	margin-right: 10px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.ossn-topbar-dropdown-menu {
	float: right;
}

.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	display: block;
	width: 100%;
}

.ossn-topbar-dropdown-menu .dropdown-menu {
	margin: 1px -120px 0;
}


/***********************************
	Ossn Wall
*************************************/

.ossn-wall {}

.ossn-wall-items {}

.ossn-wall-item {
	margin-top: 20px;
}

.comments-item .row,
.ossn-wall-item .row {
	margin: 0px;
}

.row.gbg-comment-field {
	margin-left: -11px;
	margin-right: -11px;
}

.ossn-wall-item .friends a {
	text-decoration: none;
}

.ossn-wall-item .friends a:first-child:before {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
}

.ossn-wall-item .user-img {
	display: inline-block;
	float: left;
	margin-right: 10px;
}

.ossn-wall-item .meta {
    height: 50px;
    padding-right: 14px;
	padding-left: 14px;
}

.ossn-wall-item .meta .user {
	display: inline-block;
	margin-top: 3px;
}

.ossn-wall-item .meta .user a {
	font-weight: bold;
}

.ossn-wall-item .post-contents {
	padding: 15px;
}

.ossn-wall-item .post-contents p {
	word-break: break-word;
	text-align: justify;
	margin: 0px;
}

.ossn-wall-item .post-contents img {
	max-width: 50%;
	display: block;
	margin-bottom: 10px;
}

.ossn-wall-item .meta .post-menu {
	float: right;
	padding-top: 17px;
}

.ossn-wall-container {
	margin-bottom: 10px;
}

.ossn-wall-container textarea {
	padding: 10px;
	width: 100%;
	border: 0px;
	border-radius: 0px;
	resize: vertical;
	outline: none;
}

.ossn-wall-container .controls {
	height: 40px;
	width: 100%;
	margin-top: -5px;
	padding-right: 10px;
}

.ossn-wall-container .wall-tabs .item {
	padding: 10px;
	display: inline-flex;
	cursor: pointer;
	font-weight: bold;
	font-size: 13px;
}

.ossn-wall-container .wall-tabs .item div {
	display: inline-block;
}

.ossn-wall-container .wall-tabs .item .text {
	font-weight: bold;
	margin-top: 1px;
	margin-left: 5px;
	position: absolute;
	font-size: 15px;
}

.ossn-wall-container .tabs-input {}

.ossn-wall-container .controls li {
	padding: 10px;
	display: inline-block;
	cursor: pointer;
}

.ossn-wall-privacy {
	float: right;
	margin-right: 5px;
}

.ossn-wall-container input[type='submit'] {
	padding: 3px 20px;
	display: block;
	margin-top: 6px;
}

.ossn-wall-container i {
	font-size: 15px;
}

.ossn-wall-container input[type="file"] {
	width: 100%;
	border-left: 1px dashed rgba(144, 144, 144, 0.25);
	border-right: 1px dashed rgba(144, 144, 144, 0.25);
	border-top: 1px dashed rgba(144, 144, 144, 0.25);
	margin-bottom: 5px;
	margin-top: -5px;
	padding: 5px;
	outline: none;
}

.ossn-wall-container input[type="text"] {
	width: 100%;
	border-top: 1px dashed rgba(144, 144, 144, 0.25);
	padding: 5px;
	outline: none;
}

#token-input-ossn-wall-friend-input {
	width: 100% !important;
	border-top: 1px dashed rgba(144, 144, 144, 0.25);
}

#ossn-wall-form .ossn-loading {
	margin: 7px;
}

.ossn-wall-item-type {
	display: inline-block;
}

.ossn-wall-item .friends {
	display: inline-block;
}

.ossn-photos-wall {
	border: 0px !important;
}

.ap-dropdown-menu {
	border: 1px solid rgba(144, 144, 144, 0.75);
}

option:hover {
    background-color: black !important;
}
.ossn-comment-attach-photo .fa-paper-plane {
    float: right;
    position: relative;
    margin-right: 5px;
    margin-top: 5px;
    width: 25px;
    height: 25px;
    padding: 5px;
    cursor:pointer;
}
/*******************************
	Comments Likes
********************************/

.ossn-comment-menu {
	float: right;
	display: block;
	margin-right: 25px;
	margin-top: -25px;
	margin-bottom: 15px;
}

.comments-item:hover .ossn-comment-menu {
	display: block;
}

.comments-likes {
	min-height: 50px;
	width: 100%;
}

.menu-likes-comments-share {
	padding-left: 16px;
}

.menu-likes-comments-share li {
	display: inline-block;
}

.menu-likes-comments-share li::after {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
}

.menu-likes-comments-share li:last-child:after {
	content: " ";
}

.comments-list {
}

.comments-list .comments-item {
	padding-top: 6px;
}


.ossn-layout-media .ossn-photos-comments .comments-list .comments-item {
	padding-left: 0px;
	padding-right: 0px;
}
	
.comments-list .comments-item:last-child {
	border-bottom: none;
}

.comments-list .comments-item .comment-user-img {
	display: inline-block;
	float: left;
	padding-left: 15px;
	margin-right: 10px;
	border-radius: 3px;
}

.comments-list .comments-item .comment-contents {
    display: inline-block;
    border-radius: 2px;
    line-height: 16px;
	padding-bottom: 4px;
}


.comments-item .col-md-11 {
	padding-left: 0px;
}


.comment-metadata .time-created,
.comment-metadata a {
	float: left;
	display: inline-block;
	margin-top: 15px;
	margin-bottom: 5px;
}

.comment-contents p {
	margin: 0px;
	word-break: break-word;
	text-align: justify;
}

.comment-contents img {
	display: block;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100%;
}

.comment-contents .owner-link {
	font-weight: bold;
	margin-right: 5px;
	font-size: 14px;
}

.comment-contents {
	width: 100%;
}


.comment-box {
	width: 100%;
	border-radius: 2px;
	padding: 5px 30px 5px 5px !important;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
}

[contentEditable=true]:empty:not(:focus)::before {
	content: attr(placeholder);
}

.gbg-comment-header {
	margin-bottom: 10px;
	padding-bottom: 4px;
}

/*********************************
	Like
************************************/

.like-share {
	padding: 2px;
	padding-left: 19px;
	padding-right: 16px;
}

.ossn-like-comment,
.ossn-total-likes {
	margin-left: 0px;
}


/********************************
	Global
***********************************/

.time-created {
	font-size: 14px;
	font-style: italic;
}


/********************************
	Sidebar Nav
*********************************/

.sidebar {
	height: 200px;
	z-index: 99;
	width: 205px;
	position: fixed;
	height: 93%;
	margin-left: -200px;
	overflow-y: scroll;
	overflow-x: hidden;
}

#sidebar-toggle {
	display:none;
	width: 40px;
}

.sidebar-close {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open {
	margin-left: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-no-annimation {
	margin-left: 0px;
}

.sidebar-open-page-container {
	margin-left: 206px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-page-container-no-annimation {
	margin-left: 206px;
}

.sidebar-close-page-container {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-contents {
	padding-bottom: 60px;
}

.newseed-uinfo {
	padding-bottom: 4px;
    padding-top: 2px;
}

.newseed-uinfo img {
	display: inline-block;
	border-radius: 3px;
	height: 35px;
	padding-left: 5px;
	vertical-align: top;
}

.newseed-uinfo .name {
	display: inline-block;
	width: 100px;
	margin-left: 5px;
	margin-top: -2px;
}

.newseed-uinfo .name a {
	font-weight: bold;
	display: block;
	font-size: 13px;
}

.newseed-uinfo .name .edit-profile {
	font-weight: inherit;
}

.sidebar-menu-nav {
	overflow: auto;
	font-weight: 200;
	top: 0px;
	width: 100%;
	height: 100%;
}

.sidebar-menu-nav ul,
.sidebar-menu-nav li {
	list-style: none;
	padding: 0px;
	margin: 0px;
	line-height: 35px;
	cursor: pointer;
}

.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
	font-family: FontAwesome;
	content: "\f078";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
	float: right;
}

.sidebar-menu-nav ul .sub-menu li {
	padding-left: 20px;
}

.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	border: none;
	line-height: 28px;
	border-bottom: 1px solid;
	margin-left: 0px;
}


.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
	font-family: FontAwesome;
	content: "\f105";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}

.sidebar-menu-nav li {
	padding-left: 0px;
	border-bottom: 1px solid;
}

.sidebar-menu-nav li a {
	text-decoration: none;
}

.sidebar-menu-nav li a i {
	padding-left: 10px;
	width: 20px;
	padding-right: 20px;
		text-decoration: none;

}

.sidebar-menu-nav li:hover {
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	-ms-transition: all 1s ease;
	transition: all 1s ease;
}

.sidebar-menu .menu-content li:hover {
	margin-left: 0px;
}


@media (max-width: 767px) {
	.sidebar-menu-nav {
		position: relative;
		width: 100%;
		margin-bottom: 10px;
	}
}


/******************************
	Ossn global css clsses
*******************************/

.right {
	float: right;
}

.left {
	float: left;
}

.text-right {
	text-align: right;
}

.text-left {
	text-align: left;
}

.text-center {
	text-align: center;
}

.margin-top-10 {
	margin-top: 10px;
}

.margin-top-20 {
	margin-top: 20px;
}


/************************
	Dropdown
***************************/

.dropdown-menu {
	border: 1px solid rgba(144, 144, 144, .5);
	border-radius: 3px;
}
.dropdown-submenu {
	position: relative;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 0 6px 6px 6px;
	-moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;
}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	margin-top: 5px;
	margin-right: -10px;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}

.dropmenu-topbar-icons {
	left: inherit;
	right: 0;
}

/******************************************
	Ossn Ads
*******************************************/

.greetings,
.ossn-profile-module-albums a,
.link-preview-item-inner,
.ossn-ad-item {
	border: 0px !important;
}

.greetings,
.alert {
	border-radius: 3px !important;
	margin-left: 1px;
	margin-right: 1px;
}

.ossn-ad-item .ad-image {
	max-width: 100%;
	margin: 0 auto;
	display: block;
}

.ossn-ad-item a {
	text-decoration: none;
	cursor: pointer;
}

.ossn-ad-item .ad-title {
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 5px;
}

.ossn-ad-item .ad-link {
	margin-bottom: 5px;
}

.ossn-ad-item p {
	margin-top: 10px;
	text-align: justify;
}


/*****************************
	Widgets
******************************/

.ossn-widget {
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
}

.ossn-widget .widget-heading {
	padding: 10px;
	font-weight: bold;
	border-radius: 3px;
}

.ossn-widget .widget-contents {
	padding: 10px;
}


/***********************************
	Ossn Notifications
***************************************/

.ossn-notifications-box {
	width: 430px;
}

.ossn-notifications-box .type-name {
	font-weight: bold;
	padding: 1px 10px 5px 10px;
	height: 25px;
	border-bottom: 1px solid rgba(144, 144, 144, 0.75);
}

.ossn-notification-box-loading {
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;
}

.ossn-no-notification {
	text-align: center;
	padding: 10px;
}

.ossn-notifications-box .type-name .title {
	display: inline-block;
}

.ossn-notifications-box .type-name .links {
	display: inline-block;
	float: right;
}

.ossn-notifications-box .type-name .links a {
	display: inline;
	font-weight: normal;
}

.ossn-notifications-box .notification-image,
.ossn-notifications-box .notification-image img {
	width: 50px;
	height: 50px;
	display: inline-block;
	border-radius: 3px;
}

.ossn-notifications-box .notfi-meta {
	width: 330px;
	margin-left: 5px;
	display: inline-block;
	float: right;
}

.ossn-notifications-box .bottom-all a {
	font-weight: bold;
}

.ossn-notifications-box .bottom-all {
	text-align: center;
	padding: 0px;
	display: block;
	border-top: 1px solid rgba(144, 144, 144, 0.25);
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

.ossn-notifications-box .metadata {
	margin-bottom: -5px;
}

.ossn-notifications-box .messages-inner {
	max-height: 400px;
	overflow: hidden;
	overflow-y: scroll;
}

.latest-users img {
	margin-bottom: 5px;
}

.ossn-notification-mark-read {
	float: right;
}

.ossn-notifications-all a {}

.ossn-notifications-all li {
	padding: 10px;
	display: block;
	border-bottom: 1px solid rgba(144,144,144, 0.25);
}

.ossn-notifications-all a:hover {
	cursor: pointer;
}


.ossn-notification-container {
	background-color: #dc0d17;
	background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
	color: #fff;
	min-height: 13px;
	padding: 1px 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .7);
	-webkit-background-clip: padding-box;
	display: inline-block;
	font-size: 11px;
	line-height: normal;
	position: absolute;
	margin-left: -10px;
	z-index: 1;
}

.notification-friends .image {
	width: 50px;
	height: 50px;
	display: inline-table;
	float: left;
	border-radius: 3px;
}

.notification-friends .image img {
	border-radius: 3px;
}

.ossn-notifications-friends-inner {
	padding: 6px;
}

.ossn-notifications-friends-inner form {
	display: inline-table;
}

.ossn-notification-page li img {
	display: none;
}

.notification-friends li {
	margin-bottom: 5px;
	width: 100%;
	border-bottom: 1px solid rgba(144, 144, 144, 0.75);
}

.notification-friends .notfi-meta a {
	font-weight: bold;
	display: inline-block;
	width: 200px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-notifications-friends-inner .controls {
	float: right;
	display: grid;
}

.ossn-notifications-friends-inner .btn {
	padding: 0px 9px;
	border-radius: 1px;
}

.notification-friends {
	max-height: 400px;
}


.ossn-notification-messages .user-item .data .name {
	font-size: unset !important;
}

/*******************************
	Profile
********************************/

.ossn-profile .top-container {
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	padding: 5px;
}

.ossn-profile .top-container .profile-cover {
	height: 200px;
	overflow: hidden;
	position: relative;
}

.ossn-profile .top-container .profile-cover img {
	width: auto;
	display: none;
}

.ossn-profile-row {
	margin-bottom: 20px;
}

.profile-hr-menu ul {
	margin-bottom: 0px;
	padding: 0px;
}

.profile-hr-menu ul li {
	display: inline-block;
}

.profile-hr-menu ul li a {
	display: block;
	padding: 15px;
	margin-right: 5px;
	font-weight: bold;
}

.profile-hr-menu .dropdown-menu {
	margin-left: 0px;
}

.profile-hr-menu .dropdown-menu li {
	display: block;
}

.profile-hr-menu .dropdown a i {
	margin-left: 5px;
}

.profile-hr-menu .dropdown-menu li a {
	border-right: 0px;
	margin-right: 0px;
	padding-top: 10px;
	padding-bottom: 10px;
}

.profile-hr-menu ul li:hover {}

.profile-hr-menu ul li:last-child {
	border-right: none;
}

.ossn-profile .profile-photo {
	position: absolute;
	margin-left: 20px;
	margin-top: -190px;
	border-radius: 2px 2px 2px 2px;
	-webkit-border-radius: 2px 2px 2px 2px;
	-moz-border-radius: 2px 2px 2px 2px;
	padding: 2px;
}

.ossn-profile .profile-photo img {
	border-radius: 2px;
}

.ossn-profile .user-fullname {
	font-weight: bold;
	margin-top: -155px;
	font-size: 35px;
	font-size: 2.3vw;
	margin-left: 211px;
	position: absolute;
	text-shadow: 0 0 3px rgba(144, 144, 144, 0.75);
	max-width: 820px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-profile .user-fullname.user-fullname-without-cover {
	text-shadow: unset;
}

.ossn-profile-role {
	font-size: 25px !important;
	margin-top: -105px !important;
}

.profile-cover-controls {
	position: absolute;
	width: 100%;
	margin-right: -32px;
	margin-top: 150px;
	z-index: 1;
}

.change-cover {
	float: right;
	position: relative;
	margin-right: 50px !important;
}

.reposition-cover {
	float: right;
	position: relative;
	margin-right: 5px !important;
}

.profile-menu {
	float: right;
	position: relative;
	margin-top: -40px;
	margin-right: 20px;
}

#cover-menu {
	display: none;
}

.upload-photo {
	background: #000;
	opacity: 0.5;
	width: 170px;
	padding: 10px;
	position: absolute;
	color: #FFF;
	text-align: center;
	font-size: 15px;
	font-family: sans-serif;
}

.upload-photo span {
	width: 100%;
	padding: 12px;
	text-align: center;
}

.user-cover-uploading {
	opacity: 0.4;
}

.user-photo-uploading {
	height: 100%;
	opacity: 0.8;
	background: #fff;
	width: 100%;
	padding: 7px;
	position: absolute;
	border-radius: 2px;
}

.user-photo-uploading span {
	display: none;
}

.ossn-profile-bottom {
	margin-top: 10px;
}

.ossn-profile-extra-menu {
	display: inline-block;
}

.ossn-profile-edit-layout {
	border-radius: 3px !important;
}

.profile-edit-layout-title {
	border-top-left-radius: 3px !important;
	border-top-right-radius: 3px !important;
	border-color: transparent !important;
}

.profile-edit-layout-right {
	border-left: 1px solid rgba(144, 144, 144, 0.25) !important;
}

.profile-edit-tab-item {
	border-left: 3px solid rgba(144, 144, 144, 0.25) !important;
}

.ossn-profile-module-albums img {
	border: 1px solid rgba(144, 144, 144, 0.25);
}

/*****************************
	Side Menu icons
*******************************/

.menu-section-links i:before {
    font-family: FontAwesome;
    content: "\f0c1";
}

.menu-section-groups i:before {
    font-family: FontAwesome;
    content: "\f228";
}

.menu-section-item-newsfeed:before {
	content: "\f0a1" !important;
}

.menu-section-item-friends:before {
	content: "\f0c0" !important;
}

.menu-section-item-allgroups:before {
	content: "\f228" !important;
}

.menu-section-item-photos:before {
	content: "\f03e" !important;
}

.menu-section-item-messages:before {
	content: "\f0e0" !important;
}

.menu-section-item-invite-friends:before {
	content: "\f234" !important;
}

.menu-section-item-addgroup:before {
	content: "\f067" !important;
}

li[class^="menu-section-item-"] {
	width: 80%;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	padding-right: 10px;
}

/******************************
	Search
******************************/

.ossn-menu-search li {
	display: block;
}

.ossn-menu-search li a {
	display: block;
	width: 100%;
	padding: 5px;
}

.ossn-menu-search li a:hover {
	text-decoration: none;
}

.ossn-menu-search li a .text {
	display: inline-block;
}

.ossn-menu-search-users .text:before {
	font-family: FontAwesome;
	content: "\f007";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}

.ossn-menu-search-groups .text:before {
	font-family: FontAwesome;
	content: "\f228";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}


/******************************
	Token Input
*******************************/

ul.token-input-list {
	overflow: hidden;
	height: auto !important;
	height: 1%;
	width: 100%;
	cursor: text;
	font-size: 12px;
	font-family: Verdana;
	min-height: 1px;
	z-index: 999;
	padding: 0;
	margin: 0;
	margin-top: -5px;
	list-style-type: none;
	clear: left;
}

li.token-input-token {
	overflow: hidden;
	height: auto !important;
	height: 15px;
	margin: 3px;
	padding: 1px 3px;
	cursor: default;
	font-weight: bold;
	border: 1px solid rgba(144, 144, 144, 0.75);
	font-size: 11px;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	float: left;
	white-space: nowrap;
}

li.token-input-token p {
	display: inline;
	padding: 0;
	margin: 0;
	font-size: 12px;
}

li.token-input-token span {
	margin-left: 5px;
	font-weight: bold;
	cursor: pointer;
}

li.token-input-selected-token {
	border: 1px solid rgba(144, 144, 144, 0.75);
	font-weight: bold;
}

li.token-input-input-token {
	float: left;
	margin: 0;
	padding: 0;
	list-style-type: none;
}

div.token-input-dropdown {
	position: absolute;
	width: 400px;
	overflow: hidden;
	cursor: default;
	font-size: 11px;
	font-family: Verdana;
	z-index: 1;
}

div.token-input-dropdown p {
	margin: 0;
	padding: 5px;
}

div.token-input-dropdown ul {
	margin: 0;
	padding: 0;
}

div.token-input-dropdown ul li {
	padding: 3px;
	margin: 0;
	list-style-type: none;
}

div.token-input-dropdown ul li.token-input-dropdown-item {
}


div.token-input-dropdown ul li em {
	font-weight: bold;
	font-style: normal;
}

div.token-input-dropdown ul li.token-input-selected-dropdown-item {
	font-weight: bold;
}


/******************************************
		System Messages
*******************************************/

.ossn-system-messages .ossn-system-messages-inner {
	position: fixed;
	top: -50px;
	left: 0px;
	text-align: center;
	width: 100%;
	z-index: 10000;
	opacity: 1.0 !important; 
	display: block !important;
}

.ossn-system-messages .ossn-system-messages-inner .alert {
	margin-bottom: 0px;
	padding: 4px;
}


/** v1-v3 compitible **/

.ossn-message-done {
	border: 1px solid #1EB0DF;
	border-width: 1px;
	background-color: #DAF6FF;
	padding: 13px;
	text-align: left;
}


/*************************************
	0ssn modal box
***************************************/

.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #5a6d61;
	opacity: 0.9;
	cursor: auto;
	height: 100%;
	display: none;
}

.ossn-light {
	opacity: 0.9;
}

.ossn-viewer {
	width: 940px;
	margin: 0 auto;
	position: relative;
}

.ossn-viewer .ossn-container {
	height: 200px;
	position: fixed;
	width: 900px;
	z-index: 10000;
	margin-top: 70px;
	min-height: 515px;
}

.ossn-viewer-loding {
	font-size: 15px;
}

.ossn-viewer .ossn-container .close-viewer {
	float: right;
	cursor: pointer;
	margin-right: 5px;
	font-weight: bold;
	font-size: 13px;
	color: #ccc;
}

.ossn-viewer .info-block {
	background: #fff;
	height: 100%;
	width: 325px;
	float: right;
	margin-left: -3px;
}

.image-block img {
	max-width: 700px;
}

.ossn-message-box {
	width: 470px;
	min-width: 470px;
	min-height: 96px;
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	z-index: 60000;
	margin-top: 100px;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	display: none;
}

.ossn-message-box .close-box {
	float: right;
	cursor: pointer;
}

.ossn-message-box .title {
	padding: 11px;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	margin-bottom: -3px;
	font-size: 14px;
	font-weight: bold;
}

.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
}

.ossn-message-box .control {
	height: 45px;
	padding: 10px;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	margin-top: -3px;
}

.ossn-message-box .control .controls {
	float: right;
}

.ossn-message-box .control .controls .btn {
	padding: 2px 13px;
	border-radius: 2px;
}

.ossn-message-box .contents input[type='text'] {
	padding: 5px;
}

.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
	display: inline-table;
}


/*******************************
	Ossn Blocked
*********************************/

.ossn-blocked i {
	font-size: 100px;
}

.ossn-blocked {
	text-align: center;
	padding: 100px;
}

.ossn-blocked div {
	font-size: 50px;
	font-weight: bold;
}

.ossn-blocked p {
	font-size: 16px;
}


/********************************
	Loading Icon
*********************************/

.ossn-box-loading {
	margin-left: 216px;
	margin-top: 37px;
}

.ossn-loading:not(:required) {
  width: 40px;
  height: 40px;
}

.ossn-loading:after {
  content: " ";
  display: block;
  width: 35px;
  height: 35px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid;
  animation: ossn-loading 0.9s linear infinite;
}

@keyframes ossn-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


/*******************************
	Buttons
*********************************/

.button-grey,
.btn-action {
	font-weight: bold;
	width: auto;
	margin: 1px;
	font-size: 12px;
	line-height: 16px;
	padding: 5px 6px;
	cursor: pointer;
	outline: none;
	text-align: center;
	white-space: nowrap;
	border: 1px solid;
	border-radius: 3px;
	text-decoration: none;
	border-color: rgba(144, 144, 144, 0.75);
}

.button-grey:hover,
.btn-action:hover {
	text-decoration: none;
}

.button-grey.frontpage {
	font-weight: normal;
	line-height: unset;
	font-size: unset;
	
}

/******************************
	Users List
*******************************/

.ossn-users-list-item {
	border-bottom: 1px solid rgba(144, 144, 144, 0.25);
	margin-right: 0px;
	margin-left: 0px;
}

.ossn-users-list-item .users-list-controls {
	margin-top: 20px;
	margin-bottom: 10px;
}

.ossn-users-list-item .users-list-controls a {
	margin-left: 5px;
}

.ossn-users-list-item .uinfo a {
	font-size: 14px;
	font-weight: bold;
	margin-top: 20px;
	float: left;
	text-overflow: ellipsis;
	width: 300px;
	white-space: nowrap;
	overflow: hidden;
}

.ossn-users-list-item img {
	border-radius: 3px;
	margin-bottom: 3px;
	margin-top: 5px;
	height: 50px;
	width: 50px;
}

.ossn-users-list-item .col-xs-1 {
	padding-left: 0px;
}

/*********************************
	Footer
**********************************/

footer {
	margin-top: 20px;
	padding-top: 5px;
}

footer .col-md-11, footer .col-md-12 {
	border-top: 1px solid rgba(144, 144, 144, 0.75);
}

footer .container {}

footer .ossn-footer-menu {
	padding-bottom: 10px;
}

footer .ossn-footer-menu a {
	font-size: 13px;
}

footer .ossn-footer-menu a::after {
	content: "|";
	margin-left: 10px;
	margin-right: 10px;
}

footer .ossn-footer-menu a:nth-last-child(2)::after,
footer .ossn-footer-menu a:last-child::after {
	content: "";
}

.menu-footer-powered {
	float: right;
}

.menu-footer-powered:after {
	display: none;
}


/****************************
	Home
****************************/

.home-right-contents-invisible {
	display: none
}

.green-home-left-contents {
	margin-top: 3%;
	margin-bottom: 20px;
}

.green-home-left-contents .logo {
	text-align: center;
}

.green-home-left-contents .description {
	font-size: 17px;
	font-weight: bold;
	margin-top: 20px;
	text-align: center;
}

.green-home-left-contents .buttons {
	text-align: center;
	margin-top: 10px;
}

#ossn-home-signup p {
	margin-top: 10px;
}


/**************************
	System
***************************/

.ossn-list-users {
	height: 60px;
	border-bottom: 1px solid rgba(144, 144, 144, 0.25);
	display: block;
	margin-left: 5px;
	margin-bottom: 10px;
}

.ossn-list-users img,
.ossn-list-users .uinfo {
	display: inline-block;
}

.ossn-list-users .uinfo .userlink {
	font-size: 14px;
	font-weight: bold;
	float: right;
	margin-left: 12px;
	text-overflow: ellipsis;
	width: 370px;
	white-space: nowrap;
	overflow: hidden;
}

.ossn-list-users .friendlink {
	float: right;
	margin-top: 10px;
	margin-right: 9px;
	text-overflow: ellipsis;
	width: 280px;
	white-space: nowrap;
	overflow: hidden;
}

.sidebar-menu-nav .sidebar-menu .menu-content {
	display: block;
}

.ossn-box-inner {
	width: 446px;
}


/**************************
	Similies
**************************/

.ossn-smiley-item {
	display: inline-block !important;
	margin-left: 2px;
	margin-right: 2px;
	width: initial !important;
	margin-bottom: 0px !important;
	margin-top: 0px !important;
	border: 0px !important;
}


/**************************
	Embed
 **************************/

.ossn_embed_video {
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 0px;
}


/**************************
	Photos
***************************/

.ossn-photo-view {
	margin-bottom: 0px !important;
}
.ossn-photo-viewer .image-block img,
.ossn-photo-viewer {
	max-width: 100% !important;
}


/*************************
	Groups
*************************/

#group-header-menu li:first-child {
	border-left-width: 0px !important;
}
#group-header-menu li {
	border-right-width: 0px !important;
}

#group-header-menu li ul {
	border: 1px solid rgba(144, 144, 144, 0.25) !important;
}

.ossn-group-cover-header {
	height: unset !important;
}

.ossn-group-cover img {
	width:auto;
	display: none;
}

.ossn-group-profile .profile-header  {
	border-radius: 3px;
	border: 1px solid rgba(144, 144, 144, 0.25) !important;
	padding: 3px;
	max-height: unset !important;
}
	
.ossn-group-profile .profile-header .group-name {
	font-weight: bold !important;
	padding: 0px !important;
	font-size: 35px !important;
	position: absolute;
	top: 135px;
	left: 20px;
	text-shadow: 0 0 3px rgba(144, 144, 144, 0.75);
	/** overlapping issue with longer names on profile page #630 **/
	max-width: 820px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-group-profile .profile-header .group-name.group-name-without-cover {
	text-shadow: unset;
}

.ossn-group-profile .profile-header .header-bottom {
	border-bottom: 1px solid rgba(144, 144, 144, 0.25) !important;
}
	
#group-header-menu li li {
	width: unset !important;
}

#green-group-header-menu {
    border: 0px;
    padding: 0px;
    font-size: 14px;
    font-weight: bold;
    width: auto;
}
#green-group-header-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
#green-group-header-menu li {
    float: left;
    padding: 0px;
}
#green-group-header-menu li a {
    display: block;
    line-height: 44px;
    margin: 0px;
    padding: 0px 20px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}
#green-group-header-menu > ul > li > a {
    font-weight: bold;
    height: 44px;
}

#green-group-header-menu li > a:hover,
#green-group-header-menu ul li:hover > a {
    text-decoration: none;
}
#green-group-header-menu li ul {
    height: auto;
    padding: 0px;
    margin: 0px;
    position: absolute;
    width: 120px;
    border-left: 1px solid rgba(144, 144, 144, 0.25);
    border-bottom: 1px solid rgba(144, 144, 144, 0.25);
    border-right: 1px solid rgba(144, 144, 144, 0.25);
}
#green-group-header-menu li:hover ul {
    display: block;
}
#green-group-header-menu li li {
    display: block;
    float: none;
    margin: 0px;
    padding: 0px;
}
#green-group-header-menu li:hover li a {
    background: none;
}
#green-group-header-menu li ul a {
    display: block;
    height: 35px;
    font-size: 12px;
    font-style: normal;
    margin: 0px;
    padding: 0px 10px 0px 15px;
    text-align: left;
}
#green-group-header-menu li ul a:hover,
#green-group-header-menu li ul li:hover > a {
    border: 0px;
    text-decoration: none;
}
#green-group-header-menu p {
    clear: left;
}

.green-login {
	float: none;
	margin: 0 auto;
	margin-top: 20px;
}

.green-login-extended-views {
	margin-bottom: 5px;
}

.green-login input.form-control {
	height: 25px !important;
}

.green-create-account .widget-contents {
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

.green-create-account .widget-heading {
	margin-bottom: -2px;
}

.green-profile-extra-menu {
	min-width: 10px;
	margin-left: -124px;
	margin-top: 8px;
}

.ossn-messages .message-with .user-icon {
	border-radius: 3px !important;
}

.ossn-messages .messages-recent .messages-from .user-item .image {
	border-radius: 3px !important;
}

.friend-tab-item .data .message-reciever .user-icon img {
	border-radius: 3px !important;
}
	
.ossn-messages .message-inner .row {
	margin-right: -10px;
}

.message-form-form {
	border-top: 1px solid rgba(144, 144, 144, 0.75) !important;
}

/***********
 Chat
 **********/

.ossn-chat-windows-long {
}

@media only screen and (min-width: 1360px)
.ossn-chat-windows-long .friends-list-item .ossn-chat-icon-online:before {
	margin-top: 0px !important;
	margin-right: 0px !important;
}

.friends-list-item .ossn-chat-icon-online {
	border-radius: 3px !important;
}

.tooltip.fade.left.in {
	opacity: 1.0 !important;
	left: -100px !important;
	right: 80px !important;
}
	
.tooltip.left {
	min-width: 100px;
}

.tooltip.left > .tooltip-arrow {
	top: 50% !important;
}

.ossn-photos {
	padding: 10px;
}

.ossn-photos li {
	border: 1px solid rgba(144, 144, 144, 0.75) !important;
}

.ossn-photos h2 {
	margin-top: 0px;
	margin-bottom: 0px;
	text-transform: none !important;
}

.ossn-form-group-half {
    display: inline-block;
    width: calc(50% - 2px);
    float: none;
    box-sizing: border-box;
}

.img-thumbnail {
	border-radius: 0px;
	border-color: rgba(144, 144, 144, .25);
}

/**************************
	Mobile Layout Settings
***************************/

@media (max-width: 480px) {

	#sidebar-toggle {
		display:block;
	}
	.newsfeed-middle-top {
		display: block;
	}

	.topbar-menu-right li a,
	.topbar-menu-left li a {
		padding-left: 5px;
		padding-right: 5px;
	}

	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		display: inline-block;
		float: left;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	/************************
    	Wall
     ************************/
	.ossn-wall-item-type {
		font-size: 11px;
	}
	.ossn-wall-item .meta .user {
		max-width: 250px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.ossn-list-users .uinfo .userlink {
		text-overflow: ellipsis;
		width: 195px;
		white-space: nowrap;
		overflow: hidden;
	}
	.ossn-list-users a.right.btn.btn-primary {
		display: none;
	}
	.ossn-list-users a.right.btn.btn-danger {
		display: none;
	}
	.ossn-message-box .contents {
		overflow-x: auto;
		overflow: overlay;
	}
	/***************************
    	Topbar notification box
   *****************************/
	.ossn-notifications-box {
		width: 300px;
	}
	.ossn-notifications-box .notfi-meta {
		width: 230px;
	}
	.notification-friends .notfi-meta a {
		width: 100px;
	}
	.ossn-notifications-box .notfi-meta,
	.ossn-notification-messages .user-item .data {
		width: 206px !important;
	}
	.ossn-notification-messages .user-item .data .name {
		width: 110px !important;
	}
	.ossn-notification-messages .reply-text-from {
		width: 200px !important;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	/******************************
    	Profile
    ********************************/
	.ossn-profile .profile-photo img {
		width: 75px;
		height: 75px;
		border-width: 1px solid rgba(144, 144, 144, 0.25);
	}
	.ossn-profile .user-fullname {
		font-size: 16px;
		margin-left: 100px;
		margin-top: -90px;
		margin-right: 20px;
		white-space: pre-wrap;
	}
	.ossn-profile .top-container .profile-cover {
		height: 100px;
	}
	.ossn-profile .profile-photo {
		margin-top: -90px;
		margin-left: 10px;
	}
	.profile-menu {
		float: right;
		margin-right: 10px;
	}
	.ossn-group-cover-button,
	.profile-cover-controls {
		display: none !important;
		// margin-top: 70px;
	}
	.upload-photo {
		width: 100px;
	}
	.profile-hr-menu ul li {
		margin-right: 0px;
	}
	.profile-hr-menu ul li a {
		margin-right: 0px;
		padding: 10px;
	}
	.profile-hr-menu .dropdown-menu li a {
		border-bottom: 1px solid rgba(144, 144, 144, 0.75);
	}
	.ossn-profile-role {
		display: none;
	}
	/*****************************
     	System
     *****************************/
	 
	.ossn-wall-item .post-contents img,
	.comment-contents img {
		max-width: 100%;
	}

	.ossn-users-list-item .users-list-controls {
		margin-top: 10px;
	}
	.ossn-users-list-item .uinfo a {
		margin-top: 10px;
		width: 90px;
	}
	.ossn-users-list-item img {
		height: 40px;
		width: 40px;
	}
	.ossn-system-messages {
		padding-left: 15px;
		padding-right: 15px;
	}
	.ossn-widget .widget-contents {
		padding: 5px;
	}
	.ossn-message-box {
		min-width: 300px;
		width: 300px;
	}
	.ossn-box-loading {
		margin-left: 150px;
		margin-top: 37px;
	}
	.ossn-message-box .contents input[type="text"] {
		width: 195px;
	}
	.ossn-box-inner {
		width: 280px;
	}
	footer .ossn-footer-menu a:nth-last-child(2)::after {
		content: "|";
	}
	/**********************
    	Groups
    ************************/
	.ossn-group-cover {
		height: 100px !important;
	}
	.ossn-group-cover-header,
	.ossn-group-profile .profile-header {
		height: auto !important;
	}
	.ossn-group-profile .profile-header {
		max-height: inherit !important;
	}
	.ossn-group-profile .profile-header .group-name {
		float: none !important;
	}
	#green-group-header-menu .dropdown-menu li a {
		border-bottom: 1px solid rgba(144, 144, 144, 0.75);
	}
	#green-group-header-menu li a {
		text-align: left !important;
	}

	.ossn-group-profile .profile-header .group-name {
		font-size: 20px !important;
		position: absolute;
		top: 67px;
		left: 20px;
		text-shadow: 0 0 3px #000;
		max-width: 820px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	.sidebar-open {
		width: 100% !important;
	}
	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}
	.sidebar-hide-contents-xs {
	}
	#add-cover-group {
		display: none;
	}
	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}
	.ossn-messages .message-with .user-icon,
	.ossn-messages .messages-recent .messages-from .user-item .image {
		display: none;
	}
	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}
	.ossn-layout-module .controls {
		margin-top: 10px;
		float: none;
		display: grid;
	}

	/*************************
     	Home Page
     **************************/
	.logo img {
		width: 260px;
	}
	.green-home-left-contents .description {
		font-size: 16px;
	}
	.green-home-left-contents {
		margin-bottom: 20px;
	}
	/*****************************
    	Wall Menu
    ******************************/
	.dropdown-menu {
		margin-left: -110px;
	}
	
	.green-profile-extra-menu {
		min-width: 10px;
		margin-left: -50px;
		margin-top: 8px;
	}

	.menu-footer-powered {
		float: none;
	}
	
	.ossn-photos li {
		width: 100px !important;
		height: 100px !important;
		min-height: 100px !important;
	}
	.ossn-photos .pthumb {
		height: 100px!important;
	}
	
	.page-sidebar {
		margin-top: 9px;
	}
	
	
	.ossn-wall-container input[type='submit'] {
		margin-top: 7px !important;
		padding-top: 2px;
		padding-bottom: 2px;
		padding-left: 3px;
		padding-right: 3px;
	}	
	
	.ossn-form-group-half {
    display: inline-block;
    width: calc(100% - 2px);
    float: none;
    box-sizing: border-box;
	}

	.btn,
	.button-grey,
	.btn-action, 
	.ossn-photo-menu li a {
		font-size: 13px !important;
		padding-top: 2px;
		padding-bottom: 4px;
		padding-left: 4px;
		padding-right: 4px;
	}
}


/***************************************
	Tablets
****************************************/

@media only screen and (max-width: 992px) {
	#sidebar-toggle {
		display:block;
	}
	.newsfeed-middle-top {
		display: block;
	}

	.dropdown-menu {
		margin-left: -110px;
	}
	.green-profile-extra-menu {
		min-width: 10px;
		margin-left: -124px;
		margin-top: 8px;
	}
	.ossn-profile .user-fullname {
		max-width: 500px;
	}
	.profile-hr-menu .dropdown-menu li a {
		border-bottom: 1px solid rgba(144, 144, 144, 0.75);
	}
	#green-group-header-menu .dropdown-menu li a {
		border-bottom: 1px solid rgba(144, 144, 144, 0.75);
	}

	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		display: inline-block;
		float: left;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}
	/*******************
     	Messages
     *******************/
	.ossn-messages .message-with .user-icon,
	.ossn-messages .messages-recent .messages-from .user-item .image {
		display: none;
	}
	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}
	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}
}

@media only screen and (max-width: 1316px) {
	#sidebar-toggle {
		display:block;
	}
	.comments-list .comments-item .col-md-1,
	.comments-list .comments-item .comment-user-img {
		display: inline-block;
		float: left;
	}
	.comments-list .comments-item .col-md-11 {
		width: 100%;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	.group-search-details {
		margin-left: 10px;
	}
	.ossn-profile .user-fullname {
		max-width: 640px;
	}

}

@media only screen and (max-width: 767px) {
	.ossn-profile .user-fullname {
		max-width: 767px;
	}
	.newsfeed-middle-top {
		display: block;
	}
/*
	.btn-responsiv {
		padding:2px 4px;
		font-size:80%;
		line-height: 1;
		border-radius:3px;
	}

	.btn-responsive {
		padding:4px 9px;
		font-size:90%;
		line-height: 1.2;
	}
*/


}


/*****************************************************
		Adding icons for some 3rd party components
******************************************************/

.sidebar-menu-nav ul .sub-menu li:before {
	font-family: FontAwesome;
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}

.menu-section-item-groups:before {
	content: "\f07b" !important
}

.menu-section-item-settings:before {
    content: "\f085" !important;
}

.menu-section-item-mygroups:before {
	content: "\f228" !important
}

.menu-section-item-friendsonline:before {
	content: "\f27a" !important
}

img.ustatus {
	border-radius: 3px !important;
}

.ossn-chat-windows-long .friends-list-item img {
    border-width: 1.9px !important;
}

.comment-metadata .ossn-reaction-list {
    margin-top: 14px;
	margin-right: 10px;
	float: left !important;
}

.ossn-reaction-list li {
	width: 15px !important;
}

.ossn-likes-annotation-total {
	float: left !important;
	margin-left: 15px;
}

.group-search-details {
	padding: 0px !important;
}

.group-search-items img {
	height: 52px;
	width: 50px;
	opacity: .6;
}

.group-search-items .row {
	border: 0px !important;
	border-bottom: 1px solid rgba(144, 144, 144, 0.25) !important;
}

.delete-group {
	margin-top: 5px;
}

.ossn-group-profile .profile-header {
	opacity: 1 !important;
}

/* FIREFOX FIX OF UGLY SELECT BOXES */
@supports (-moz-appearance:none) {

select:not([class*="ui-datepicker-"]) {
  -moz-appearance:none !important;
  background-image: url('data:image/gif;base64,R0lGODlhBgAGAKEDAFVVVX9/f9TU1CgmNyH5BAEKAAMALAAAAAAGAAYAAAIODA4hCDKWxlhNvmCnGwUAOw==') !important;
  background-position: calc(100% - 5px) center !important;
  background-repeat: no-repeat;
  }

}

.green-mygroups-list {
	padding-top: 8px;
	padding-bottom: 8px;
	border-bottom: 1px solid rgba(144, 144, 144, 0.25);
	margin-left: 0px;
	margin-right: 0px;
}

.green-group-link{
	font-weight: bold;
	font-size: 16px;
}

.green-mygroups-list-name {
	padding: 0px;
}

.green-mygroups-list-owner {
	padding: 0px;
	text-align: right;
}

.ossn-comment-attachment {
	margin-left: 47px !important;
}

.ossn-comment-attachment .image-data {
	text-align: unset !important;
	background-color: unset !important;
	border: 0px !important;
}

.ossn-comment-attachment .image-data img {
	max-height: 100px;
	max-width: 100px !important;
	height: unset !important;
}

.user-item-inner .image img {
	border-radius: 3px;
}

.ossn-site-pages {
    margin-left: 0px !important;
    margin-right: 0px !important;
}

.ossn-site-pages-title {
	border: 0px !important;
}

.post-contents + [data-readmore-toggle],
.post-contents[data-readmore] {
	padding-bottom: 10px;
	padding-left: 15px;
}

#ossn-wall-postbg {
	background: unset !important;
	border: 0px !important;
}

.emojii-container {
	border: 1px solid rgba(144, 144, 144, 0.75) !important;
	border-radius: 3px;
}
.pagination>li>a,
.pagination>li>span {
	color: unset;
	background-color: unset;
	border-color: rgba(144, 144, 144, 0.75);
}
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
	border-color: rgba(144, 144, 144, 0.75);
}
.pagination>li>a:focus,
.pagination>li>a:hover,
.pagination>li>span:focus,
.pagination>li>span:hover {
	color: unset;
	border-color: rgba(144, 144, 144, 0.75);
}

.container-group-show .col-md-11 {
	padding-left: 2px;
    padding-right: 2px;
}

.gbg-screenshot iframe {
  width: 1440px;
  height: 900px;
}
.gbg-screenshot {
  position: relative;
  -ms-zoom: 0.20;
  -moz-transform: scale(0.20);
  -moz-transform-origin: 0 0;
  -o-transform: scale(0.20);
  -o-transform-origin: 0 0;
  -webkit-transform: scale(0.20);
  -webkit-transform-origin: 0 0;
}
.gbg-screenshot-container:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.gbg-screenshot-container {
	margin-left: 10px;
	padding-top: 20px;
	width: calc(1440px * 0.20);
	height: calc(900px * 0.20);
	display: inline-block;
	overflow: hidden;
	position: relative;
}
	