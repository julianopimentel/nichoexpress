//<script>
$(document).ready(function() {

	if(window.self !== window.top) {
		$("a").click(function(e){
			e.preventDefault();
			var a = $(this).attr('href');
			if(typeof a != 'undefined') {
				var color_mode = getUrlParameter('gbg_mode');
				if(color_mode) {
					a += (a.indexOf('?') == 0 ? '&' : '?');
					var newURL = a+"gbg_mode="+color_mode;
					window.location.href = newURL;
				} else {
					window.location.href = a;
				}
			}
		});

		var getUrlParameter = function getUrlParameter(sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
				}
			}
		};
	}

	$('#ossn-wall-form').on('submit', function(){
		$('.ossn-wall-container textarea').height(40);
	});
	
	$('.ossn-wall-container textarea').keyup(function(e) {
		$(this).height(0);
		$(this).height(this.scrollHeight + parseFloat($(this).css('borderTopWidth')) + parseFloat($(this).css('borderBottomWidth')));
	});

	
	$('[data-toggle="tooltip"]').tooltip({
		placement:'left',										  
	}); 

	$(document).on('click', '#sidebar-toggle', function() {
		var $toggle = $(this).attr('data-toggle');
		if ($toggle == 0) {
			$(this).attr('data-toggle', 1);
			if($(document).innerWidth() >= 1300 && $('.ossn-page-loading-annimation').is(':visible')){
				$('.sidebar').addClass('sidebar-open-no-annimation');
				$('.ossn-page-container').addClass('sidebar-open-page-container-no-annimation');
			} else {
				$('.sidebar').addClass('sidebar-open');
				$('.ossn-page-container').addClass('sidebar-open-page-container');
			}			
			$('.topbar .right-side').addClass('right-side-space');
			$('.topbar .right-side').addClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').addClass('sidebar-hide-contents-xs');
		}
		if ($toggle == 1) {
			$(this).attr('data-toggle', 0);
			
			$('.sidebar').removeClass('sidebar-open');
			$('.sidebar').removeClass('sidebar-open-no-annimation');
			
			$('.ossn-page-container').removeClass('sidebar-open-page-container');
			$('.ossn-page-container').removeClass('sidebar-open-page-container-no-annimation');
			$('.topbar .right-side').removeClass('right-side-space');
			$('.topbar .right-side').removeClass('sidebar-hide-contents-xs');
			$('.ossn-inner-page').removeClass('sidebar-hide-contents-xs');

			$('.topbar .right-side').addClass('right-side-nospace');
			$('.sidebar').addClass('sidebar-close');
			$('.ossn-page-container').addClass('sidebar-close-page-container');

		}
		var document_height = $(document).height();
	});
	var $chatsidebar = $('.ossn-chat-windows-long .inner');
	if($chatsidebar.length){
		$chatsidebar.css('height', $(window).height() - 45);
	}
	$(document).scroll(function() {
		$document_height = $(document).height();						
		
		if($chatsidebar.length){
			if ($(document).scrollTop() >= 50) {
				// $chatsidebar.addClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height());
			} else if ($(document).scrollTop() == 0) {
				// $chatsidebar.removeClass('ossnchat-scroll-top');
				$chatsidebar.css('height', $(window).height() - 45);
			}
		}
	});

	if($(document).innerWidth() >= 1300){
		$('#sidebar-toggle').click();
	}
	
	if ($('.footer-wrapper').length) {
		$('body').addClass('body-background-image');
	}

	// optimize-pre-loader 
	$(".ossn-page-loading-annimation").fadeOut("slow");
	
	// suppress green 'success' sytem messages on front-end
	$('.ossn-system-messages-inner').themeGreenByGreenNodeChanged(function(changes, observer) {
		if (!$('.header').length) {
			if ($('.ossn-system-messages-inner').is(':visible') && $('.alert-danger').length)  {
				$('.ossn-system-messages-inner').css('top', 10);
			}
		}
	})
	if ($('.ossn-system-messages-inner').is(':visible') && $('.alert-danger').length)  {
		$('.ossn-system-messages-inner').css('top', 10);
	}
	
	// prevent deleting posts and comments by mistake
	themeGreenByGreenAddPostAndCommentDeleteDialog();
	
	// other possible delete attempts (on frontend only)
	$('.btn-danger:not(.ossn-make-sure, .ossn-com-delete-button), .btn-warning').click(function(e){
		var substrings = ['/administrator/'];
		if (!substrings.some(substrings=>window.location.pathname.includes(substrings))) {
			e.preventDefault();
			var del = confirm(Ossn.Print('ossn:exception:make:sure'));
			if(del == true){
				if(typeof $(this).attr('href') == 'undefined') {
					$(this).closest('.ossn-form').submit();
				} else {
					var actionurl = $(this).attr('href');
					window.location = actionurl;
				}
			}
		}
	});

	$('.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img, .image-block img').off('click').on('click', function(e){
		e.preventDefault();
		$(this).attr('data-fancybox', '');
		$(this).attr('data-src', $(this)[0].src);
	});
	if (typeof fancybox != "undefined") {
		$('.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img').fancybox({selector: '.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img'});
	}
	
	$('#gbg-site-search').click(function(e){
		$(this).closest('.ossn-form').submit();
	});	
	
}); // end of $(document).ready

