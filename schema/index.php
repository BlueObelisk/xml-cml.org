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
   	<!--
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://xml-cml.org/style/superfish.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://xml-cml.org/style/cml.css" />
    <script type="text/javascript" src="http://xml-cml.org/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="http://xml-cml.org/js/hoverIntent.js"></script>
    <script type="text/javascript" src="http://xml-cml.org/js/superfish.js"></script>
	-->
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/style/superfish.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/style/cml.css"/><link rel="shortcut icon" href="http://xml-cml.org/images/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="/js/hoverIntent.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>

	<script type="text/javascript">
        $(document).ready(function () {
            $("ul.sf-menu").superfish();
        });
    </script>
		<?php include("../common/tracker.php"); ?>

    <title>Chemical Markup Language | Schema</title>
</head>
<body>
    <div id="wrapper" class="page clear">
        <div id="header">
			<?php include("../common/header-and-menu.php"); ?>
            <div id="breadcrumbs" class="clear">
				<ul>
					<li><a href="/index.php">CML</a></li>
					<li>Schema</li>
				</ul>
            </div>
        </div>
        <div id="content">
            <p>
                There are several versions of the CML schema. The current version is Schema 3 (beta).
				As indicated by the beta this schema is still in development.
			</p>
			<h1>Schema 3</h1>
			<p>
				Schema 3 is a refinement of <a href="/schema/schema24/index.php">Schema 2.4</a>. Much of the
				content model has been removed as have those elements and attributes which were deprecated
				in the previous version.
			</p>
			<p>
                The only content model retained in Schema 3 is for elements which must be empty
                or elements which must contain string content. All other elements are permitted
                to contain any other CML element and/or and elements from a different namespace.
			</p>
			<p>
				Schema 3 may be viewed <a href="/schema/schema3/index.php">here</a> and downloaded by
				clicking this <a href="/schema/schema3/schema.xsd">link</a>. Examples of
				how to represent chemistry in CML conforming to Schema 3 are available
				<a href="/examples/schema3/index.php">here</a>.
			</p>
            <h1>Schema 2.4</h1>
			<p>
				The last stable release was
                <a href="http://cml.svn.sourceforge.net/viewvc/cml/schema2/trunk/">Schema 2.4</a>
                and has remained unchanged since 2005.
			</p>
			<p>
				Schema 2.4 may be viewed <a href="/schema/schema24/index.php">here</a> and downloaded by
				clicking this <a href="/schema/schema24/schema.xsd">link</a>. There are many examples of
				how to represent chemistry in CML conforming to this schema available
				<a href="/examples/schema24/index.php">here</a>. All these examples should also
				validate against Schema 3.
			</p>
        </div>
		<?php include("../common/footer.php"); ?>
    </div>
</body>
</html>
