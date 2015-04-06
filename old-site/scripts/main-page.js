var scrolling_ = true;
var currentHovered_ = -1;
var currentImage_ = 0;
var numberImages_;

/**
 * @description Pre-load the images in the top image pane.
 */
$(function() {
	var ip_container = $('#ip_container');
	var loader = $('#loader');
	var ip_next = ip_container.find('#ip_next');
	var ip_prev = ip_container.find('#ip_prev');
	var links = $('#ip_nav').children('li').not(
			$('#ip_preview_container'));
	numberImages_ = links.length;
	var loaded = 0;

	links.each(function(i) {
		var link = $(this);
		link.find('a').preload({onComplete: function() {
			++loaded;
			if (loaded == numberImages_) {
				// All images have been pre-loaded.
				loader.hide();
				ip_container.show();
				// Bind event handlers.
				links.bind('mouseenter', showTooltip_);
				links.bind('mouseleave', hideTooltip_);
				links.bind('click', showImage_);
				ip_next.bind('click', nextImage_);
				ip_prev.bind('click', prevImage_);
			}
		}});
	});
});

/**
 * TODO
 */
$(document).ready(function() {
	setupNavbar_();
	setupGalleryImages_();
	setupContactForm_();
});

/**
 * TODO
 */
function setupNavbar_() {
	$('nav li a').bind('click', navItemClick_);
	$(window).bind('scroll', windowScroll_);
}

/**
 * TODO
 * 
 * @param event
 */
function navItemClick_(event) {
	//$('nav li').removeClass('nav_selected');
	//$(this).parent().addClass('nav_selected');
}

/**
 * TODO
 * 
 * @param event
 */
function windowScroll_(event) {
	var inview = $('section:in-viewport:first');
	var section = inview.prop('id');
	$('nav li').removeClass('nav_selected');
	$('a[href=#' + section + ']').parent().addClass('nav_selected');
}

/**
 * TODO
 */
function showTooltip_() {
	var tooltip = $('#ip_preview_container');
	var tooltipImage = $('#ip_preview');
	var link = $(this);
	var linkIndex = link.index();
	var linkWidth = link.outerWidth();
	var tooltipLeft = parseFloat(linkIndex * linkWidth)
			- (tooltip.width() / 2) + (linkWidth / 2);
	var thumb = link.find('a').prop('rel');
	var animateLeft;

	if (currentHovered_ != linkIndex) {
		// Which way to animate.
		animateLeft = currentHovered_ < linkIndex ? 75 : -75;
		currentHovered_ = linkIndex;
		var newImage = $('<img />').css('left', '0').prop('src', thumb);
		// If there's more than 1 image then remove the oldest.
		var tooltipPics = tooltipImage.children();
		var tooltipNumPics = tooltipPics.length;
		if (tooltipNumPics > 1) {
			tooltipImage.children(':last').remove();
		}
		tooltipImage.prepend(newImage);
		tooltipPics = tooltipImage.children();
		tooltipNumPics = tooltipPics.length;
		// Animate current picture on tooltip out and new picture in.
		if (tooltipNumPics > 1) {
			tooltipPics.eq(tooltipNumPics - 1).stop().animate(
					{left: -animateLeft + 'px'}, 150, removeThis_);
			tooltipPics.eq(0).css('left', animateLeft + 'px').stop()
					.animate({left: '0'}, 150);
		}
	}
	tooltip.stop().fadeIn('fast').animate({left: tooltipLeft + 'px'},
			{duration: 150, queue: false});
}

/**
 * TODO
 */
function hideTooltip_() {
	$('#ip_preview_container').stop().fadeOut('fast');
}

/**
 * TODO
 * 
 * @param e
 * @returns {Boolean}
 */
function showImage_(e) {
	var ip_image = $('#ip_image');
	var links = $('#ip_nav').children('li').not(
			$('#ip_preview_container'));
	var link = $(this);
	var linkIndex = link.index();
	var newImagePath = link.find('a').prop('href');
	var currentImage = $('#ip_image').find('img');
	var currentImageWidth = currentImage.width();
	var currentIndex = currentImage_;

	// if we click the current one return
	if (currentIndex == linkIndex) {
		return false;
	}
	// Make the new page the selected one.
	links.eq(currentIndex).removeClass('ip_selected');
	link.addClass('ip_selected');
	// Add the new image.
	var newImage = $('<img />').css('left', currentImageWidth + 'px')
			.prop('src', newImagePath);
	if (ip_image.children().length > 1) {
		ip_image.children(':last').remove();
	}
	ip_image.prepend(newImage);
	var newImageWidth = newImage.width();
	// Check the animation direction.
	if (currentIndex > linkIndex) {
		newImage.css('left', -newImageWidth + 'px');
		currentImageWidth = -newImageWidth;
	}
	currentImage_ = linkIndex;
	// Animate in the new image and out the old image.
	ip_image.stop().animate({width: newImageWidth + 'px'}, 350);
	newImage.stop().animate({left: '0'}, 350);
	currentImage.stop().animate({left: -currentImageWidth + 'px'}, 350);
	e.preventDefault();
}

/**
 * TODO
 */
function nextImage_() {
    var nextIndex = currentImage_ + 1;
    if(currentImage_ == numberImages_ - 1) {
        nextIndex = 0;
    }
	$('#ip_nav').children('li').not($('#ip_preview_container')).eq(
				nextIndex).trigger('click');
}

/**
 * TODO
 */
function prevImage_() {
    var nextIndex = currentImage_ - 1;
	if (currentImage_ == 0) {
        nextIndex = numberImages_ - 1;
    }
	$('#ip_nav').children('li').not($('#ip_preview_container')).eq(
				nextIndex).trigger('click');
}

/**
 * TODO
 */
function setupGalleryImages_() {
	$('.zoom img').animate({'opacity': 1}).hover(function() {
		$(this).animate({'opacity': 0.5});
	}, function() {
		$(this).animate({'opacity': 1});
	});
	$('a[rel=work_areas]').fancybox(
			{
				'transitionIn': 'elastic',
				'transitionOut': 'elastic',
				'titlePosition': 'over',
				'titleFormat': function(title, currentArray, currentIndex,
						currentOpts) {
					return '<span id="fancybox-title-over">Image '
							+ (currentIndex + 1) + ' / ' + currentArray.length
							+ (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}});
	$('a[rel=projects]').fancybox(
			{
				'transitionIn': 'elastic',
				'transitionOut': 'elastic',
				'titlePosition': 'over',
				'titleFormat': function(title, currentArray, currentIndex,
						currentOpts) {
					return '<span id="fancybox-title-over">Image '
							+ (currentIndex + 1) + ' / ' + currentArray.length
							+ (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}});
	$('a[rel=photos]').fancybox(
			{
				'transitionIn': 'elastic',
				'transitionOut': 'elastic',
				'titlePosition': 'over',
				'titleFormat': function(title, currentArray, currentIndex,
						currentOpts) {
					return '<span id="fancybox-title-over">Image '
							+ (currentIndex + 1) + ' / ' + currentArray.length
							+ (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}});
}

/**
 * TODO
 */
function setupContactForm_() {
	$('#contact_form').validate({
		rules: {
			name: 'required',
			email: {
				required: true,
				email: true
			},
			url: {
				url: true
			},
			message: 'required'
		},
		messages: {
			name: 'Please enter your name',
			email: {
				required: 'Please enter your email address'
			},
			message: 'Please enter a message'
		}
	});
}

/**
 * TODO
 */
function removeThis_() {
	$(this).remove();
}

/**
 * TODO
 * 
 * @param what
 */
function output(what) {
	console.log(what);
}
