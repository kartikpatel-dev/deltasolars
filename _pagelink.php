<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png">
<link href="css/base-responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/base-js.js"></script>
<script type="text/javascript">
$(document).click(function(e) {
  var target = e.target;
  if (!$(target).is('.rgdev') && !$(target).parents().is('.rgdev')) {
    $('.rgdev-list').hide(100);
  }
});
</script>

<link rel="stylesheet" href="fancybox/css/jquery.fancybox.css">
<link rel="stylesheet" href="fancybox/css/jquery.fancybox-buttons.css">
<link rel="stylesheet" href="fancybox/css/jquery.fancybox-thumbs.css">

	<!-- FancyBox -->
		<script src="fancybox/js/jquery.fancybox.js"></script>
		<script src="fancybox/js/jquery.fancybox-buttons.js"></script>
		<script src="fancybox/js/jquery.fancybox-thumbs.js"></script>
        <script src="fancybox/js/jquery.easing-1.3.pack.js"></script>
		<script src="fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>
        
        <script type="text/javascript">
			$(document).ready(function() {
			$(".fancybox").fancybox();
			});
		</script>
