<xsl:stylesheet 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
   version="1.0">
   <xsl:output method="html"/>
   
  <xsl:template match="/">
    <html>
	    <table border="1">
		    <caption><h1>Types</h1></caption>
		    <xsl:apply-templates select="/*/xsd:simpleType" />
	    </table>
	    <table border="1">
		    <caption><h1>Attributes</h1></caption>
		    <xsl:apply-templates select="/*/xsd:attributeGroup/xsd:attribute"/>
	    </table>
	    <table border="1">
		    <caption><h1>Elements</h1></caption>
		    <xsl:apply-templates select="/*/xsd:element"/>
	    </table>
    </html>
  </xsl:template>

  <xsl:template match="xsd:simpleType">
  <!-- 
    <xsd:simpleType id="st.actionOrderType" name="actionOrderType">
        <xsd:annotation>
            <xsd:documentation>
                <h:div class="summary">Describes whether child elements are sequential or parallel.</h:div>
                <h:div class="description">There is no default.</h:div>
            </xsd:documentation>
        </xsd:annotation>
        <xsd:restriction base="xsd:string">
            <xsd:enumeration value="sequential"/>
            <xsd:enumeration value="parallel"/>
        </xsd:restriction>
   -->
    <tr>
    	<td><xsl:value-of select="@name"/></td>
    	<td><xsl:value-of select='xsd:restriction/@base | xsd:restriction/xsd:simpleType/xsd:list/@itemType'/></td>
    	<td><xsl:value-of select="xsd:list/@itemType | xsd:restriction/xsd:pattern/@value"/></td>
    	<td><xsl:value-of select='xsd:restriction/xsd:length/@value'/></td>
    	<td><xsl:for-each select='xsd:restriction/xsd:enumeration'>
    	  <xsl:value-of select='@value'/><br/>
    	  </xsl:for-each>
    	</td>
    </tr>
  </xsl:template>  

                    
  <xsl:template match="xsd:attribute">
    <tr>
    	<td><xsl:value-of select="@name"/></td>
    	<td><xsl:value-of select='@type'/></td>
    </tr>
  </xsl:template>  
  
  <xsl:template match="xsd:element">
    <tr>
    	<td><xsl:value-of select="@name"/></td>
    	<td><xsl:value-of select="xsd:complexType/xsd:simpleContent/xsd:extension/@base | xsd:complexType/xsd:choice/xsd:element/@ref"/></td>
    	<td><xsl:for-each select='xsd:complexType/xsd:attributeGroup'><xsl:value-of select="@ref"/><br/></xsl:for-each></td>
    </tr>
  </xsl:template>  
    
</xsl:stylesheet>