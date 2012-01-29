<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0"
                xmlns="http://www.w3.org/1999/xhtml"
                xmlns:h="http://www.w3.org/1999/xhtml"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:cml="http://www.xml-cml.org/schema"
                xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <xsl:output indent="yes"/>

    <xsl:template match="/">
        <xsl:apply-templates/>
    </xsl:template>

    <xsl:template match="xsd:schema">
        <html>
            <head>
                <title>Chemical Markup Language | Schema</title>
                <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
                <link rel="stylesheet" href="http://www.xml-cml.org/style/cml-spec.css" type="text/css"/>
            </head>

            <body>
                <div class="head">
                    <h1>CML Schema</h1>

                    <h2>Namespace</h2>
                    <p>The target namespace of this Schema is:
                        <code>
                            <xsl:value-of select="@targetNamespace"/>
                        </code>
                    </p>
                    <hr/>
                </div>

                <h1><a id="contents"></a>Table of Contents
                </h1>
                <p class="toc">1.
                    <a href="#introduction">Introduction</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.1
                    <a href="#notational_conventions">Notational Conventions</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.2
                    <a href="#namespaces">Namespaces</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.3
                    <a href="#substitution-group-explanation">Substitution Groups</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.4
                    <a href="#any-element-explanation">Any Element</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.5
                    <a href="#any-attribute-explanation">Any Attribute</a>
                    <br/>
                    &#160;&#160;&#160;&#160;1.6
                    <a href="#processContents-explanation">Process contents</a>
                    <br/>
                    2.
                    <a href="#element-descriptions">Elements</a>
                    <br/>
                    <xsl:for-each select="xsd:element">
                        &#160;&#160;&#160;&#160;2.<xsl:value-of select="position()"/>&#160;
                        <a href="#{@name}">
                            <xsl:value-of select="@name"/>
                            <br/>
                        </a>
                    </xsl:for-each>
                    3.
                    <a href="#attribute-descriptions">Attributes</a>
                    <br/>
                    <xsl:for-each select="xsd:attributeGroup">
                        &#160;&#160;&#160;&#160;3.<xsl:value-of select="position()"/>&#160;
                        <xsl:choose>
                            <xsl:when test="@name = ./xsd:attribute/@name">
                                <a href="#{@name}">
                                    <xsl:value-of select="@name"/>
                                </a>
                            </xsl:when>
                            <xsl:otherwise>
                                <a href="#{@name}">
                                    <xsl:value-of select="@name"/>
                                </a>
                                (attribute name: <xsl:value-of select="./xsd:attribute/@name"/>)
                            </xsl:otherwise>
                        </xsl:choose>
                        <br/>
                    </xsl:for-each>
                    4.
                    <a href="#type-descriptions">Types</a>
                    <br/>
                    <xsl:for-each select="xsd:simpleType">
                        &#160;&#160;&#160;&#160;4.<xsl:value-of select="position()"/>&#160;
                        <a href="#{@name}">
                            <xsl:value-of select="@name"/>
                            <br/>
                        </a>
                    </xsl:for-each>
                </p>

                <h2>
                    <a name="notational_conventions">1.1</a>
                    Notational Conventions
                </h2>

                <p>
                    The keywords &quot;MUST&quot;, &quot;MUST NOT&quot;, &quot;REQUIRED&quot;, &quot;SHALL&quot;, &quot;SHALL
                    NOT&quot;,
                    &quot;SHOULD&quot;, &quot;SHOULD NOT&quot;, &quot;RECOMMENDED&quot;, &quot;MAY&quot;, and &quot;OPTIONAL&quot;
                    in this document are to be interpreted as described in RFC 2119 [
                    <cite>
                        <a href="#ref-RFC2119">IETF RFC 2119</a>
                    </cite>
                    ].
                </p>

                <p>
                    The terms &quot;element&quot;, &quot;attribute&quot;, &quot;child&quot; and &quot;parent&quot;
                    in this document are to be interpreted as described in the W3C Recommendation for Extensible Markup
                    Language (XML) [
                    <cite>
                        <a href="#ref-XML">W3C XML</a>
                    </cite>
                    ].
                </p>

                <p>The use of fonts is as follows:</p>
                <ul>
                    <li>Schema terms, including elements and attributes, are written in <code>this font</code>.
                    </li>
                </ul>

                <h2>
                    <a name="namespaces">1.2</a>
                    Namespaces
                </h2>

                <p>This specification uses the following namespaces and prefixes to indicate those namespaces:</p>

                <table class="namespace-table" summary="Namespaces table">
                    <tr>
                        <th>Prefix</th>
                        <th>Namespace URI</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>
                            <code>cml</code>
                        </td>
                        <td>
                            <code>http://www.xml-cml.org/schema</code>
                        </td>
                        <td>Chemical Markup Language elements</td>
                    </tr>
                    <tr>
                        <td>
                            <code>other</code>
                        </td>
                        <td>
                            <code>http://www.example.net/</code>
                        </td>
                        <td>Any non-CML namespace</td>
                    </tr>
                    <tr>
                        <td>
                            <code>xhtml</code>
                        </td>
                        <td>
                            <code>http://www.w3.org/1999/xhtml</code>
                        </td>
                        <td>XHTML</td>
                    </tr>
                    <tr>
                        <td>
                            <code>xsd</code>
                        </td>
                        <td>
                            <code>http://www.w3.org/2001/XMLSchema</code>
                        </td>
                        <td>XSD Schema namespace</td>
                    </tr>
                </table>

                <h2>
                    <a name="substitution-group-explanation">1.3</a>
                    Substitution Groups
                </h2>
                <p>
                    This is an abstract element. Essentially it allows us to say that there are a set of elements that all belong
                        to the same group. Wherever you see a
                        reference to this abstract element it means that you can replace the reference with any of the
                    elements in the group.
                </p>
                <p>
                    It is intended that all the elements in the cml namespace are part of the <code>anyCml</code>
                    substitution group. Every element in the CML schema that is allowed element content (i.e. not those that
                    have string content - there is no mixed content allowed in CML) should specify
                    <code>&lt;xsd:element ref='anyCml' /&gt;</code> and thereby allow you to have any child from the cml namespace.
                </p>

                <h2>
                    <a name="any-element-explanation">1.4</a>
                    Any Element
                </h2>
                <p>
                    The <code>&lt;xsd:any namespace='##other' /&gt;</code> means that this element can be replaced by any
                    element from any namespace other than the CML namespace.
                    </p>
                <p>
                    The <code>&lt;xsd:any namespace='##local' /&gt;</code> means that this element can be replaced by any
                    element from the null namespace EXCEPT when the null namespace has been bound to the CML namespace.
                </p>
                <div class="good">
