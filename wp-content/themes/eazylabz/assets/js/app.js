jQuery(document).ready(function() {
	/* Custom Scroll jQuery */
	jQuery(window).on("load",function(){
		jQuery("body").mCustomScrollbar({
			callbacks:{
				whileScrolling:function(){
					var bodyScroll = this.mcs.draggerTop,
					winHeight = jQuery(window).height(),
					bannerPos = jQuery('header + div > section').first().offset().top,
					footerH = jQuery('footer').outerHeight(),
					footerPos = jQuery('footer').offset().top - winHeight;
					if (footerPos > 0 && bannerPos < 0) {
						jQuery('.backToTop').addClass('backToTopFixed');
					} else {
						jQuery('.backToTop').removeClass('backToTopFixed');
					}
					if (bannerPos > 0) {
						jQuery('body').removeClass('fixedHeader');
						jQuery('.backToTop').addClass('backToTopAbs');
					} else {
						jQuery('body').addClass('fixedHeader');
						jQuery('.backToTop').removeClass('backToTopAbs');
					}
				}
			},
			mouseWheelPixels: 150,
		});
	});
	jQuery('.modal').on('show.bs.modal', function (e) {
		jQuery(".modal").mCustomScrollbar({
			scrollbarPosition: "string"
		});
		jQuery("body").mCustomScrollbar("disable");
	});
	jQuery('.modal').on('hidden.bs.modal', function (e) {
		jQuery("body").mCustomScrollbar("update");
	});
	/* Custom Scroll jQuery */

	/* Active Current Menu Item jQuery */
	/* var a = window.location.pathname;
	jQuery('.mainNav li').each(function(i) {
		var b = jQuery(this).find('a').attr('href');
		if (a.indexOf(b) > -1) {
			jQuery(this).addClass('current-menu-item');
			jQuery(this).siblings().removeClass('current-menu-item');

			var dropdown = jQuery(this).parent().hasClass('dropdown-menu');
			if(dropdown) {
				jQuery(this).parent().parent().addClass('current-menu-item');
			}
		} else {
			jQuery(this).removeClass('current-menu-item');
		}
		if ((window.location.origin + "/eazylabz/").indexOf(a) > -1) {
			jQuery('.mainNav li').first().addClass('current-menu-item');
		}
	}); */
	/* Active Current Menu Item jQuery */

	/* Hide Label jQuery */
	jQuery(document).on('change click', '.labelHide input, .labelHide .form-control', function(el) {
		var fildId = jQuery(this).attr('id');
		var thisVal = jQuery(el.target).val().length;
		if (thisVal >= 1) {
			jQuery('[for=' + fildId + ']').css({
				'opacity': 0
			});
		} else {
			jQuery('[for=' + fildId + ']').removeAttr('style');
		}
	});
	/* Hide Label jQuery */

	/* Home Page Carousel jQuery */
	jQuery('#testSlider').owlCarousel({
		autoplay: true,
		autoplayTimeout: 3000,
		loop: true,
		margin: 30,
		nav: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	});
	jQuery('#blogSlider').owlCarousel({
		autoplay: true,
		autoplayTimeout: 3000,
		loop: true,
		margin: 30,
		nav: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
	jQuery('#newsSlider').owlCarousel({
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 3000,
		loop: true,
		margin: 30,
		nav: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
	/* Home Page Carousel jQuery */

	jQuery('.faqTabs a').on('click', function(el) {
		el.preventDefault();
		var thisLink = jQuery(this).data('link');
		jQuery('.faqContainer li').each(function(index, el) {
			var thisTab = jQuery(this).data('tab');
			console.log(thisTab.indexOf(thisLink));
			if (thisTab.indexOf(thisLink) > -1)
				jQuery(this).slideDown('slow');
			else
				jQuery(this).hide('slow');
		});
	});

	jQuery('.question').on('click', function(el) {
		el.preventDefault();
		var thisQuestion = jQuery(this).data('question');
		jQuery('.question').removeClass('activeQuestion');
		jQuery('.answer').hide('slow');
		if (jQuery('.answer[data-answer=' + thisQuestion + ']').is(":visible") == false) {
			jQuery('.question[data-question=' + thisQuestion + ']').addClass('activeQuestion');
			jQuery('.answer[data-answer=' + thisQuestion + ']').show('slow');
		} else {
			jQuery('.question[data-question=' + thisQuestion + ']').removeClass('activeQuestion');
			jQuery('.answer[data-answer=' + thisQuestion + ']').hide('slow');
		}
	});

	jQuery('.testFilterContainer').on('change', 'select', function(event) {
		var thisVal = jQuery(this).val();
		var thisName = jQuery(this).find(':selected').attr('data-packagename');
		jQuery('.testNameContainer h2').html(thisName);
		jQuery('.package').slideUp('slow');
		jQuery('.package[data-package=' + thisVal + ']').slideDown('slow');
	});

	var selectPackID = jQuery('.selectPack select').attr('id');
	jQuery('.selectPack').append('<label for="' + selectPackID + '"></label>');

	jQuery('.selectPack').on('click', 'label', function() {
		var thisFor = jQuery(this).attr('for');
		jQuery('[id=' + thisFor + ']').trigger('click');
	});

	/* First Letter Capital */
	jQuery('.firstCap').on('keypress', function(event) {
		var $this = jQuery(this),
		thisVal = $this.val(),
		FLC = thisVal.slice(0, 1).toUpperCase();
		con = thisVal.slice(1, thisVal.length);
		jQuery(this).val(FLC + con);
	});

	/* Scroll To top */
	jQuery('.backToTop').on('click', function() {
		jQuery('body').mCustomScrollbar("scrollTo","top");
	});
	
	/* Developer Script Section */
	jQuery('ul.sub-menu').addClass('dropdown-menu');
	
	
	jQuery(document).on('click','.wpcf7-submit',function(){
		var url = jQuery('.container').find('.cls_site_url').val();
		//alert(url);
		jQuery("input[name='site-url']").val(url);
	
	});
	
	
	
});