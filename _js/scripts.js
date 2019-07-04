			$('.show-menu').on('click', function (e) {
				e.preventDefault();

				$(this).children('.show-menu-button').toggleClass('toggled');

				$('#et-mobile-navigation nav').stop().animate({
					height: "toggle",
					opacity: "toggle"
				}, 300);
			});