function themeGreenByGreenAddPostAndCommentDeleteDialog() {
	$('.ossn-wall-post-delete, .ossn-delete-comment').off('click').on('click', function(e){
		e.preventDefault();
		var del = confirm(Ossn.Print('ossn:exception:make:sure'));
		if(del == true){
			var removeHook = false;
			if(Ossn.hooks['ajax:post'] && Ossn.hooks['ajax:post']['request:settings']) {
				for (i = 0; i <= Ossn.hooks['ajax:post']['request:settings'].length; i++){
					if(Ossn.isset(Ossn.hooks['ajax:post']['request:settings'][i])){
						if(Ossn.isset(Ossn.hooks['ajax:post']['request:settings'][i].hook)){
							if(Ossn.hooks['ajax:post']['request:settings'][i].hook == themeGreenByGreenConfirmDialog){
								removeHook = true;
								break;
							}
						}
					}
				}
			}
			if(removeHook) {
				Ossn.unset_hook('ajax:post', 'request:settings', themeGreenByGreenConfirmDialog);
			}
		} else {
			var addHook = true;
			if(Ossn.hooks['ajax:post'] && Ossn.hooks['ajax:post']['request:settings']) {
				for (i = 0; i <= Ossn.hooks['ajax:post']['request:settings'].length; i++){
					if(Ossn.isset(Ossn.hooks['ajax:post']['request:settings'][i])){
						if(Ossn.isset(Ossn.hooks['ajax:post']['request:settings'][i].hook)){
							if(Ossn.hooks['ajax:post']['request:settings'][i].hook == themeGreenByGreenConfirmDialog){
								addHook = false;
								break;
							}
						}
					}
				}
			}
			if(addHook) {
				Ossn.add_hook('ajax:post', 'request:settings', themeGreenByGreenConfirmDialog);
			}
		}
	});
}

function themeGreenByGreenConfirmDialog(hook, type, ret, params) {
	substrings = ['/action/wall/post/delete', '/action/delete/comment'];
	if (ret && substrings.some(substrings=>ret['url'].includes(substrings))) {
		return false;
	}
}

(function($) {
  $.fn.themeGreenByGreenNodeChanged = function(cb, e) {
    e = e || { subtree:true, childList:true, characterData:true };
    $(this).each(function() {
      function callback(changes) { cb.call(node, changes, this); }
      var node = this;
      (new MutationObserver(callback)).observe(node, e);
    });
  };
})(jQuery);


