$(document).ready(function() {
	$('#call_us_number').tooltip()
	$('#services_training').popover()
	$('.carousel').carousel()
	$('#back_button_map').hide()


	//Testimonials

	total_testimonials = $('#testimonials ul li').size() - 1
	last_testimony = (total_testimonials) * 610 * (-1)
	testimony_size = 590
	current_testimony = 0
	$('#testimonials ul').width(($('#testimonials ul li').size()+1) * 575)

	$('.next_arrow').click(function() {
		if (current_testimony == total_testimonials) {
			// $('#testimonials ul').animate({'margin-left': 0})
			$('#testimonials ul').css('margin-left', 0)
			current_testimony = 0
		}
		else { 
			$('#testimonials ul').css('margin-left', "-=610") 
			current_testimony++
		}
	})

	$('.prev_arrow').click(function() {
		if (current_testimony == 0 ) {
			$('#testimonials ul').css('margin-left', last_testimony)
			current_testimony = total_testimonials
		}
		else {
			$('#testimonials ul').css('margin-left', "+=610")
			current_testimony--
		}	
	})

	$('#testimonials').hover(function() {
		$('.prev_arrow_bg').animate({'margin-left': -9}, 200)
		$('.next_arrow_bg').animate({'margin-left': 570}, 200)
	}, function() {
		$('.prev_arrow_bg').animate({'margin-left': -50}, 200)
		$('.next_arrow_bg').animate({'margin-left': 620}, 200)
	});

	//Footer map
	$('.address_link').click(function() {
		$('#default_footer_container').slideUp()
		$('#back_button_map').fadeIn()
		$('#location_map').slideDown()
	})

	$('#back_button_map').click(function() {
		$('#default_footer_container').slideDown()
		$('#location_map').slideUp()
	})

	//Book call btn
	$("#book_call_btn").click(function() {
		$("#call_booking_container").slideToggle()
		$("html, body").animate({scrollTop: 200}, 'slow')
	})


	$('#book_call_time_select').change(function() {
		booked_time = $('#book_call_time_select option:selected').val()
		if (booked_time < 9) {
			$("#option_time_pm").prop('checked', true)
			$("#option_time_am").prop('disabled', true)
		}
		
		if (booked_time > 5) {
			$("#option_time_pm").prop('disabled', true)
			$("#option_time_am").prop('checked', true)
		}
	})


	//Feed
	total_feeds = ($('.feed').size()) - 1
	current_feed = 0
	// console.log(total_feeds)

	//Set #feeds_container width
	$('#feeds_container').width(220 * (total_feeds + 1) + (total_feeds * 40))
	// container_width = ($('#feeds_container').width() - 260) * -1

	$("#next_feed").click(function() {
		if (current_feed == total_feeds) {
			current_feed = 0
			// $('#feeds_container').animate({'margin-left': 0})
			$('#feeds_container').css('margin-left', 0)
		}
		else {
			// $('.feed').eq(current_feed).hide()
			// $('#feeds_container').animate({'margin-left': "-=250"})
			$('#feeds_container').css('margin-left', "-=250")
			current_feed++
		}
	})

	$("#prev_feed").click(function() {
		if (current_feed == 0) {
			current_feed = total_feeds
			// $('#feeds_container').animate({'margin-left': container_width})
			$('#feeds_container').css('margin-left', ($('#feeds_container').width() - 260) * -1)
		}
		else {
			current_feed--
			// $('#feeds_container').animate({'margin-left': "+=250"})
			$('#feeds_container').css('margin-left', "+=250")
		}
	})


	//Services
	service_selected = $('#service_list_menu option:selected').val()
	$('#service_desc' + service_selected).show()
		

	$('#service_list_menu').change(function() {
		service = $("#service_list_menu option:selected").val()
		$('.service_description_container').hide()
		$('#service_desc' + service).show()
	})

	//Show more about member
	$('.team_member_more_link').each(function() {
		$(this).click(function() {
			$(this).parent().parent().parent().animate({'margin-top': '-200'})
		})
	})

	$('.team_member_desc').hover(function() {
		$(this).animate({'margin-top': '-200'})
		$('.team_member_more_link').text('')
	}, function() {
		$(this).animate({'margin-top': '-60'})
		$('.team_member_more_link').text('more')
	})

	//Products tabs
	$('#myTabs ul li').eq(0).addClass('active');
	$('#myTabContent div').eq(0).addClass('active');
	$('#myTabs li ul li').eq(0).click(function() {
		$('#myTabContent div').removeClass('active in');
		$('#myTabContent div').eq(0).addClass('active in');
	})
	$('#myTabs li').eq(0).addClass('active');
	$('.tab-pane').eq(0).addClass('active');
	// $('.products_index_list').eq(0).addClass('active');
	// activeTab = '';
	// $('#myTab a').click(function (e) {
	// 	e.preventDefault();
	// 	$(this).tab('show');
	// })

	// $('.tab-pane').eq(0).show();

	// $('#myTab li a').click(function() {
	// 	$('.tab-pane').hide();
	// 	activeTab = $(this).text();
	// 	$('#' + activeTab).show();
	// });

	//Categories
	$('#Corporate').show();
	$('#prod_categories_residential').hide();
	$('#business_select').change(function() {
		if ($(this).val() == 1) {
			$('#prod_categories_residential').hide();
			$('#prod_categories_residential select').attr('name', '');
			$('#prod_categories_corporate').show();
			$('#prod_categories_corporate select').attr('name', 'category');
		}

		if ($(this).val() == 2) {
			$('#prod_categories_corporate').hide();
			$('#prod_categories_corporate select').attr('name', '');
			$('#prod_categories_residential').show();
			$('#prod_categories_residential select').attr('name', 'category');
		}
	});

})