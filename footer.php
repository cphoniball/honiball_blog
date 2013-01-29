<div class="cBoth"><!-- --></div>
		<footer>			
		</footer>
</div> <!-- end container --> 
<!-- run the flexslider javascript if on a portfolio page --> <?php if (get_post_type() == 'hb_portfolio') : ?>
<script type="text/javascript">	
$(window).load(function() {	
	$('.flexslider').flexslider({
		slideshow: false,
		controlsContainer: ".slider-controls",
		start: function(slider) {
			//making the slider a constant height
			var height = $('.flexslider img:first').height();
			$('.flexslider img').css('max-height', height);
			//having the slider load after image one is loaded
			//$('.flexslider .slides li ').css('display', 'block').css('-webkit-backface-visibility', 'visible'); 
		}
	});	
});</script><?php endif; ?>

<?php wp_footer() ?> 

</body>
</html>