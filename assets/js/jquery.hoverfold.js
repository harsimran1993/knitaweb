( function( $ ) {
	
	$.fn.hoverfold = function( args ) {

		this.each( function() {
		
			$( this ).children( '.view-wrap' ).children('.view').each( function() {
			
				var $item 	= $( this ),
					img		= $item.children( 'img' ).attr( 'src' ),
					struct	= '<div class="slice s1">';
						struct	+='<div class="slice s2">';
							struct	+='<div class="slice s3">';
								struct	+='<div class="slice s4">';
									struct	+='<div class="slice s5">';
									struct	+='</div>';
								struct	+='</div>';
							struct	+='</div>';
						struct	+='</div>';
					struct	+='</div>';
					
				var $struct = $( struct );
				
				$item.find( '.remove' ).remove().end().append( $struct ).find( 'div.slice' ).css( 'background-image', 'url(' + img + ')' ).prepend( $( '<span class="overlay" ></span>' ) );
				
			} );
			
		});

	};

} )( jQuery );

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
