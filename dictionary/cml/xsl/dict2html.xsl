<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  version="1.0" xmlns:html="http://www.w3.org/1999/xhtml" xmlns:cml="http://www.xml-cml.org/schema">
  <xsl:output method="html" />

  <xsl:variable name="title" select="/cml:cml/cml:dictionary/@title" />

  <xsl:template match="/">
    <html>
      <head>
        <title>
          <xsl:value-of select="$title" /> another dictionary
        </title>
        <link rel="stylesheet" href="/xsl/dict2html.xsl" type="text/css" />
      </head>
      <xsl:apply-templates select="cml:cml" />
    </html>
  </xsl:template>


</xsl:stylesheet>