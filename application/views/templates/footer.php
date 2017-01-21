
	
<script>
	$(document).ready(function () {
    	$(".player").mb_YTPlayer();
	});
</script>
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
		$('#gallery').hoverfold();
	} else {
		stylesheet('css/fallbackactv.css');
	}
</script>		
		<div style="color:white; text-align:center;">
			<p>Made by Me</p>
			<ul class="list-inline intro-social-buttons">
				<li>
					<a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
				</li>
				<li>
					<a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
				</li>
				<li>
					<a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
				</li>
			</ul>
			<em>&copy; purefaithstudio @2017</em>
		</div>
	</body>
</html>