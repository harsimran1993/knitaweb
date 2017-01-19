<a id="gallery"></a>
<div>
	<div id="grid" class="main">
				<div onclick="" class="view">
					<div class="view-back">
						<span data-icon="A">566</span>
						<span data-icon="B">124</span>
						<a href="http://www.flickr.com/photos/ag2r/5439506585/in/photostream">&rarr;</a>
					</div>
					<img src="<?php echo base_url("assets/image/1.jpg");  ?>" />
				</div>
				<div onclick="" class="view">
					<div class="view-back">
						<span data-icon="A">210</span>
						<span data-icon="B">102</span>
						<a href="http://www.flickr.com/photos/ag2r/5629018757/in/photostream">&rarr;</a>
					</div>
					<img src="<?php echo base_url("assets/image/2.jpg");  ?>" />
				</div>
				<div onclick="" class="view">
					<div class="view-back">
						<span data-icon="A">690</span>
						<span data-icon="B">361</span>
						<a href="http://www.flickr.com/photos/ag2r/6271521984/in/photostream">&rarr;</a>
					</div>
					<img src="<?php echo base_url("assets/image/3.jpg");  ?>" />
				</div>
				<div onclick="" class="view">
					<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="http://www.flickr.com/photos/ag2r/6131126901/in/photostream">&rarr;</a>
					</div>
					<img src="<?php echo base_url("assets/image/4.jpg");  ?>" />
				</div>
	</div>
	<script>

	function stylesheet(url) {
        var s = document.createElement('link');
        s.type = 'text/css';
        s.async = true;
        s.src = url;
        var x = document.getElementsByTagName('head')[0];
        x.appendChild(s);
    }
	if (Modernizr.csstransforms3d && Modernizr.csstransitions) {
		$('#grid').hoverfold();
	} else {
		stylesheet('css/fallbackactv.css');
	}
	</script>
</div>
