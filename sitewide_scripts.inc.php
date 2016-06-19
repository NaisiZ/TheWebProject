<!-- SITEWIDE SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
	$('.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
		}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(75).fadeOut(100);
	});
</script>

<!--
	Jump Menu JS for header
	Turns all <select> elements with the 'jumpmenu' class into jump menus
-->
<script type="text/javascript">
	function initJumpMenus() {
		var selectElements = document.getElementsByTagName("select");
		for( i = 0; i < selectElements.length; i++ ) {
			// Check for the class and make sure the element has an ID
			if( selectElements[i].className == "jumpmenu" && document.getElementById(selectElements[i].id) != "" ) {
				jumpmenu = document.getElementById(selectElements[i].id);
				jumpmenu.onchange = function() {
					if( this.options[this.selectedIndex].value != '' ) {
						// Redirect
						location.href=this.options[this.selectedIndex].value;
					}
				}
			}
		}
	}
	window.onload = function() {
		initJumpMenus();
	}
</script>


