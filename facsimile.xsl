<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="2.0"
    xmlns:t="http://www.tei-c.org/ns/1.0">


    <xsl:template match="t:TEI">

  
                    <xsl:apply-templates select="//t:figure"/>
         

    </xsl:template>



    
    <xsl:template match="t:figure">
        
  
        
        <xsl:element name="img">
            
            <xsl:attribute name="style">
                <xsl:text>float:right; margin-bottom: 100px;</xsl:text>
            </xsl:attribute>
            
            <xsl:attribute name="src">
                
                <xsl:value-of select="t:graphic/@url"/>
            </xsl:attribute>
            
      
            
        </xsl:element>
        
    </xsl:template>
    
    <!-- 
    https://digitalscholarship.nl/iiif/2/UBLWHS_VGG_Q_9_f001v-002r.ptif/full/full/0/default.jpg
    -->

</xsl:stylesheet>
