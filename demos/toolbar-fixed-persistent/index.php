<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Persistent toolbars - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<script>
		$(function(){
			$("[data-role='navbar']").navbar();
			$("[data-role='header'], [data-role='footer']").toolbar();
		});
	</script>
</head>
<body>
    <div data-role="header" data-position="fixed" data-theme="a">
		<a href="../toolbar/" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>
        <h1>Fixed external header</h1>
    </div><!-- /header -->

	<div data-role="page" class="jqm-demos">

	    <div data-role="content" class="jqm-content">

			<h1>Persistent toolbars</h1>

			<p>These pages are a demo of a persistent <a href="../navbar/">navbar</a> in a fixed footer toolbar. Click on any of the links in the footer, and you'll see the page content transition. Both the persistent header and footer on these pages remain in place during the animation to a new HTML page.</p>

			<p>With the new external toolbars no extra effort is required to now have persistant toolbars. Simply place them outside of the page container on each page they will be loaded on the first page and persist on subsequent pages. The toolbars still need to be placed on each page to account for refresh however they will be ignored if not within a page container.</p>

			<p>Typically, the persistent toolbar technique will be combined with fixed positioning.</p>

			<h2>Improving page load with persistant toolbars</h2>

			<p>By combining this technique with a little bit of server side logic you can reduce the file size for each page load significantly by not sending anything except the actual page container back when the request is from ajax. this not only reduces file size but makes the actual processing of the page quicker also. To see an example of this technique see <a href="../toolbar-fixed-persistent-optimized/" data-ajax="false">AJAX optimized persistant toolbars</a></p>

			<h3>A note about transitions</h3>

			<p>By Removing the toolbars from the page container they are no longer part of the page transition which dramaticly improves the performance of complex 3D page transitions over the older style of persistant toolbars.</p>

		</div><!-- /content -->

	</div><!-- /page -->

	<div data-role="footer" data-position="fixed" data-theme="a">
		<div data-role="navbar">
			<ul>
				<li><a href="index.php" data-prefetch="true" data-transition="none" class="ui-btn-active ui-state-persist">Info</a></li>
				<li><a href="page-b.php" data-prefetch="true" data-transition="flip">Friends</a></li>
				<li><a href="page-c.php" data-prefetch="true" data-transition="turn">Albums</a></li>
				<li><a href="page-d.php" data-prefetch="true" data-transition="slide">Emails</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

</body>
</html>
