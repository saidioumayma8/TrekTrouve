<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		/* Sidebar Trigger */
		$('.sidebar-toggle').click(function(e) {
			e.preventDefault();
			$('.sidebar').addClass('active');
			$('.sidebar-overlay').css('visibility', 'visible');
		});
		$('.sidebar-overlay, .close').click(function(e) {
			e.preventDefault();
			$('.sidebar').removeClass('active');
			$('.sidebar-overlay').css('visibility', 'hidden');
		});
		$('#openLogin').click(function() {
		$('.login-overlay').fadeIn();
		$('.login-form').css({
			visibility: 'visible',
			opacity: '1'
		});
	});
	$('.close').click(function(){
		$('.login-overlay').fadeOut(1000);
		$('.login-form').css({
			visibility: 'hidden',
			opacity: '0'
		});
	});
	});
</script>
