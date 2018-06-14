<?php
/*
Template Name: Manuscript
*/
?>



<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */

get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>
	<div class="row">
		<?php
		if ( 'sidebar-left' == $layout_class ) :
			get_sidebar();
		endif;
		?>



																<style>

																#lydgate-wrapper {
																    width: 100%;

																    overflow: hidden; /* will contain if #lydgate-first is longer than #lydgate-second */
																}
																#lydgate-left-menu {
																    width: 49.5%;
																    float:left; /* add this */

																}
																#lydgate-right-menu{

																    width: 49.5%;
																    overflow: hidden; /* if you don't want #lydgate-second to wrap below #lydgate-first */
																}

																#lydgate-left-main {

																		padding-top: 30px;
																    width: 49.5%;
																    float:left; /* add this */
color: black ;
																}
																#lydgate-right-main {
																		padding-top: 30px;

																    width: 49.5%;
																    overflow: hidden; /* if you don't want #lydgate-second to wrap below #lydgate-first */
																}
																#lydgate-button {
																  float: left;
																  background-color: #efeff5 ;
																  padding: 6px 20px 6px 20px ;
																  margin-left: 5px;

																}

														</style>

																<div id = "lydgate-wrapper">

<?php
$filename =  basename($_SERVER['PHP_SELF'])
 ?>

																<div id = "lydgate-left-menu">

																<div id="lydgate-button">
																<a href="<?php
																echo $filename . "?contents-left=transcription" ;
																?>">Transcription</a>
																</div>
																<div id="lydgate-button">
															<a href="<?php
															echo $filename . "?contents-left=facsimile" ;
															?>">Facsimile</a>
																</div>
																<div id="lydgate-button">
																	<a href="<?php
																	echo $filename . "?contents-left=intro" ;
																	?>">Introduction</a>
																</div>

																</div>
																<div id = "lydgate-right-menu">


																	<div id="lydgate-button">
																	<a href="<?php
																	echo $filename . "?contents-right=transcription&contents-left=" . $contentL ;
																	?>">Transcription</a>
																	</div>
																	<div id="lydgate-button">
																<a href="<?php
																echo $filename . "?contents-right=facsimile&contents-left=" . $contentL ;
																?>">Facsimile</a>
																	</div>
																	<div id="lydgate-button">
																		<a href="<?php
																		echo $filename . "?contents-right=intro&contents-left=" . $contentL ;
																		?>">Introduction</a>
																	</div>


																</div>

																<div id = "lydgate-left-main">

																	<?php

																	$contentsL = $_GET["contents-left"] ;

																	if ( $contentsL == 'facsimile' ){
																		$stylesheet = 'facsimile.xsl' ;
																	}
																	elseif ( $contentsL == 'intro' ){
																		$stylesheet = 'intro.xsl' ;
																	}
																	else {
																		$stylesheet = 'transcription.xsl' ;
																	}

																//	echo $stylesheet ;

																	// Load the XML source
																	$xml = new DOMDocument;
																	$xml->load('lydgate.xml');

																	$xsl = new DOMDocument;
																	$xsl->load( $stylesheet );

																	// Configure the transformer

																	$proc = new XSLTProcessor;
																	$proc->importStyleSheet($xsl); // attach the xsl rules

																	echo $proc->transformToXML($xml);

																	?>

																</div>
																<div id = "lydgate-right-main">

																	<?php
																	$contentsR = $_GET["contents-right"] ;

																	if ( $contentsR == 'transcription' ){
																		$stylesheet = 'transcription.xsl' ;
																	}
																	elseif ( $contentsR == 'intro' ){
																		$stylesheet = 'intro.xsl' ;
																	}
																	else {
																		$stylesheet = 'facsimile.xsl' ;
																	}

																//	echo $stylesheet ;

																	// Load the XML source
																	$xml = new DOMDocument;
																	$xml->load('lydgate.xml');

																	$xsl = new DOMDocument;
																	$xsl->load( $stylesheet );

																	// Configure the transformer
																	$proc = new XSLTProcessor;
																	$proc->importStyleSheet($xsl); // attach the xsl rules

																	echo $proc->transformToXML($xml);

																	?>



																</div>

																</div>







		<?php

/*
		if ( 'sidebar-right' == $layout_class ) :
			get_sidebar();
		endif; */
		?>
	</div>
<?php
get_footer();
