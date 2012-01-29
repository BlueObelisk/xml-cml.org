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
		<title>Chemical Markup Language | Examples - Schema 3</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li><a href="/examples/index.php">Examples</a></li>
						<li>Schema 3</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>Examples for Schema 3</h1>
				<p>
				Schema 3 is a less restrictive schema than Schema 2.4, designed to be used with conventions as part of <a href="/schema/cmllite.php">CMLLite</a>. The loosening of the
				restrictions in the schema mean that it is valid to create documents which do not make chemical sense. For example molecules being the children of atoms and bonds
				being defined in a molecule with no atoms present. However, the inclusion of conventions allows us to place much tighter constraints and co-constraints on the structure.</p>
				<p>
				Owing to the looser content model of Schema 3 it is less meaningful to give examples of how the elements and attributes may be combined than it is for
				<a href="/examples/schema24/index.php">Schema 2.4</a>; hence we only give examples of files which are both valid according to the schema but also conform to a
				specified convention. These examples are available by clicking on the links below.
				</p>
				<ul>
					<li><a href="/examples/schema3/molecular/index.php">Molecular</a> - conformant to the <code>http://www.xml-cml.org/convention/molecular</code> convention</li>
					<li><a href="/examples/schema3/cmlcomp/index.php">CML Comp</a> - conformant to the <code>http://www.xml-cml.org/convention/cmlcomp</code> convention</li>
				</ul>
			</div>
			<?php include("../../common/footer.php"); ?>
		</div>
	</body>
</html>