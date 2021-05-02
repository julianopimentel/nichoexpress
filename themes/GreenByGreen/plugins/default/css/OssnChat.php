.ossn-chat-base {
    border-bottom: 0;
    bottom: 0px;
    display: block;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    font-size: 11px;
    height: 33px;
    position: fixed;
    text-align: left;
    z-index: 3;
    margin-top: 8px;
    width: 100%;
}

.ossn-chat-base .ossn-chat-bar {
    display: block;
    bottom: 0px;
    cursor: pointer;
    width: 200px;
    float: right;
}

.ossn-chat-base .ossn-chat-bar .inner {
    padding: 10px;
    margin-left: 5px;
    border: 1px solid rgba(144, 144, 144, 0.75);
    height: 35px;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}

.ossn-chat-base .ossn-chat-bar .friends-list {
    width: 195px;
	min-height: 271px;
    margin-top: -271px;
    margin-left: 5px;
    position: fixed;
    height: 268px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    display: none;
}
img.ustatus {
	border-radius: 32px;
}
.ossn-chat-inner-text {
    width: 145px;
    margin-left: 20px;
    font-weight: bold;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.ossn-chat-tab-titles {
    padding: 3px;
    border: 1px solid rgba(144, 144, 144, 0.75);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.ossn-chat-inline-table {
    display: inline-table;
}

.ossn-chat-tab-titles .options {
    float: right;
    margin-right: 10px;
    margin-top: 2px;
    font-size: 12px;
    cursor: pointer;
}

.ossn-chat-tab-titles .options .item:hover {
    width: 17px;
    margin-right: -4px;
    text-align: center;
}

.ossn-chat-tab-titles .text {
    font-weight: bold;
    margin-left: 9px;
    padding: 2px;
    max-width: 190px;
    white-space: nowrap;
    display: inline-block;
    overflow: hidden;
    text-overflow: ellipsis;
}

.ossn-chat-bar .friends-list .data {
    width: 195px;
    overflow: hidden;
    overflow-y: scroll;
    height: 236px;
    
    border-left: 1px solid rgba(144, 144, 144, 0.75);
    border-right: 1px solid rgba(144, 144, 144, 0.75);    
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .friends-item-inner {
    margin: 5px 5px 5px 5px;
    height: 36px;
    padding: 2px;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .icon {
    display: inline-table;
    width: 32px;
    height: 32px;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .name {
    margin-top: -28px;
    margin-left: 40px;
    max-width: 110px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .ossn-chat-icon-online {
	border-radius: 32px;
}

.ossn-chat-none {
    padding: 5px;
    margin-top:10px;
}

.friend-tab-item {
    display: block;
    cursor: pointer;
    width: 200px;
    float: right;
}

.friend-tab-item:first-child {
	margin-right: 75px;
}

.friend-tab-item .friend-tab {
    padding: 12px;
    margin-left: 5px;
    border: 1px solid rgba(144, 144, 144, 0.75);
    height: 35px;
    
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}


.friend-tab-item .tab-container {
    margin-top: -268px;
    position: absolute;
    height: 265px;
    width: 251px;
    margin-left: 5px;
    display: none;
}

.friend-tab-item .tab-container .data {
    border-left: 1px solid rgba(144, 144, 144, 0.75);
    border-right: 1px solid rgba(144, 144, 144, 0.75);
    width: 251px;
    height: 238px;
    overflow: hidden;
    overflow-y: scroll;
}

.friend-tab-item .data .message-reciever .text,
.friend-tab-item .data .message-sender .text {
    position: relative;
    margin-top: 5px;
    margin-bottom: 5px;
    max-width: 80%;
    clear: both;
}

.friend-tab-item .data .message-reciever .text {
    margin-right: auto;
    border-radius: 3px;
    border: 1px solid rgba(144, 144, 144, 0.75);
	box-shadow: 0 0 2px;
    display: inline-table;
}

.friend-tab-item .data .message-reciever .text .inner {
    padding: 5px;
    line-height: 15px;
    max-width: 165px;
    word-wrap: break-word;
}

.friend-tab-item .data .message-sender {
    width: 210px;
    float: right;
}

.friend-tab-item .data .message-reciever {
    width: 222px;
    float: left;
}

.friend-tab-item .data .message-reciever .user-icon {
    display: inline-table;
    padding: 3px;
}
.friend-tab-item .data .message-reciever .user-icon img {
	width:32px;
    height:32px;
}

.friend-tab-item .data .message-sender .text {
    margin-left: 35px;
    border-radius: 3px;
    border: 1px solid rgba(144, 144, 144, 0.75);
	box-shadow: 0 0 2px;
    display: inline-table;
}

.friend-tab-item .data .message-sender .text .inner {
    padding: 5px;
    line-height: 15px;
    max-width: 158px;
    word-wrap: break-word;
}

.ossn-chat-triangle {
    border-top: 5px solid rgba(0, 0, 0, 0);
    border-bottom: 5px solid rgba(0, 0, 0, 0);
}

.ossn-chat-triangle-blue {
    border-left: 5px solid #AFD0FE;
    margin-top: 10px;
    float: right;
}

.ossn-chat-triangle-white {
    border-right: 5px solid #B8B8B8;
    margin-top: 10px;
    margin-left: 38px;
    float: left;
}

.ossn-chat-text-data {
    margin-top: -40px;
}

.ossn-chat-text-data-right {
    float: right;
}

.friend-tab-item .friend-tab form {
    display: none;
}

.friend-tab-item .friend-tab input[type='text'] {
    width: 213px;
    height: 31px;
    padding: 4px;
	margin-top: -12px;
	margin-left: -12px;
    position: absolute;
    font-size: 12px;
    border:0px;
    outline:none;
}

.ossn-chat-tab-close {
    width: 17px;
    margin-right: -4px;
	margin-left: 4px;
    text-align: center;
}

.ossn-chat-new-message {
    min-height: 13px;
    padding: 1px 3px;
    font-size: 10px;
    float: left;
    display: none;
	margin-top: -2px;
    position: absolute;     
}

.ossn-chat-icon-smilies {
    width: 235px;
    min-height: 40px;
    padding: 5px;
    position: fixed;
    z-index: 1;
}

.ossn-chat-item-smiles {
    padding: 3px;
}

.ossn-chat-icon-smile-set {
    margin-top: -12px;
    width: 37px;
    padding-top: 9px;
    height: 27px;
    position: absolute;
    margin-left: 200px;
}

.ossn-chat-icon-smilies {
    display: none;
}
/** Icons **/
.ossn-chat-icon {}
.ossn-chat-icon-online:before {
	content: "\f111 ";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    float: left;
}

.ossn-chat-icon-offline:before {
	content: "\f111 ";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    float: left;
}

.ossn-chat-icon-expend:before {
    content: "\f096";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
	float: right;
}

.ossn-chat-icon-shrink-expend-black:before {
    content: "\f068\00a0\00a0\00a0\f096";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
	float: right;
}

.ossn-chat-icon-shrink:before {
    content: "\f068";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
}

.ossn-chat-icon-shrink-black:before {
    content: "\f068";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
	float: right;
}

.ossn-chat-icon-close:before {
    content: "\f00d";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
}


.ossn-chat-icon-expend:hover {
    opacity: 0.9;
}

.ossn-chat-icon-smile:before {
    content: "\f118";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    margin-left: 10px;
}

.ossn-chat-icon {
    width: 16px !important;
    height: 16px !important;
}

.ossn-chat-windows-long {
    display: none;
}

@media only screen
and (min-width : 1360px) {
    .ossn-chat-bar {
        display: none !important;
    }

	.friend-tab-item:first-child {
		margin-right: 275px;
	}

    .ossn-chat-windows-long {
        float: right;
        position: fixed;
        min-height: 500px;
        width: 80px;
        border-left: 1px solid rgba(144, 144, 144, 0.25);
        bottom: 0px;
        right: 0;
        top: 0;
        display: block;
    }

    .ossn-chat-windows-long .inner {
        margin-top: 45px;
        border-top: 2px solid rgba(144, 144, 144, 0.25);
        overflow-x: hidden;
        overflow-y: auto;
    }

    .ossn-chat-windows-long .friends-list-item .friends-item-inner {
    	margin: 5px 5px 5px 5px;
    	height: 55px;
    }

    .ossn-chat-windows-long .friends-list-item {
        padding-left: 2px;
            text-align: center;
    }

    .ossn-chat-windows-long .friends-list-item:hover {
        cursor: pointer;
    }

    .ossn-chat-windows-long .friends-list-item .icon {
        display: inline-block;
        width: 50px;
        height: 50px;
    }
	

    .ossn-chat-windows-long .friends-list-item .name {
        margin-top: -25px;
        margin-left: 40px;
        max-width: 110px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

   .ossn-chat-windows-long .friends-list-item .ossn-chat-icon-online:before {
    	float: right;
		margin-right:4px;
    	margin-top: -17px;
		content: "\f111 ";
    	font-family: FontAwesome;
    	font-style: normal;
    	font-weight: normal;
    	font-size: 12px;
    }
}


/** Document **/
#ossn-chat-sound {
    display: none;
}

.ossn-chat-message-sending {
    position: absolute;
    width: 218px;
    height: 11px;
    margin-top: -9px;
    margin-left: -9px;
    padding: 10px;
    display: none;
}
.friend-tab .ossn-chat-inner-text {
	margin-top: -2px;
}
.ossn-chat-sending-icon {
    background: url("<?php echo ossn_site_url();?>components/OssnChat/images/loading-small.gif") no-repeat;
    width: 16px;
    height: 11px;
}
.ossnchat-scroll-top {
	margin-top:0px !important;
}

/* smartphones and tablets */

@media only screen and (max-width: 768px) {
    .ossn-chat-base {
    	display:block;
		width: 100%;
		left: 0px;
    }
	.friend-tab-item {
		float: none;
		position: fixed;
		bottom: 1px;
		left: 0px;
		
	}
	.ossn-chat-base .ossn-chat-bar {
		float: none;
	}
}

footer { 
	margin-bottom:50px;	
}
@-ms-viewport {
   width: auto;
}
.friend-tab-item .container-table-pagination {
   	visibility:hidden;
}
.friend-tab-item .pagination {
	margin:0;
}
