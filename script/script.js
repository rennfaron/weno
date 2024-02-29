// (simple) preload images:
function preload(images){
    $(images).each(function(){
        $('<img />').attr('src',this).appendTo('body').css('display','none');
    });
}
preload([
    'img/btn-compose-m-on.png',
    'img/btn-compose-m-on@2x.png',
		'img/btn-compose-t-on.png',
    'img/btn-compose-t-on@2x.png',
		'img/btn-compose-d-on.png',
    'img/btn-address-book-m-on.png',
    'img/btn-address-book-m-on@2x.png',
		'img/btn-address-book-t-on.png',
    'img/btn-address-book-t-on@2x.png',
		'img/btn-address-book-d-on.png',
		'img/btn-search-m-on.png',
    'img/btn-search-m-on@2x.png',
		'img/btn-search-t-on.png',
    'img/btn-search-t-on@2x.png',
		'img/btn-search-d-on.png',
		'img/btn-refresh-t-on.png',
    'img/btn-refresh-t-on@2x.png',
		'img/btn-refresh-d-on.png',
		'img/btn-delete-m-on.png',
    'img/btn-delete-m-on@2x.png',
		'img/btn-delete-t-on.png',
    'img/btn-delete-t-on@2x.png',
		'img/btn-delete-d-on.png',
		'img/btn-open-main-on.png',
    'img/btn-open-main-on@2x.png',
		'img/btn-main-inbox-on.png',
    'img/btn-main-inbox-on@2x.png',
		'img/btn-main-inbox-d-on.png',
		'img/btn-main-deleted-on.png',
		'img/btn-main-deleted-d-on.png',
		'img/btn-main-sent-on.png',
    'img/btn-main-sent-on@2x.png',
		'img/btn-main-sent-d-on.png',
		'img/btn-main-search-on.png',
    'img/btn-main-search-on@2x.png',
		'img/btn-main-search-d-on.png',
		'img/btn-main-posted-d-on.png',
		'img/btn-main-saved-on.png',
		'img/btn-main-saved-d-on.png',
		'img/btn-main-expired-d-on.png',
		'img/btn-close-main-on.png',
		'img/btn-close-main-on@2x.png'
]);

$(document).ready(function(){
	
	// various hide/show interactions
	$('.open-main').click(function(){
		$('body').toggleClass('show-main');
	});
	$('.close-main').click(function(){
		$('body').removeClass('show-main');
	});
	$('.main .options > button').click(function(){
		$(this).next('ul').toggleClass('show');
	});
	$('.alert button.close').click(function(){
		$(this).parent().slideUp();
	});
	$('.message-details > a').click(function(){
		$(this).closest('li.message').addClass('show');
		$('body').addClass('show-message');
	});
	$('.message-header > button.close').click(function(){
		$('body').removeClass('show-message');
		$('li.message').removeClass('show');
	});
	
	// affix header on scroll past:
	$('header.inbox').before('<a id="mail-header"></a>');
	var headerTop = $('#mail-header').offset().top;
	function affixHeader(){
		if( $(this).scrollTop() > headerTop ){   
			$('.mail').addClass('affix-header');
		}
		else{
			$('.mail').removeClass('affix-header');
		}
	}
	$(window).resize(function(){
		headerTop = $('#mail-header').offset().top;
		affixHeader();
	});
	$(window).scroll(function(){
		affixHeader();
	});
	
	// mailbox action buttons hover states
	$('.mailbox-actions button').hover(function(){
		$(this).siblings().addClass('off');
	},function(){
		$(this).siblings().removeClass('off');
	});
	
});