<?php 
/**
 * The template for displaying attachments.
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
	if(have_posts()) 
	{
		while(have_posts()) 
            {
                the_post();
            }
    } 
    ?>
	<?php 
		$src = wp_get_attachment_url( $post->id );
		$is_pdf = false; 
		$contains_pdf = strpos( $src, 'pdf' );
		if( $contains_pdf ){
			$is_pdf = true;
		}
	?>
<main>
<article class="attachment-article" >
	<header class="attachment-header">
        <h1 class="attachment-title">
            <?php the_title(); ?>
        </h1>
    </header>
	<div class="attachment-body" >
	<div class="grid-layout">
		<div class="iframe-container">
			<iframe 
				class="iframe-attachment" 
				src="<?php echo $src;?>" 
				loading="lazy" 
				name="iframe-content" 
				title="Attachment Document File"
				>
			</iframe>
		</div><!--  End of Iframe     -->
		
	</div><!--  End of Grid     -->
		
	<div class="attachment-download">
	<a class="file-link" href="<?php echo $src;?>" download rel="attachment">
		<button class="download-btn">
			<img class="icon" src="<?php echo get_template_directory_uri(  ).'/assets/images/download-svg.svg'?>">
			<span>Download</span>

			<?php if($is_pdf === true) { ?>
			<img class="file" src="<?php echo get_template_directory_uri(  ).'/assets/images/pdf-color.svg'?>">
			<?php }
			else { ?>
				<img class="file" src="<?php echo get_template_directory_uri(  ).'/assets/images/txt-blue.svg'?>">
			<?php
			}
			?>
		</button>
	</a>
	</div>
	
	
	</div><!--  End of Body     -->
	
</article> <!--  End of Article     -->          
</main> <!--  End of Main     -->
    
<?php 
 get_footer();
?>

