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
    <script type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="/js/hoverIntent.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>

	<script type="text/javascript">
			$(document).ready(function(){
				$("ul.sf-menu").superfish();
			});
		</script>
			<?php include("../common/tracker.php"); ?>
		<title>Chemical Markup Language | Dictionary</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li>Dictionary</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<p>
                Dictionaries allow CML to be <i>understood</i> by machines.
                Much of physical science is managed through the dictionary mechanism. We find terms
                and units relating to a aspect of science (such as heat of formation, melting point,
                point group) and create entries for these items in a dictionary.
                </p>
                <p>
                The entries can consist of just a unique id (within the dictionary's namespace) and
                some human-understandable definition but we highly encourage more information to be
                given. For instance what are the units, are there upper and lower bounds, what is the
                type of the data (string, integer, float <i>etc</i>).
                of
                </p>
                <p>
                Different programs sometimes produce data with the same label but a different
                interprettation; does <code>density</code> mean electron density or physical density?
                Therefore each computational chemistry code will have its own dictionary and then
                the community can then decide to group particular concepts together.
                </p>
			</div>
			<?php include("../common/footer.php"); ?>
		</div>
	</body>
</html>

