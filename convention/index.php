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
		<title>Chemical Markup Language | Convention</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li>Convention</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<p>
					Different domains of chemistry think about chemistry differently; often this means a very tight specification of rules in <i>your</i> area of expertise
					and very little if any applied to the rest. The loosening of the content model in Schema 3 allows users to combine the elements and attributes as they need to represent data.
					However, users still need to be able to specify a set of rules (constraints) which model their particular domain. This can be likened to thinking of the elements and attributes of CML
					as representing the allowed vocabularly and the set of rules as a grammar specifying how these words are allowed to be put together. The entire set of constraints which the
					CML should conform to is called a <code>convention</code>.
				</p>
                <h1>Implemented Conventions</h1>
                <p>
                There list of currently supported conventions is given below - the name of the convention is given first and is followed by the namespace which is linked to the convention.
                </p>
                <ul>
                    <li><code>dictionary</code> for which the namespace is <a href="http://www.xml-cml.org/convention/dictionary"><code>http://www.xml-cml.org/convention/dictionary</code></a></li>
                    <li><code>molecular</code> for which the namespace is <a href="http://www.xml-cml.org/convention/molecular"><code>http://www.xml-cml.org/convention/molecular</code></a></li>
                    <li><code>compchem</code> for which the namespace is <a href="http://www.xml-cml.org/convention/compchem"><code>http://www.xml-cml.org/convention/compchem</code></a></li>
                    <li><code>unit-dictionary</code> for which the namespace is <a href="http://www.xml-cml.org/convention/unit-dictionary"><code>http://www.xml-cml.org/convention/unit-dictionary</code></a></li>
                    <li><code>unitType-dictionary</code> for which the namespace is <a href="http://www.xml-cml.org/convention/unitType-dictionary"><code>http://www.xml-cml.org/convention/unitType-dictionary</code></a></li>
                </ul>
                <p>
                There is also a <b>toy</b> convention <code>simpleUnit</code> which is used as a very simple example in the CMLLite paper (submitted).
                The namesapce of the convention is <a href="http://www.xml-cml.org/convention/simpleUnit"><code>http://www.xml-cml.org/convention/simpleUnit</code></a>
                </p>
                <p>
                The <code>dictionary</code> convention is currently in the most finished state and acts as a template for how conventions will be described in future.
                </p>
				<p>
					Constraints are defined by using <a href="http://www.w3schools.com/xsl/" target="_blank">XSL Transformations</a> (XSLT). These allow users to put more specific constraints and
					co-constraints on the allowed structure of the CML documents than using only schemas. We an output based on the <a href="http://www.schematron.com/spec.html" target="_blank">ISO Schematron standard</a>
					XML report language SVRL (Schematron Validation Report Language) to indicate errors and warnings in the document. A major advantage of this approach is that all the errors and warnings
					are reported rather than the validation process stopping as soon as the first error has been found.
				</p>
				<p>
					Examples of constraints implemented in the <code>molecular</code> convention are:
				</p>
				<ul>
					<li>an <code>atomArray</code> must have at least one <code>atom</code> child</li>
					<li>the value of an <code>atom</code>s <code>id</code> must be unique within the eldest containing molecule</li>
					<li>a <code>bond</code> element must have an <code>atomRefs2</code> attribute</li>
					<li>a <code>bond</code> must be between <code>atom</code>s within the same molecule</li>
				</ul>
                <p>
                    To validate that a document conforms to a particular convention visit <a href="http://validator.xml-cml.org">http://validator.xml-cml.org</a>.
                </p>
			</div>
			<?php include("../common/footer.php"); ?>
		</div>
	</body>
</html>