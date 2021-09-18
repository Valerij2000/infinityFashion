( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button" class="mobile-menu">Меню</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
			$(".mobile-menu").attr('id', 'menu-button');
			$(".mobile-menu").removeClass("menu-button__exit");
		}
		else {
			$(".mobile-menu").removeAttr("id");
			$(".mobile-menu").addClass("menu-button__exit");
			menu.addClass('open');
		}
	});
});
} )( jQuery );
