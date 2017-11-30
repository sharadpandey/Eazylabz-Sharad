<?php 
/* Template Name: How it Works 
*/ 
get_header();

?>
<div class="innerTemplate FAQTemplate">
	<?php
	/*Getting  How it Works Banner Image */
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

	<section class="sectionPadd NewsInnerContent">
		<div class="container">
			<div class="title center">
				<h2><?php the_field('how_it_works_heading_text',$post->ID);?></h2>
			</div>
			<p class="text-center"><?php the_field('how_it_works_subheading',$post->ID);?></p>


			<div class="howItWorkList padtop70">
				<ul>
					<?php
					$i=0;
					if( have_rows('how_it_works_repeater', $post->ID) ):

						while ( have_rows('how_it_works_repeater', $post->ID) ) : the_row();
						//getting all field from repeater
					  
							$how_it_works_product_image = get_sub_field('how_it_works_product_image',$post->ID);

							$how_it_works_product_description = get_sub_field('how_it_works_product_description',$post->ID);
					?>
							<li>
								<div class="workWrap">
									<div class="IconWrap">
										<div class="iconImg">
											<figure style="background-image: url('<?php echo $how_it_works_product_image;?>')"></figure>
										</div>
									</div>
									<div class="workConWrap">
										<div class="workCon">
											<div class="workConBox">
												<?php echo $how_it_works_product_description;?>
											</div>
										</div>
									</div>
								</div>
							</li>
								
					<?php 
					$i++;
				    endwhile;
					wp_reset_query();
					endif;
					?>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>