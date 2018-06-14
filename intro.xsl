<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="2.0"
    xmlns:t="http://www.tei-c.org/ns/1.0">


    <xsl:template match="t:TEI">

  
                    <xsl:apply-templates select="//t:note[ @type = 'introduction' ]"/>
         

    </xsl:template>



    
    <xsl:template match="t:note[ @type = 'introduction' ]">
        
  <xsl:apply-templates />
        
    </xsl:template>

<xsl:template match="t:hi[ @rend = 'h1']">
    <xsl:element name="h1">
        <xsl:apply-templates />
    </xsl:element>
    
</xsl:template>
    
    <xsl:template match="t:hi[ @rend = 'h2']">
        <xsl:element name="h2">
            <xsl:apply-templates />
        </xsl:element>
        
    </xsl:template>
    
    <xsl:template match="t:hi[ @rend = 'h3']">
        <xsl:element name="h3">
            <xsl:apply-templates />
        </xsl:element>
        
    </xsl:template>
    
    <xsl:template match="t:p">
        <xsl:element name="p">
            <xsl:apply-templates />
        </xsl:element>
        
    </xsl:template>

    <xsl:template match="t:lb">
        <xsl:element name="br">
   
        </xsl:element>
        
    </xsl:template>
    
    <xsl:template match="t:note[ @type = 'gloss'  ]">
        <xsl:element name="b">
            <xsl:text>  </xsl:text>
            <xsl:apply-templates />
<xsl:text>  </xsl:text>
        </xsl:element>
        
    </xsl:template>

</xsl:stylesheet>