<pre>
    &lt;cml:molecule xmlns:cml='http://www.xml-cml.org/schema'&gt;
      &lt;foreign-element&gt;this is fine - the null namespace is not bound to anything&lt;/foreign-element&gt;
    &lt;/cml:molecule&gt;

    &lt;molecule xmlns='http://www.xml-cml.org/schema' xmlns:other='http://www.example.net'&gt;
      &lt;other:foreign-element&gt;this is fine&lt;/other:foreign-element&gt;
    &lt;/molecule&gt;
</pre>
                </div>
                <br/>
                <div class="bad">
<pre>
    &lt;molecule xmlns='http://www.xml-cml.org/schema'&gt;
      &lt;foreign-element&gt;this is not ok - the null namespace
            is bound to the cml namespace and "foreign-element" is
            not declared in this&lt;/foreign-element&gt;
    &lt;/molecule&gt;

</pre>
                </div>
                <p>
                    For more information about <code>xsd:any</code> for example other <code>namespace</code> values
                    that are allowed and how they behave see the <a href="http://www.w3schools.com/Schema/el_any.asp">w3c schools</a> page.
                </p>


                <h2>
                    <a name="any-attribute-explanation">1.5</a>
                    Any Attribute
                </h2>
                <p>
                Elements declaring <code>anyAttribute</code> with <code>namespace='##other'</code>
                may have any other attribute on them provided it is not in either the cml namespace or the null namespace.
                </p>
                <div class="good">
<pre>
    &lt;cml:molecule other:foreign-attribute="this is fine" /&gt;
</pre>
                </div>
                <br />
                <div class="bad">
<pre>
    &lt;cml:molecule foreign-attribute="not allowed like this" /&gt;
