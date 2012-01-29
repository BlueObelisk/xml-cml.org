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
    <link rel="shortcut icon" href="http://xml-cml.org/images/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="/js/hoverIntent.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("ul.sf-menu").superfish();
        });
    </script>

	<?php include("./common/tracker.php"); ?>
	<title>Chemical Markup Language | CML</title>
</head>
<body>
    <div id="wrapper" class="page clear">
        <div id="header">
			<?php include("./common/header-and-menu.php"); ?>
			<div id="breadcrumbs" class="clear">
				<ul>
					<li><a href="/index.php">CML</a></li>
					<li>Home</li>
				</ul>
			</div>
        </div>
        <div id="content">
            <h1>
                Chemical Markup Language - CML</h1>
            <p>
			XML is a mainstream approach providing semantics for science, such as <a href="http://www.w3.org/Math/" target="_blank">MathML</a>,
			<a href="http://sbml.org/" target="_blank">SBML</a>/<a href="http://biopax.org/" target="_blank">BIOPAX</a> (biology), <a href="http://en.wikipedia.org/wiki/Geography_Markup_Language" target="_blank">GML</a> and
			<a href="http://en.wikipedia.org/wiki/Keyhole_Markup_Language" target="_blank">KML</a> (geo) <a href="http://www.w3.org/Graphics/SVG/" target="_blank">SVG</a> (graphics) and
			<a href="http://dtd.nlm.nih.gov/" target="_blank">NLM-DTD</a>, <a href="http://en.wikipedia.org/wiki/OpenDocument" target="_blank">ODT</a> and <a href="http://en.wikipedia.org/wiki/Office_Open_XML" target="_blank">OOXML</a> (documents).
			CML provides support for most chemistry, especially molecules, compounds, reactions, spectra, crystals and computational chemistry (compchem).
			</p>
			<p>
			CML has been developed by <a href="http://en.wikipedia.org/wiki/Peter_Murray-Rust" target="_blank">Peter Murray-Rust</a> and <a href="http://en.wikipedia.org/wiki/Henry_Rzepa" target="_blank">Henry Rzepa</a>
			since 1995 and is the de facto XML for chemistry is accepted by publishers and has more than 1 million
			lines of Open Source code supporting it. CML can be validated and built into authoring tools (for example the <a href="/tools/index.php#chem4word">Chemistry Add-in for Microsoft Word</a>).
			</p>
			<div class="figure">
			  <p><img alt="Peter Murray-Rust and Henry Rzepa hard at work" src="/images/pmrhsr.jpg" /></p>
			  <p>Peter Murray-Rust and Henry Rzepa hard at work</p>
			</div>
			<p>
			The infrastructure includes legacy converters, dictionaries, Semantic Web and Linked Open Data.
			</p>
			<p>
                There are several versions of the CML schema. The last stable release was
                <a href="http://cml.svn.sourceforge.net/viewvc/cml/schema2/trunk/" target="_blank">Schema 2.4</a>
                and has remained unchanged since 2005.
            </p>
            <p>
                The most recent schema is <a href="./schema3-alpha.xsd">3 beta</a>. As indicated
                by the beta this schema is still in development but essentially it consists of
                the original Schema 2.4 but with a much reduced content model. This allows users
				to put together the elements and attributes in a more flexible manner to fit
				the data that they want to represent more easily.
            </p>
        </div>
		<?php include("./common/footer.php"); ?>
    </div>
</body>
</html>
