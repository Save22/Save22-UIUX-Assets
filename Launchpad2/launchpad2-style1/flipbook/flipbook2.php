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
  <!-- <script type="text/javascript" src="../js/zoom.js"></script>
  <script type="text/javascript" src="../js/turn.html4.min.js"></script> -->
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
	<div class="magazine-viewport">
		<div class="container">
              <div class="magazine row" style="max-width: none;">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
			</div>
		</div>
	</div>
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

</script>

</body>
</html>
