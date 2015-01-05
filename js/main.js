if ($(window).width() < 768) {

	$('#menu-btn').sidr({
		name: 'sidr-main',
		source: '#mobile-nav'
	});
    
};

var $container = $('.items').isotope({
	itemselector: 'li'
});

$('.filters').on( 'click', 'a.filter', function() {
	var filterValue = $(this).attr('data-filter');
	$container.isotope({ filter: filterValue });
});

$('.sidr').on( 'click', 'a.sidr-class-filter', function() {
	var filterValue = $(this).attr('data-filter');
	$container.isotope({ filter: filterValue });
});

$(document).ready(function() {
	$(".fancybox")
		.fancybox({
			beforeLoad: function() {
	            var el, id = $(this.element).data('title-id');

	            if (id) {
	                el = $('#' + id);
	            
	                if (el.length) {
	                    this.title = el.html();
	                }
	            }
	        },
			closeClick : true,
			loop : 'false',
			openEffect : 'fade',
			nextEffect : 'fade',
			prevEffect : 'fade',
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					closeClick : true,
					showEarly  : true
				}
			}
		});
});