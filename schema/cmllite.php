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
		<title>Chemical Markup Language | CMLLite</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li><a href="/schema/index.php">Schema</a></li>
						<li>CMLLite</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>A new approach to validation</h1>
				<p>
					CML has previously been defined using DTDs and schemas.
					As part of the <a href="http://chem4word.codeplex.com/" target="_blank">Chem4Word project</a> a new approach to the validation of Chemical Markup Langauge (CML) has been taken.
					The validation is now performed by a series of Schema, XSLT and code. Each step of the validation process puts progressively tighter restrictions on the structure and content of the document.
				</p>
				<h2>CMLLite Schema - Vocabulary</h2>
				<p>
					We are currently using <a href="/schema/schema3/index.php">Schema 3</a> for the schema validation step of the CMLLite process. This schema is based on the long stable <a href="/schema/schema24/index.php">Schema 2.4</a>
					but the content model has been largely removed and deprecated elements and attributes have also been removed. We are still cleaning up the schema (espcially the documentation) and intend to
					denormalise the attributess.
				</p>
				<p>
					The content model determines what types of content element and attributes can hold. Previously the Schema allowed mixed content (both text and elements) for some elements; this is no
					longer allowed. Elements are specified as being allowed either no content, text content or element content. In some cases the text content or element content is mandatory in others it is
					optional. Any element which is allowed element content may now hold any other CML element or any element from a different namespace.
				</p>
				<p>
					Schema 3 has added the explicit <code>unknown</code> value to many enumerations. In Schema 2.4 elements and attributes specified an empty string as allowed content which was interpretted to mean unknown or unspecified.
					This has been replaced by the string value <code>unknown</code>. This allows the absence of the element or attribute to be interpretted as unspecified.
				</p>
				<p>
					Previous schemas allowed values to be either from an enumeration or a <a href="http://www.w3.org/TR/REC-xml-names/" target="_blank">QName</a>.
					For example the list below shows some of the allowed values of the <code>order</code> attribute on a <code>bond</code>.
				</p>
				<ul>
					<li><code>S</code> (single)</li>
					<li><code>D</code> (bond)</li>
					<li><code>T</code> (triple)</li>
					<li><code>A</code> (aromatic)</li>
					<li><code>QName</code> allows users to point to another bond type which is not supported by CML</li>
				</ul>
				<p>
					The <code>order</code> attribute could therefore have either string or QName content. Schema 3 now specifies the allowed values as:
				</p>
				<ul>
					<li><code>S</code> (single)</li>
					<li><code>D</code> (bond)</li>
					<li><code>T</code> (triple)</li>
					<li><code>A</code> (aromatic)</li>
					<li><code>unknown</code> - an unambiguous statement that the order of the bond is unknown</li>
					<li><code>other</code> - any other bond order. The <code>dictRef</code> attribute may be used to add further information.</li>
				</ul>
				<h2><a name="conventions">Conventions and Constraints - Grammar</a></h2>
				<p>
					Different domains of chemistry think about chemistry differently; often this means a very tight specification of rules in <i>your</i> area of expertise
					and very little if any applied to the rest. The loosening of the content model in Schema 3 allows users to combine the elements and attributes as they need to represent data.
					However, users still need to be able to specify a set of rules (constraints) which model their particular domain. This can be likened to thinking of the elements and attributes of CML
					as representing the allowed vocabularly and the set of rules as a grammar specifying how these words are allowed to be put together. The entire set of constraints which the
					CML should conform to is called a <code>convention</code>. There are currently three well developed conventions <code>molecular</code>, <code>cmlcomp</code> and <code>dictionary</code>.
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
					There are also <a href="/examples/index.php">examples</a> of files which conform to the various levels of validation available with some explanation <a href="/examples/schema3/index.php">here</a>.
				</p>
			</div>
			<?php include("../common/footer.php"); ?>
		</div>
	</body>
</html>
