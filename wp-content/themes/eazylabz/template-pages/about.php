<?php 
/* Template Name: About US 
*/ 
get_header();
global $post;
while ( have_posts() ) : the_post();?>

<div class="innerTemplate AboutTemplate">
	<?php
	/*Getting  About Banner Image */
	$Banner_image=get_post_meta($post->ID,"banner_image",true);
	$Banner = wp_get_attachment_image_src($Banner_image, 'full');	

	if(!empty($Banner))
	{
	?>
		<section class="innerPageBanner" style="background-image: url('<?php echo $Banner[0];?>');">
	<?php 
	}
	else
	{
	?>		
		<section class="innerPageBanner" style="background-image: url('http://placehold.it/1920x766&amp;text=No image found');">
	<?php	
	}
	?>

		<div class="container">
			<div class="banneInner">
				<div class="banneInnerCon">
					<h1><?php the_field('banner_text',$post->ID);?></h1>
					<div class="bradCrum">
						<ul>
							<li><a href="<?php echo site_url();?>">Home</a></li>
							<li><span><?php the_title();?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd bgLightGray">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php the_content();?>
				</div>
				<div class="col-md-6">
					<?php 
					if ( has_post_thumbnail() ) 
					{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' );
					 ?>
						 <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
					<?php
					} 
					else 
					{
					?>
						<img src="http://placehold.it/555x333&amp;text=No image found" alt="<?php the_title(); ?>" 
						class="img-responsive" />
					<?php 
					} 
					?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php 
endwhile; 
wp_reset_query();	
get_footer();?>