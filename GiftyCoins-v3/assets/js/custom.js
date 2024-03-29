(function ($) {

	"use strict";

	// Page loading animation
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });

	// WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) {
            var wow = new WOW ({
                boxClass:     'wow',      // Animated element css class (default is wow)
                animateClass: 'animated', // Animation css class (default is animated)
                offset:       20,         // Distance to the element when triggering the animation (default is 0)
                mobile:       true,       // Trigger animations on mobile devices (default is true)
                live:         true,       // Act on asynchronously loaded content (default is true)
            });
            wow.init();
        }
    });

	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});



	const Accordion = {
		settings: {
		  // Expand the first item by default
		  first_expanded: false,
		  // Allow items to be toggled independently
		  toggle: false
		},

		openAccordion: function(toggle, content) {
		  if (content.children.length) {
			toggle.classList.add("is-open");
			let final_height = Math.floor(content.children[0].offsetHeight);
			content.style.height = final_height + "px";
		  }
		},

		closeAccordion: function(toggle, content) {
		  toggle.classList.remove("is-open");

		  content.style.height = 0;
		},

		init: function(el) {
		  const _this = this;

		  // Override default settings with classes
		  let is_first_expanded = _this.settings.first_expanded;
		  if (el.classList.contains("is-first-expanded")) is_first_expanded = true;
		  let is_toggle = _this.settings.toggle;
		  if (el.classList.contains("is-toggle")) is_toggle = true;

		  // Loop through the accordion's sections and set up the click behavior
		  const sections = el.getElementsByClassName("accordion");
		  const all_toggles = el.getElementsByClassName("accordion-head");
		  const all_contents = el.getElementsByClassName("accordion-body");
		  for (let i = 0; i < sections.length; i++) {
			const section = sections[i];
			const toggle = all_toggles[i];
			const content = all_contents[i];

			// Click behavior
			toggle.addEventListener("click", function(e) {
			  if (is_toggle) {
				// Hide all content areas first
				for (let a = 0; a < all_contents.length; a++) {
				  _this.closeAccordion(all_toggles[a], all_contents[a]);
				}

				// Expand the clicked item
				_this.openAccordion(toggle, content);
			  } else {
				// Toggle the clicked item
				if (toggle.classList.contains("is-open")) {
				  _this.closeAccordion(toggle, content);
				} else {
				  _this.openAccordion(toggle, content);
				}
			  }
			});

			// Expand the first item
			if (i === 0 && is_first_expanded) {
			  _this.openAccordion(toggle, content);
			}
		  }
		}
	  };

	  (function() {
		// Initiate all instances on the page
		const accordions = document.getElementsByClassName("accordions");
		for (let i = 0; i < accordions.length; i++) {
		  Accordion.init(accordions[i]);
		}
	  })();




	$(document).on("click", ".naccs .menu div", function() {
		var numberIndex = $(this).index();

		if (!$(this).is("active")) {
			$(".naccs .menu div").removeClass("active");
			$(".naccs ul li").removeClass("active");

			$(this).addClass("active");
			$(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

			var listItemHeight = $(".naccs ul")
				.find("li:eq(" + numberIndex + ")")
				.innerHeight();
			$(".naccs ul").height(listItemHeight + "px");
		}
	});


	$('.owl-features').owlCarousel({
		center: true,
      items:2,
      loop:true,
      nav: true,
      margin:30,
      responsive:{
        992:{
            items:3
        },
		1200:{
			items:4
		}
      }
	});



	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation







	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});



	const dropdownOpener = $('.main-nav ul.nav .has-sub > a');

    // Open/Close Submenus
    if (dropdownOpener.length) {
        dropdownOpener.each(function () {
            var _this = $(this);

            _this.on('tap click', function (e) {
                var thisItemParent = _this.parent('li'),
                    thisItemParentSiblingsWithDrop = thisItemParent.siblings('.has-sub');

                if (thisItemParent.hasClass('has-sub')) {
                    var submenu = thisItemParent.find('> ul.sub-menu');

                    if (submenu.is(':visible')) {
                        submenu.slideUp(450, 'easeInOutQuad');
                        thisItemParent.removeClass('is-open-sub');
                    } else {
                        thisItemParent.addClass('is-open-sub');

                        if (thisItemParentSiblingsWithDrop.length === 0) {
                            thisItemParent.find('.sub-menu').slideUp(400, 'easeInOutQuad', function () {
                                submenu.slideDown(250, 'easeInOutQuad');
                            });
                        } else {
                            thisItemParent.siblings().removeClass('is-open-sub').find('.sub-menu').slideUp(250, 'easeInOutQuad', function () {
                                submenu.slideDown(250, 'easeInOutQuad');
                            });
                        }
                    }
                }

                e.preventDefault();
            });
        });
    }





})(window.jQuery);

// -------------------------------pyramid loader-----------------------------
const pyramid=document.querySelector('.pyramid-loader');
const redeem= document.querySelector('.R-button');
const redeemCard=document.querySelector('.results-summary-container')
let mybutton = document.querySelector(".to-top-button");

if(redeem){
	redeem.addEventListener('click',()=>{
		setTimeout(() => {
			pyramid.style.display='none';
			redeemCard.style.display='unset'

		}, 4000);
	})
}



if($(".scroll-to-section a")){
	$(".scroll-to-section a").on("click", function (e) {

		e.preventDefault();

		const href = $(this).attr("href");

		$("html, body").animate({ scrollTop: $(href).offset().top }, 800);

	});
}
//smooth scroll



if(mybutton) {
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
		  mybutton.style.display = "flex";
		} else {
		  mybutton.style.display = "none";
		}
	  }
}
//to top button


// When the user scrolls down 20px from the top of the document, show the button