$(window).on('load resize', function (e) {	
		// profile and group cover handling
		if (document.querySelector("#draggable")) {
			const desktop_cover_width  = 1040;
			const desktop_cover_height = 200;
			var current_cover_height  = $('.ossn-group-cover').height() + $('.profile-cover').height();
			var real_image_width  = document.querySelector("#draggable").naturalWidth;
			var real_image_height = document.querySelector("#draggable").naturalHeight;
			// 1. how many mobile heights would we need to hold the image?
			var mobile_height_factor = real_image_height / current_cover_height;
			// 2. how many pixels wide would be the scaled mobile image in comparison to fix desktop_cover_width?
			var mobile_pixel_width = desktop_cover_width / mobile_height_factor;
			// 3. how often would these pixels fit into the current coverwidth?
			var current_cover_width = $('.ossn-group-cover').width() + $('.profile-cover').width();
			var mobile_width_factor = current_cover_width / mobile_pixel_width;
			// 4. how many pixels do we get with the mobile cover height of 100?
			var mobile_pixel_height = mobile_width_factor * current_cover_height;
			// setting the new height already here allows us to retrieve the new scaled image width calculated by the browser
			$('#draggable').css('height', mobile_pixel_height);
			mobile_pixel_width = parseInt($('#draggable').css('width'));
			
			// 5. calculate the height-scaling factor for dragging - get maximum possible scroll top position
			var desktop_scroll_top_max = real_image_height - desktop_cover_height;
			var mobile_scroll_top_max  = mobile_pixel_height - current_cover_height;
			var height_scaling_factor  = desktop_scroll_top_max / mobile_scroll_top_max;
			// 6. calculate the width-scaling factor for dragging - get maximum possible scroll left position
			var desktop_scroll_left_max = real_image_width - desktop_cover_width;
			var mobile_scroll_left_max  = mobile_pixel_width - current_cover_width;
			var width_scaling_factor  = desktop_scroll_left_max / mobile_scroll_left_max;
			// 7. retrieve the saved dragging positions and scale accordingly
			var cover_top    = parseInt($('#draggable').data('top'));
			var cover_left   = parseInt($('#draggable').data('left'));
			var mobile_pixel_top  = cover_top / height_scaling_factor;
			var mobile_pixel_left = cover_left / width_scaling_factor;
			$('#draggable').css('top', mobile_pixel_top);
			$('#draggable').css('left', mobile_pixel_left);
			$('#draggable').fadeIn();

			var wtext = Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) ;
			$('#mobygreen-cover-width').text(wtext);
		}

		if(e.type == 'resize' && $(document).innerWidth() >= 1300 && !$('.sidebar-open').length){
			$('#sidebar-toggle').click();
		}
		
});

$(document).ready(function() {
		if($(document).innerWidth() <= 480){
			$('.profile-cover.cover-owner').tooltip({title: Ossn.Print('theme:greenbygreen:cover:tooltip'), placement: 'auto'});
			$('.ossn-group-cover.cover-owner').tooltip({title: Ossn.Print('theme:greenbygreen:cover:tooltip'), placement: 'auto'});
		}

		$('#reposition-group-cover').click(function() {
			var real_image_height   = document.querySelector("#draggable").naturalHeight;
			var current_cover_width = $('.ossn-group-cover').width();
			var saved_cover_top     = parseInt($('#draggable').data('top'));
			var saved_cover_left    = parseInt($('#draggable').data('left'));
			var wtext = "<div class='col-md-11'  id='mobygreen-cover-width'>" + Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) + "</div>";
			$('.ossn-group-top-row').after(wtext);
			$('#draggable').css('height', real_image_height);
			$('#draggable').css('top', saved_cover_top);
			$('#draggable').css('left', saved_cover_left);
		});
		
		$('.group-c-position').click(function() {
			$('#mobygreen-cover-width').remove();
		});

		
		$('#reposition-profile-cover').click(function() {
			var real_image_height   = document.querySelector("#draggable").naturalHeight;
			var saved_cover_top     = parseInt($('#draggable').data('top'));
			var saved_cover_left    = parseInt($('#draggable').data('left'));
			var current_cover_width = $('.profile-cover').width();
			var wtext = "<div id='mobygreen-cover-width'>" + Ossn.Print('theme:greenbygreen:dragging:instruction', [current_cover_width]) + "</div>";
			$('.ossn-profile-bottom').before(wtext);
			$('#draggable').css('height', real_image_height);
			$('#draggable').css('top', saved_cover_top);
			$('#draggable').css('left', saved_cover_left);
		});

		$('#cover-menu').find('.btn-action').click(function() {
			$('#mobygreen-cover-width').remove();
		});

});

