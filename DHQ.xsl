<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="2.0">
    <xsl:template match="TEI">
        <html>
            <head/>
            <body>
             

                <h2>Digital Humanities Quarterly</h2>
                
               
                <p>
                    <xsl:text>This article contains </xsl:text>
                    <xsl:value-of select="count(//text//p)"/>
                    <xsl:text>
                    paragraphs, and </xsl:text>
                    <xsl:value-of select="count(//text//div//head)"/>
                    <xsl:text> section
                    headings. </xsl:text>
                    <xsl:value-of select="count(//text//p//ptr)"/>
                    <xsl:text> paragraphs contain a footnote.</xsl:text>
                </p>
                <p> The list below is the bibliography of the article's references.  </p>
                <ul>
                    <xsl:for-each select="//listBibl/bibl">
                        <xsl:sort select="."/>
                       
                        <li>
                            <xsl:value-of select="."/>
                        </li>
                       
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
