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
		<title>Chemical Markup Language | Tools</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li>Tools</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1><a name="jumbo" class="internal-link">Jumbo</a></h1>
				<p>
                "JUMBO" is a collective term for CML-aware software components. They are intended to
                be definitive for the CML language, and provide validation and examples. CMLXOM and
                JUMBO are available under SCM on
                <a href="http://cml.svn.sourceforge.net/viewvc/cml/">Sourceforge</a>.
                </p>
                <h2>CMLXOM</h2>
                <p>
                CMLXOM represents an in-memory and serializable CML object of any complexity.
                In general CML can be read into CMLXOM and processed with Java code or XPath expressions.
                </p>
                <p>
                The code consists of components directly supporting the elements and attributes in CML. Every
                element has a Java class, e.g.:
                <br />
                <code>&lt;molecule></code> is supported by <code>CMLMolecule.java</code>
                <br />
                <code>&lt;basisSet></code> is supported by <code>CMLBasisSet.java</code>.
                <br />
                In general the classes support management of
                required or common childElements, required or common attributes.
                <p>
                CMLXOM does not support complex chemical calculations (which are in JUMBO and
                JUMBOConverters). For example CMLXOM will support the management of bond information
                but not the generation of SMILES.
                </p>
                <h2>JUMBO</h2>
                <p>
                JUMBO provides a large set of "tools" which generally support the CMLXOM classes but
                also provide general functionality. Typically:
                <br />
                <code>CMLMolecule.java</code> is supported by <code>MoleculeTool</code>
                <br />
                <code>CMLReaction.java</code> is supported by <code>ReactionTool</code>
                <br />
                These might provide, respectively, molecular geometry, fragment analysis, properties;
                and stoichiometry, identification of catalysts, <i>etc</i>.
                </p>
                <h2>JUMBOConverters</h2>
                <p>
                A large set of modular components for carrying out 1:1 transformations. The simplest
                are Foo2CMLConverter and CML2FooConverter where Foo is a legacy format. This supports
                major formats in:
                </p>
                <ul>
                    <li>crystallography</li>
                    <li>computational chemistry</li>
                    <li>molecules</li>
                    <li>reactions</li>
                    <li>spectroscopy</li>
                </ul>
                <h1><a name="chem4word" class="internal-link">Chem4Word</a></h1>
				<p>
                The <a href="http://research.microsoft.com/chem4word">Chemistry Add-in for Word</a>
                (Chem4Word) is an Open Source (Apache 2.0) program that makes it easier to insert and
                modify chemical information, such as
                labels, formulas, and 2D depictions, within Microsoft Office Word. Additionally, it
                enables the creation of inline "chemical zones", the rendering of print-ready visual
                depictions of chemical structures, and the ability to store and expose chemical
                information in a semantically rich manner.
                </p>
			</div>
			<?php include("../common/footer.php"); ?>
		</div>
	</body>
</html>

