$(function () {
	"use strict";
	// search bar
	$(".search-btn-mobile").on("click", function () {
		$(".search-bar").addClass("full-search-bar");
	});
	$(".search-arrow-back").on("click", function () {
		$(".search-bar").removeClass("full-search-bar");
	});
	$(document).ready(function () {
		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 300) {
				$('.top-header').addClass('sticky-top-header');
			} else {
				$('.top-header').removeClass('sticky-top-header');
			}
		});
		$('.back-to-top').on("click", function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
	$(function () {
		$('.metismenu-card').metisMenu({
			toggle: false,
			triggerElement: '.card-header',
			parentTrigger: '.card',
			subMenu: '.card-body'
		});
	});
	// Tooltips
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	// Metishmenu card collapse
	$(function () {
		$('.card-collapse').metisMenu({
			toggle: false,
			triggerElement: '.card-header',
			parentTrigger: '.card',
			subMenu: '.card-body'
		});
	});
	// toggle menu button
	$(".toggle-btn").click(function () {
		if ($(".wrapper").hasClass("toggled")) {
			// unpin sidebar when hovered
			$(".wrapper").removeClass("toggled");
			$(".sidebar-wrapper").unbind("hover");
		} else {
			$(".wrapper").addClass("toggled");
			$(".sidebar-wrapper").hover(function () {
				$(".wrapper").addClass("sidebar-hovered");
			}, function () {
				$(".wrapper").removeClass("sidebar-hovered");
			})
		}
	});
	$(".toggle-btn-mobile").on("click", function () {
		$(".wrapper").removeClass("toggled");
	});
	// chat toggle
	$(".chat-toggle-btn").on("click", function () {
		$(".chat-wrapper").toggleClass("chat-toggled");
	});
	$(".chat-toggle-btn-mobile").on("click", function () {
		$(".chat-wrapper").removeClass("chat-toggled");
	});
	// email toggle
	$(".email-toggle-btn").on("click", function () {
		$(".email-wrapper").toggleClass("email-toggled");
	});
	$(".email-toggle-btn-mobile").on("click", function () {
		$(".email-wrapper").removeClass("email-toggled");
	});
	// compose mail
	$(".compose-mail-btn").on("click", function () {
		$(".compose-mail-popup").show();
	});
	$(".compose-mail-close").on("click", function () {
		$(".compose-mail-popup").hide();
	});
	// === sidebar menu activation js
	$(function () {
		for (var i = window.location, o = $(".metismenu li a").filter(function () {
			return this.href == i;
		}).addClass("").parent().addClass("mm-active");;) {
			if (!o.is("li")) break;
			o = o.parent("").addClass("mm-show").parent("").addClass("mm-active");
		}
        $(".simplebar-content-wrapper").animate({ scrollTop: $(".simplebar-content-wrapper li.mm-active").offset().top-80 }, "slow");
	}),
	// metismenu
	$(function () {
		$('#menu').metisMenu();
	});
	/* Back To Top */
	$(document).ready(function () {
		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 300) {
				$('.back-to-top').fadeIn();
			} else {
				$('.back-to-top').fadeOut();
			}
		});
		$('.back-to-top').on("click", function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
	/*switcher*/
    var htmlClass=localStorage.getItem('HTML_CLASS_DATA');
    var switcherClass=localStorage.getItem('SWITCHER_CLASS_DATA');
    var HTMLElement=$("html");
    var SWITCHERElement=$(".switcher-wrapper");
    HTMLElement.attr('class',htmlClass);
    SWITCHERElement.attr('class',(switcherClass)?switcherClass:'switcher-wrapper');
    if(localStorage.getItem('HTML_CLASS_DATA')&&localStorage.getItem('HTML_CLASS_DATA').includes("ColorLessIcons")){
        $("#ColorLessIcons").prop('checked',true)
    }
    if(localStorage.getItem('HTML_CLASS_DATA')&&localStorage.getItem('HTML_CLASS_DATA').includes("dark-sidebar")){
        $("#DarkSidebar").prop('checked',true)
    }
    if(localStorage.getItem('HTML_CLASS_DATA')&&localStorage.getItem('HTML_CLASS_DATA').includes("dark-theme")){
        $("#darkmode").prop('checked',true)
    }else{
        $("#lightmode").prop('checked',true)

    }
    $(".switcher-btn").on("click", function () {
        SWITCHERElement.toggleClass("switcher-toggled");
        localStorage.setItem('SWITCHER_CLASS_DATA',SWITCHERElement.attr('class'));
    });
    $("#darkmode").on("click", function () {
        HTMLElement.addClass("dark-theme");
        localStorage.setItem('HTML_CLASS_DATA',HTMLElement.attr('class'));
    });
    $("#lightmode").on("click", function () {
        HTMLElement.removeClass("dark-theme");
        localStorage.setItem('HTML_CLASS_DATA',HTMLElement.attr('class'));

    });
    $("#DarkSidebar").on("click", function () {
        HTMLElement.toggleClass("dark-sidebar");
        localStorage.setItem('HTML_CLASS_DATA',HTMLElement.attr('class'));
    });
    $("#ColorLessIcons").on("click", function () {
        HTMLElement.toggleClass("ColorLessIcons");
        localStorage.setItem('HTML_CLASS_DATA',HTMLElement.attr('class'));
    });

});
/* perfect scrol bar */
new PerfectScrollbar('.header-message-list');
new PerfectScrollbar('.header-notifications-list');
