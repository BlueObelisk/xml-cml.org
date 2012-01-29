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
		<?php include("../../../common/tracker.php"); ?>
		<title>Chemical Markup Language | Examples - Schema 3</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../../../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li><a href="/examples/index.php">Examples</a></li>
						<li><a href="/examples/schema3.php">Schema 3</a></li>
						<li>Molecular</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>Examples for Schema 3 Molecular</h1>
				<p>The following examples are all valid under the molecular convention. The files have been used to unit test the validation service and should therefore give a fairly full example of each element. A more full description of how to create files that are valid under this convention is given in the tutorial.				<p>Click on a link below to view the example</p>
				<ul><li><a href="atom-with-non-cml-content.php">atom with non cml content</a></li><li><a href="atoms-in-formula-do-not-need-id.php">atoms in formula do not need id</a></li><li><a href="bond-order-other-should-have-dictRef.php">bond order other should have dictRef</a></li><li><a href="bondStereo-atomRefs2-must-match-parent-bonds-1.php">bondStereo atomRefs2 must match parent bonds 1</a></li><li><a href="bondStereo-atomRefs2-must-match-parent-bonds-2.php">bondStereo atomRefs2 must match parent bonds 2</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-1.php">bondStereo atomRefs4 must contain parent bonds 1</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-2.php">bondStereo atomRefs4 must contain parent bonds 2</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-3.php">bondStereo atomRefs4 must contain parent bonds 3</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-4.php">bondStereo atomRefs4 must contain parent bonds 4</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-5.php">bondStereo atomRefs4 must contain parent bonds 5</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-6.php">bondStereo atomRefs4 must contain parent bonds 6</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-7.php">bondStereo atomRefs4 must contain parent bonds 7</a></li><li><a href="bondStereo-atomRefs4-must-contain-parent-bonds-8.php">bondStereo atomRefs4 must contain parent bonds 8</a></li><li><a href="bondStereo-other-should-have-dictRef.php">bondStereo other should have dictRef</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-1.php">formula must have atomArray or concise or inline 1</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-2.php">formula must have atomArray or concise or inline 2</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-3.php">formula must have atomArray or concise or inline 3</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-4.php">formula must have atomArray or concise or inline 4</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-5.php">formula must have atomArray or concise or inline 5</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-6.php">formula must have atomArray or concise or inline 6</a></li><li><a href="formula-must-have-atomArray-or-concise-or-inline-7.php">formula must have atomArray or concise or inline 7</a></li><li><a href="minimal-molecule-1.php">minimal molecule 1</a></li><li><a href="minimal-molecule-2.php">minimal molecule 2</a></li><li><a href="minimal-molecule-3.php">minimal molecule 3</a></li><li><a href="minimal-molecule-4.php">minimal molecule 4</a></li><li><a href="minimal-molecule-with-foreign-sibling.php">minimal molecule with foreign sibling</a></li><li><a href="minimal-molecule-with-non-cml-content-1.php">minimal molecule with non cml content 1</a></li><li><a href="minimal-molecule-with-non-cml-content-2.php">minimal molecule with non cml content 2</a></li><li><a href="minimal-molecule-with-non-cml-content-3.php">minimal molecule with non cml content 3</a></li><li><a href="molecular-convention-molecule-with-non-molecular-sibling-1.php">molecular convention molecule with non molecular sibling 1</a></li><li><a href="molecular-convention-molecule-with-non-molecular-sibling-2.php">molecular convention molecule with non molecular sibling 2</a></li><li><a href="molecular-convention-not-as-root-element.php">molecular convention not as root element</a></li><li><a href="molecular-molecule-within-non-molecular.php">molecular molecule within non molecular</a></li><li><a href="must-be-at-least-one-molecule-in-molecular-convention-1.php">must be at least one molecule in molecular convention 1</a></li><li><a href="must-be-at-least-one-molecule-in-molecular-convention-2.php">must be at least one molecule in molecular convention 2</a></li><li><a href="property-must-have-dictRef-and-title.php">property must have dictRef and title</a></li><li><a href="repeated-atom-ids-in-different-molecules.php">repeated atom ids in different molecules</a></li><li><a href="scalar-must-have-units-and-datatype-and-be-child-of-property.php">scalar must have units and datatype and be child of property</a></li></ul>
			</div>
			<?php include("../../../common/footer.php"); ?>
		</div>
	</body>
</html>