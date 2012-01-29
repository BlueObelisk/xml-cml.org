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
		<title>Chemical Markup Language | Tutorial</title>
	</head>
	<body>
		<div id="wrapper" class="page clear">
			<div id="header">
				<?php include("../common/header-and-menu.php"); ?>
				<div id="breadcrumbs" class="clear">
					<ul>
						<li><a href="/index.php">CML</a></li>
						<li>Tutorial</li>
					</ul>
				</div>
			</div>
			<div id="content">
				<p>
					<a href="/schema/schema3/index.php">Schema 3</a> allows a much looser content model than previous versions for example:
				</p>
<pre class="code">
&lt;molecule xmlns='http://www.xml-cml.org/schema'>
  &lt;atom>
    &lt;bond>
      &lt;molecule />
    &lt;/bond>
  &lt;/atom>
&lt;/molecule>
</pre>
				<p>
				is schema valid although probably meaningless - what kind of atom is it, what is the bond between?
				We use conventions to put restrictions on the content model. The links below contain information about
				how to put together documents which conform to a particular conventions and examples of conformant
				documents.
				</p>
				<ul>
					<li><code><a href="/convention/molecular/index.php">molecular</a></code> convention</li>
					<li><code><a href="/convention/cmlcomp/index.php">dictionary</a></code> convention</li>
					<li><code><a href="/convention/dictionary/index.php">cmlcomp</a></code> convention</li>
					<li><a href="/examples/index.php">examples</a></li>
				</ul>
			</div>
			<?php include("../common/footer.php"); ?>
		</div>
	</body>
</html>