$(document).ajaxComplete(function(event, xhr, settings) {
		var $url = window.location.href;
		$pagehandler = $url.replace(Ossn.site_url, '') + '/';
		if($pagehandler.includes('home/') || $pagehandler.includes('u/') || $pagehandler.includes('group/') || $pagehandler.includes('view/')){
			$(".ossn-comment-attachment:visible").each(function(){
				$(this).css('display', 'inline-block');
			});
		}

		themeGreenByGreenAddPostAndCommentDeleteDialog();
		
		$('.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img').off('click').on('click', function(e){
			e.preventDefault();
			$(this).attr('data-fancybox', '');
			$(this).attr('data-src', $(this)[0].src);
		});
		if (typeof fancybox != "undefined") {
			$('.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img').fancybox({selector: '.ossn-wall-item .post-contents img, .ossn-wall-item .comment-contents img'});
		}
		
});


<?php 
if(com_is_active('OssnChat') && com_is_active('OssnMessages')) {
?>
// Chatbar toogle 
$(document).ready(function() {

	var on_icon  = '&nbsp;<i class="fa fa-eye"></i>';
	var off_icon = '&nbsp;<i class="fa fa-eye-slash"></i>';
	if (getChatBarCookie('ossn_chat_bar') != 'off') {
		$('.ossn-chat-bar').show();
		$('.menu-topbar-dropdown-togglechatbar').find('span').html(on_icon);
	} else {
		$('.ossn-chat-bar').hide();
		$('.menu-topbar-dropdown-togglechatbar').find('span').html(off_icon);
	}
	$('.menu-topbar-dropdown-togglechatbar').click(function() {
		if (getChatBarCookie('ossn_chat_bar') != 'off') {
			$('.ossn-chat-bar').hide();
			$('.menu-topbar-dropdown-togglechatbar').find('span').html(off_icon);
			setChatBarCookie('ossn_chat_bar', 'off', 30);
		} else {
			$('.ossn-chat-bar').show();
			$('.menu-topbar-dropdown-togglechatbar').find('span').html(on_icon);
			setChatBarCookie('ossn_chat_bar', 'on', 30);
		}
	});

});

function setChatBarCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
} 

function getChatBarCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

<?php
}
?>

$(document).ready(function() {
	if($('.ossn-chat-windows-long').length && $('.ossn-chat-windows-long').css('display') !== 'none') { 
		$('#gbg-newsfeed-column').addClass('col-md-7').removeClass('col-md-8');
		$('#gbg-contents-column').addClass('col-md-11').removeClass('col-md-12');
		$('#gbg-media-column').addClass('col-md-7').removeClass('col-md-8');
		$('#gbg-search-column').addClass('col-md-6').removeClass('col-md-7');
		$('#gbg-footer-column').addClass('col-md-11').removeClass('col-md-12');
	} else {
		$('#gbg-newsfeed-column').addClass('col-md-8').removeClass('col-md-7');
		$('#gbg-contents-column').addClass('col-md-12').removeClass('col-md-11');
		$('#gbg-media-column').addClass('col-md-8').removeClass('col-md-7');
		$('#gbg-search-column').addClass('col-md-7').removeClass('col-md-6');
		$('#gbg-footer-column').addClass('col-md-12').removeClass('col-md-11');
	}
});	
$( window ).resize(function() {
	if($('.ossn-chat-windows-long').length && $('.ossn-chat-windows-long').css('display') !== 'none') {
		$('#gbg-newsfeed-column').addClass('col-md-7').removeClass('col-md-8');
		$('#gbg-contents-column').addClass('col-md-11').removeClass('col-md-12');
		$('#gbg-media-column').addClass('col-md-7').removeClass('col-md-8');
		$('#gbg-search-column').addClass('col-md-6').removeClass('col-md-7');
		$('#gbg-footer-column').addClass('col-md-11').removeClass('col-md-12');
	} else {
		$('#gbg-newsfeed-column').addClass('col-md-8').removeClass('col-md-7');
		$('#gbg-contents-column').addClass('col-md-12').removeClass('col-md-11');
		$('#gbg-media-column').addClass('col-md-8').removeClass('col-md-7');
		$('#gbg-search-column').addClass('col-md-7').removeClass('col-md-6');
		$('#gbg-footer-column').addClass('col-md-12').removeClass('col-md-11');
	}
});

