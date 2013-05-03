<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width = 1050, user-scalable = no" />
  <title>Save22 | Launchpad 2.0 - Flipbook</title>
  
  <link rel="stylesheet" href="../css/magazine.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="../js/turn.js"></script>
  <script type="text/javascript" src="../js/zoom.js"></script>
  <!-- <script type="text/javascript" src="../js/turn.html4.min.js"></script> -->
  <script type="text/javascript" src="../js/modernizr.2.5.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="../js/hash.js"></script>
  <script type="text/javascript" src="../js/magazine.js"></script>
  <style type="text/css">
  body{
    background:#fdfdfd;
  }
  </style>
</head>

<body>
	<center><a href="../../book.html">Return to Site</a></center>
	<center>Click side of page to turn</center>
	<center><div class="magazine-viewport">
		<div class="container">
                <div class="magazine row" style="max-width: none;">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
			</div>
		</div>
	</div></center>
	</div>
<script type="text/javascript">

	// Create the flipbook
	$('.magazine').turn({
			// Magazine width
			//width: 1500,
			width: 1500,
			// Magazine height
			//height: 800,
			height: 800,
			// Elevation will move the peeling corner this number of pixels by default
			elevation: 50,
			// Hardware acceleration
			acceleration: !isChrome(),
			// Enables gradients
			gradients: true,
			// Auto center this flipbook
			autoCenter: true,
			// The number of pages
			pages: 12,
			// Events
			when: {
				turning: function(event, page, view) {
					var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');
					// Update the current URI
					Hash.go('page/' + page).update();
					// Show and hide navigation buttons
					disableControls(page);
					$('.thumbnails .page-'+currentPage).
						parent().
						removeClass('current');
					$('.thumbnails .page-'+page).
						parent().
						addClass('current');
				},
				turned: function(event, page, view) {
					disableControls(page);
					$(this).turn('center');
					if (page==1) { 
						$(this).turn('peel', 'br');
					}
				},
				missing: function (event, pages) {
					// Add pages that aren't in the magazine
					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this));
				}
			}
	});
	
	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),
		max: function() { 
			return largeMagazineWidth()/$('.magazine').width();
		}, 
		when: {
			doubleTap: function(event) {
				if ($(this).zoom('value')==1) {
					$('.magazine').
						removeClass('animated').
						addClass('zoom-in');
					$(this).zoom('zoomIn', event);
				} else {
					$(this).zoom('zoomOut');
				}
			},
			resize: function(event, scale, page, pageElement) {
				if (scale==1)
					loadSmallPage(page, pageElement);
				else
					loadLargePage(page, pageElement);
			},
			zoomIn: function () {
				$('.thumbnails').hide();
				$('.made').hide();
				$('.magazine').addClass('zoom-in');
				if (!window.escTip && !$.isTouch) {
					escTip = true;
					$('<div />', {'class': 'esc'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},
			zoomOut: function () {
				$('.esc').hide();
				$('.thumbnails').fadeIn();
				$('.made').fadeIn();
				setTimeout(function(){
					$('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);
			},
			swipeLeft: function() {
				$('.magazine').turn('next');
			},
			swipeRight: function() {
				$('.magazine').turn('previous');
			}
		}
	});
	
	// Using arrow keys to turn the page
	$(document).keydown(function(e){
		var previous = 37, next = 39, esc = 27;
		switch (e.keyCode) {
			case previous:
				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();
			break;
			case next:
				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();
			break;
			case esc:
				$('.magazine-viewport').zoom('zoomOut');	
				e.preventDefault();
			break;
		}
	});
	
	// Events for the next button
	$('.next-button').bind($.mouseEvents.over, function() {
		$(this).addClass('next-button-hover');
	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('next-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('next-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('next-button-down');
	}).click(function() {
		$('.magazine').turn('next');
	});

	// Events for the next button
	$('.previous-button').bind($.mouseEvents.over, function() {
		$(this).addClass('previous-button-hover');
	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('previous-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('previous-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('previous-button-down');
	}).click(function() {
		$('.magazine').turn('previous');
	});

</script>

</body>
</html>