</pre>
                </div>
                <br />

                <div class="bad">
<pre>
    &lt;cml:molecule cml:foreign-attribute="not allowed like this" /&gt;
</pre>
                </div>
                <p>
                    For more information about <code>anyAttribute</code> for example other <code>namespace</code> values
                    that are allowed and how they behave see the <a href="http://www.w3schools.com/schema/el_anyattribute.asp">w3c schools</a> page.
                </p>

                <h2>
                    <a name="processContents-explanation">1.6</a>
                    Process Contents
                </h2>
                <p>
                The declaration <code>processContents='lax'</code> means that XML processors will try to obtain the
                    relevant schema for the namespace of the element or attribute and if it is available then it should
                    be used to validate the element or attribute against. However, if the relevant schema cannot be found
                    then no validation of the element or attribute will occur and no errors will occur.
                </p>
                <p>
                    For more information about the <code>processContents</code> attribute see <a href="http://www.w3schools.com/schema/el_any.asp">w3c schools</a> page.
                </p>

                <h1>
                    <a name="element-descriptions">Element descriptions</a>
                </h1>
                <hr/>
                <xsl:apply-templates select="xsd:element"/>

                <h1>
                    <a name="attribute-descriptions">Attribute descriptions</a>
                </h1>
                <hr/>
                <xsl:apply-templates select="xsd:attributeGroup"/>

                <h1>
                    <a name="simpleType-descriptions">Type descriptions</a>
                </h1>
                <hr/>
                <xsl:apply-templates select="xsd:simpleType"/>

            </body>
        </html>

    </xsl:template>

    <xsl:template match="xsd:element[@abstract='true']">
        <h2>
            <a name="{@name}">
                <xsl:value-of select="@name"/>
            </a>
        </h2>
    </xsl:template>

    <xsl:template match="xsd:element">

        <div class="element">
            <h2>
                <a name="{@name}">
                    <xsl:value-of select="@name"/>
                </a>
                <xsl:if test="@substitutionGroup">
                    &#160;<small>(substitution group: <a href="#substitution-group-explanation"><code><xsl:value-of select="@substitutionGroup"/></code></a>)</small>
                </xsl:if>
            </h2>

            <xsl:if test="xsd:annotation/xsd:documentation/h:div[@class='summary']">
                <h3>Summary</h3>
                <p>
                    <xsl:copy-of select="xsd:annotation/xsd:documentation/h:div[@class='summary']"/>
                </p>
            </xsl:if>

            <xsl:if test="xsd:annotation/xsd:documentation/h:div[@class='description']">
                <h3>Description</h3>
                <p>
                    <xsl:copy-of select="xsd:annotation/xsd:documentation/h:div[@class='description']"/>
                </p>
            </xsl:if>

            <xsl:apply-templates select="xsd:complexType"/>
        </div>
    </xsl:template>

    <xsl:template match="xsd:complexType">
        <h4>Allowed attributes</h4>
        <ul>
            <xsl:for-each select=".//xsd:attributeGroup">
                <li>
                    <a href="#{@ref}">
                        <xsl:value-of select="//xsd:attributeGroup[@name = current()/@ref]/xsd:attribute/@name"/>
                    </a>
                </li>
            </xsl:for-each>
            <xsl:if test=".//xsd:anyAttribute">
                <xsl:for-each select=".//xsd:anyAttribute">
                    <li>
                        <a href="#any-attribute-explanation"><code>anyAttribute</code></a>&#160;<code>namespace='<xsl:value-of select="@namespace" />'</code>
                    </li>
                </xsl:for-each>
            </xsl:if>
        </ul>
        <xsl:choose>
            <xsl:when test="xsd:simpleContent">
                <p>No element children allowed.</p>
            </xsl:when>
            <xsl:when test="xsd:choice">

            </xsl:when>
        </xsl:choose>
    </xsl:template>

    <xsl:template match="xsd:attributeGroup">
        <h2>
            <a name="{@name}">
                <xsl:value-of select="@name"/>
            </a>
            <xsl:if test="not(@name = ./xsd:attribute/@name)">
                  (attribute name: <xsl:value-of select="./xsd:attribute/@name"/>)
            </xsl:if>
        </h2>
    </xsl:template>

</xsl:stylesheet>