themeGreenByGreenSubmitPostComment = function($container){
	$replace_tags = function(input, allowed){
		allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')
		var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
		var commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>|&nbsp;/gi
		return input.replace(commentsAndPhpTags, '').replace(tags, function($0, $1){
			return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
		})
	};
	$text = $('#comment-box-p' + $container).html();
	$text = $replace_tags($text, '<br>').replace(/\<br\\?>/g, "\n");
	$('#comment-container-p' + $container).append("<textarea name='comment' class='hidden'>" + $text + "</textarea>");
	$('#comment-container-p' + $container).submit();
};
themeGreenByGreenPostComment = function($container){
	$('#comment-box-p' + $container).keypress(function(e){
		if(e.which == 13){
			document.execCommand('insertLineBreak');
			e.preventDefault();
		}
	});
	$('#comment-box-p' + $container).on('paste', function(e){
		e.preventDefault();
		var text = (e.originalEvent || e).clipboardData.getData('text/plain') || prompt('Paste something..');
		window.document.execCommand('insertText', false, text);
	});
	Ossn.ajaxRequest({
		url: Ossn.site_url + 'action/post/comment',
		form: '#comment-container-p' + $container,
		beforeSend: function(request){
			$('#comment-box-p' + $container).attr('readonly', 'readonly');
			$('#comment-box-p' + $container).attr('contenteditable', false);
		},
		callback: function(callback){
			if(callback['process'] == 1){
				$('#comment-box-p' + $container).removeAttr('readonly');
				$('#comment-box-p' + $container).val('');
				$('.ossn-comments-list-p' + $container).append(callback['comment']);
				$('#comment-attachment-container-p' + $container).hide();
				$('#ossn-comment-attachment-p' + $container).find('.image-data').html('');
				$('#comment-container-p' + $container).find('input[name="comment-attachment"]').val('');
			}
			if(callback['process'] == 0){
				$('#comment-box-p' + $container).removeAttr('readonly');
				Ossn.MessageBox('syserror/unknown');
			}
			$('#comment-box-p' + $container).attr('contenteditable', true);
			$('#comment-box-p' + $container).html("");
			Ossn.trigger_callback('comment', 'post:callback', {
				guid: $container,
				response: callback,
			});
		}
	});
};

themeGreenByGreenSubmitEntityComment = function($container){
	$replace_tags = function(input, allowed){
		allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')
		var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
		var commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>|&nbsp;/gi
		return input.replace(commentsAndPhpTags, '').replace(tags, function($0, $1){
			return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
		})
	};
	$text = $('#comment-box-e' + $container).html();
	$text = $replace_tags($text, '<br>').replace(/\<br\\?>/g, "\n");
	$('#comment-container-e' + $container).append("<textarea name='comment' class='hidden'>" + $text + "</textarea>");
	$('#comment-container-e' + $container).submit();
};
themeGreenByGreenEntityComment = function($container){
	$('#comment-box-e' + $container).keypress(function(e){
		if(e.which == 13){
			document.execCommand('insertLineBreak');
			e.preventDefault();
		}
	});
	$('#comment-box-e' + $container).on('paste', function(e){

		e.preventDefault();
		var text = (e.originalEvent || e).clipboardData.getData('text/plain') || prompt('Paste something..');
		window.document.execCommand('insertText', false, text);
	});
	Ossn.ajaxRequest({
		url: Ossn.site_url + 'action/post/entity/comment',
		form: '#comment-container-e' + $container,
		beforeSend: function(request){
			$('#comment-box-e' + $container).attr('readonly', 'readonly');
			$('#comment-box-e' + $container).attr('contenteditable', false);

		},
		callback: function(callback){
			if(callback['process'] == 1){
				$('#comment-box-e' + $container).removeAttr('readonly');
				$('#comment-box-e' + $container).val('');
				$('.ossn-comments-list-e' + $container).append(callback['comment']);
				$('#comment-attachment-container-e' + $container).hide();
				$('#ossn-comment-attachment-e' + $container).find('.image-data').html('');
				$('#comment-container-e' + $container).find('input[name="comment-attachment"]').val('');
			}
			if(callback['process'] == 0){
				$('#comment-box-e' + $container).removeAttr('readonly');
				Ossn.MessageBox('syserror/unknown');
			}
			$('#comment-box-e' + $container).attr('contenteditable', true);
			$('#comment-box-e' + $container).html("");
			Ossn.trigger_callback('comment', 'entity:callback', {
				guid: $container,
				response: callback,
			});
		}
	});
};
