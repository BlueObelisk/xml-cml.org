<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0"
                xmlns="http://www.w3.org/1999/xhtml"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:cml="http://www.xml-cml.org/schema">

  <xsl:output indent="yes"/>

  <xsl:template match="/">
    <xsl:apply-templates select=".//cml:unitTypeList" />
  </xsl:template>

  <xsl:template match="cml:unitTypeList">
    <html>
      <head>
        <title>
          CML Unit Types - <xsl:value-of select="@title" />
        </title>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link rel="stylesheet" href="http://www.xml-cml.org/style/cml-dict.css" type="text/css" />
      </head>

      <body>
        <div class="head">
          <h1>
            <xsl:value-of select="@title" />
          </h1>

          <h2>Namespace</h2>
          <p>
            The namespace of this dictionary is: <code>
              <xsl:value-of select="@namespace" />
            </code>
          </p>

          <xsl:if test="cml:description">
            <h2>Description</h2>
            <div>
              <xsl:copy-of select="cml:description/*"/>
            </div>
          </xsl:if>

          <hr />
        </div>

        <h1>Table of Contents</h1>

        <ul>
          <xsl:for-each select="./cml:unitType">
            <li>
              <a href="#{@id}">
                <xsl:value-of select="@name" />
              </a>
            </li>
          </xsl:for-each>
        </ul>

        <hr />

        <xsl:apply-templates select="./cml:unitType"/>

      </body>
    </html>

  </xsl:template>

  <xsl:template match="cml:unitType">

    <div class="entry">

      <h1 title="{@id}">
        <a name="{@id}">
          <xsl:value-of select="@name"/>
        </a> (<xsl:value-of select="@title" />) (ID: <xsl:value-of select="@id" />)
      </h1>

      <xsl:if test="cml:definition">
        <h2>Definition</h2>
        <div>
          <xsl:copy-of select="cml:definition/*"/>
        </div>
      </xsl:if>
      <xsl:if test="cml:description">
        <h2>Description</h2>
        <div>
          <xsl:copy-of select="cml:description/*"/>
        </div>
      </xsl:if>
      
      <xsl:if test="cml:dimension">
        <h2>Dimension</h2>
        <div>
            <xsl:apply-templates select="./cml:dimension" />
        </div>
      </xsl:if>
     
      <hr />

    </div>

  </xsl:template>
  
  <xsl:template match="cml:dimension">
    <xsl:value-of select="@name" /><xsl:if test="not(@power = '1')"><sup><xsl:value-of select="@power" /></sup></xsl:if><xsl:text> </xsl:text>  
  </xsl:template>

</xsl:stylesheet>