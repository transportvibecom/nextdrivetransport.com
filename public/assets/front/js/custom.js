$(function(){
	
		$('.header .header__body .header__menu .header__list').on('click','.chevron',function(e){
			e.preventDefault();
            var parent_li = $(this).closest('.has_submenu');
            parent_li.toggleClass('opened');
			parent_li.find("ul.submenu").slideToggle();
		})
		$('.relinking-services').owlCarousel({
		loop:false,
		items:2,
		margin:15,
		watchOverflow:true,
        nav:true,
        dots: false,
		centerInsufficientSlides:true,
		responsive:{
			1200:{
				items:4
			},
			900:{
				items:3
			},
			600:{
				items:2
			}
		},
		
		 lazyLoad:true,
	});
});