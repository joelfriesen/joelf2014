	<script type="text/javascript">
	$([
	   '/images/rotate1.jpg',
	   '/images/rotate2.jpg',
	   '/images/rotate3.jpg',
	   '/images/rotate4.jpg',
	   '/images/rotate5.jpg'
	   ]).preload();
	</script>
	
	<script type="text/javascript">

	// Speed of the automatic slideshow
	var slideshowSpeed = 9000;
	
	// Variable to store the images we need to set as background
	// which also includes some text and url's.
	var photos = [ {
			"image" : "/images/rotate1.jpg",
			"url" : "http://google.com",
			"tagline" : "Fancy slogan, looking sleek. More text for when you need it."
		}, {
			"image" : "/images/rotate2.jpg",
			"url" : "http://google.com",
			"tagline" : "This one is short"
		}, {
			"image" : "/images/rotate3.jpg",
			"url" : "http://google.com",
			"tagline" : "There is more text in this one than usual. This slogan is pretty long in fact."
		}, {
			"image" : "/images/rotate4.jpg",
			"url" : "http://google.com",
			"tagline" : "More stuff to say"
		}, {
			"image" : "/images/rotate5.jpg",
			"url" : "http://google.com",
			"tagline" : "Here we are at the end of the slideshow"
		}
	];
	</script>
	<div id="header">
		<div class="center">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
			<div class="headertxt"><a href="#" class="tagline"></a></div>
		</div>
	</div>