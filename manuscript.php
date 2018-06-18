
<?php
/*
Template Name: Manuscript
*/
?>



					  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
					</script>


<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flash
 */

get_header(); ?>

	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>



					  <script>


					  $(document).ready(function(){

							$('#left-transcription').css('display', 'block');
							$('#left-facsimile').css('display', 'none');
							$('#left-introduction').css('display', 'none');

							$('#right-transcription').css('display', 'none');
							$('#right-facsimile').css('display', 'block');
							$('#right-introduction').css('display', 'none');

					      $("#lydgate-left-transcription").click(function(){
									$('#left-transcription').css('display', 'block');
									$('#left-facsimile').css('display', 'none');
									$('#left-introduction').css('display', 'none');

					      });

					      $("#lydgate-left-facsimile").click(function(){
									$('#left-facsimile').css('display', 'block');
									$('#left-transcription').css('display', 'none');
									$('#left-introduction').css('display', 'none');
					      });

					      $("#lydgate-left-introduction").click(function(){
									$('#left-transcription').css('display', 'none');
									$('#left-facsimile').css('display', 'none');
									$('#left-introduction').css('display', 'block');
					      });

					      $("#lydgate-right-transcription").click(function(){
									$('#right-transcription').css('display', 'block');
									$('#right-facsimile').css('display', 'none');
									$('#right-introduction').css('display', 'none');
					      });

					      $("#lydgate-right-facsimile").click(function(){
									$('#right-transcription').css('display', 'none');
									$('#right-facsimile').css('display', 'block');
									$('#right-introduction').css('display', 'none');
					      });

					      $("#lydgate-right-introduction").click(function(){
									$('#right-transcription').css('display', 'none');
									$('#right-facsimile').css('display', 'none');
									$('#right-introduction').css('display', 'block');
					      });

					  });
					  </script>


					  <style>

					  #lydgate-wrapper {
								margin-top: 30px;
								margin-bottom: 30px ;
					      width: 100%;

					      overflow: hidden; /* will contain if #lydgate-first is longer than #lydgate-second */
					  }

						#lydgate-wrapper h1 {
							font-size: 200%;
							margin-bottom: 20px;
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
					      width: 49.5%;
					      float:left; /* add this */

								padding: 30px 10px 30px 10px ;
					  }
					  #lydgate-right-main {

					      width: 49.5%;
								padding: 30px 10px 30px 10px ;
					      overflow: hidden; /* if you don't want #lydgate-second to wrap below #lydgate-first */
					  }
					  #lydgate-button {
					    float: left;
					    background-color: #dadfe8 ;
							color: !important white ;
					    padding: 6px 20px 6px 20px ;
					    margin-left: 5px;

					  }

					  </style>


					<div id = "lydgate-wrapper">

					<div id = "lydgate-left-menu">

					<div id="lydgate-button">
					<a href="#" id="lydgate-left-transcription">Transcription</a>
					</div>
					<div id="lydgate-button">
					<a href="#" id="lydgate-left-facsimile">
					Facsimile</a>
					</div>
					<div id="lydgate-button">
					<a href="#"  id="lydgate-left-introduction">
					Introduction</a>
					</div>

					</div>
					<div id = "lydgate-right-menu">


					  <div id="lydgate-button">
					  <a href="#" id="lydgate-right-transcription">
					  Transcription</a>
					  </div>
					  <div id="lydgate-button">
					  <a href="#" id="lydgate-right-facsimile">
					  Facsimile</a>
					  </div>
					  <div id="lydgate-button">
					  <a href="#" id="lydgate-right-introduction">
					  Introduction</a>
					  </div>

					</div>

					<div id = "lydgate-left-main">


			<div id="left-transcription">


			<?php
			require 'transcription.php'
			?>
			</div>
			<div id="left-facsimile">
			<?php
			require 'facsimile.php'
			?>
			</div>
			<div id="left-introduction">
			<?php
			require 'introduction.php'
			?>
			</div>


			TEST
					</div>
					<div id = "lydgate-right-main">


						<div id="right-transcription">
						<?php
						require 'transcription.php'
						?>
						</div>
						<div id="right-facsimile">
						<?php
						require 'facsimile.php'
						?>
						</div>
						<div id="right-introduction">
						<?php
						require 'introduction.php'
						?>
						</div>

					</div>


					</div>








	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

<?php

get_footer();

?>
