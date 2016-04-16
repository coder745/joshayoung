<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>The Portfolio  of Josh A. Young</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(window).load(function() {
	    $('#slider').nivoSlider({
	        effect:'random', //Specify sets like: 'fold,fade,sliceDown'
	        slices:15,
	        animSpeed: 1000, //Slide transition speed
	        pauseTime: 10000,
	        startSlide:0, //Set starting Slide (0 index)
	        directionNav:false, //Next & Prev
	        directionNavHide:true, //Only show on hover
	        controlNav:false, //1,2,3...
	        controlNavThumbs:false, //Use thumbnails for Control Nav
	        controlNavThumbsFromRel:false, //Use image rel for thumbs
	        controlNavThumbsSearch: '.jpg', //Replace this with...
	        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
	        keyboardNav:true, //Use left & right arrows
	        pauseOnHover:true, //Stop animation while hovering
	        manualAdvance:false, //Force manual transitions
	        captionOpacity:0.8, //Universal caption opacity
	        beforeChange: function(){},
	        afterChange: function(){},
	        slideshowEnd: function(){}, //Triggers after all slides have been shown
	        lastSlide: function(){}, //Triggers when last slide is shown
	        afterLoad: function(){} //Triggers when slider has loaded
	    });
	});
	</script>
	
	<meta http-equiv="refresh" content="333"> 
	<?php include('inc/functions.php'); ?>
	<script type='text/javascript' src='js/functions.js'></script>
	<?php include('inc/browserDetect.php'); ?>
</head>