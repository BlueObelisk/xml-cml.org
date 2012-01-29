<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
	<head profile="http://dublincore.org/documents/dcq-html/">
		<meta name="dcterms.created" content="2010-09-30T15:00:00Z" />
		<meta name="dcterms.creator" content="Joe Townsend, University of Cambridge" />
		<meta name="dcterms.contributor" content="Henry Rzepa, Imperial College London" />
		<meta name="dcterms.contributor" content="Peter Murray-Rust, University of Cambridge" />
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="CML home page" />
		<meta name="keywords" content="CML, schema, xml-cml" />
		<meta name="robots" content="index,follow,noodp,noydir" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/style/superfish.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/style/cml.css"/><link rel="shortcut icon" href="http://xml-cml.org/images/favicon.ico" type="image/x-icon" />
    <link href="/style/XMLDisplay.css" type="text/css" rel="stylesheet" media="screen" />
	<script type="text/javascript" src="/js/XMLDisplay.js"></script>
	<script type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="/js/hoverIntent.js"></script>
	<script type="text/javascript" src="/js/superfish.js"></script>

		<script type="text/javascript">
        $(document).ready(function () {
            $("ul.sf-menu").superfish();
        });
		</script>
		<?php include("../../common/tracker.php"); ?>
		<title>Chemical Markup Language | Examples - Schema 2.4</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li><a href="/examples/index.php">Examples</a></li>
						<li><a href="/examples/schema24/index.php">Schema 2.4</a></li>
						<li>bond4</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<div id="XMLHolder">
					<script> LoadXML('XMLHolder', 'bond4.cml'); </script>
				</div>
			</div>
			<?php include("../../common/footer.php"); ?>
		</div>
	</body>
</html>