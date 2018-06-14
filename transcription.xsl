<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="2.0"
    xmlns:t="http://www.tei-c.org/ns/1.0">


    <xsl:template match="t:TEI">

  
                    <xsl:apply-templates select="t:text/t:body"/>
         

    </xsl:template>


    <xsl:template match="t:body/t:div">
        
        
      

       <xsl:element name="h4">
         <xsl:value-of select="t:head"/>
       </xsl:element>
       
       
            <xsl:value-of select="head"/>

        
        
        <xsl:element name="p">
        <xsl:apply-templates select="t:lg"/>
           
        </xsl:element>

    </xsl:template>

    <xsl:template match="t:lg">
<xsl:element name="p">
        <xsl:apply-templates/>

</xsl:element>
    </xsl:template>
    
    <xsl:template match="t:l">
     <xsl:apply-templates />
        <xsl:element name="br" />
    </xsl:template>
    
    <xsl:template match="t:pb">
       
        
        <xsl:element name="div">
            <xsl:attribute name="style">
                <xsl:text>float: left; margin-top: 50px; height: 10px; width: 100%;  </xsl:text>
            </xsl:attribute>
            
        </xsl:element>
        
    
        
    </xsl:template>
    
    <xsl:template match="t:figure">
        
  
        
        <xsl:element name="img">
            
            <xsl:attribute name="style">
                <xsl:text>float:right; ;</xsl:text>
            </xsl:attribute>
            
            <xsl:attribute name="src">
                
                <xsl:value-of select="t:graphic/@url"/>
            </xsl:attribute>
            
            <xsl:attribute name="width">
                
               <xsl:text>400</xsl:text>
            </xsl:attribute>
            
        </xsl:element>
        
    </xsl:template>
    
    <xsl:template match="t:note[ @type = 'gloss'  ]">
        <xsl:element name="b">
            <xsl:text>  </xsl:text>
            <xsl:apply-templates />
            <xsl:text>  </xsl:text>
        </xsl:element>
    
    </xsl:template>
    <!-- 
    https://digitalscholarship.nl/iiif/2/UBLWHS_VGG_Q_9_f001v-002r.ptif/full/full/0/default.jpg
    -->

</xsl:stylesheet>
