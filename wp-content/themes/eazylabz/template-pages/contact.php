<?php 
/* Template Name: Contact 
*/ 
get_header();

?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="innerTemplate ContactTemplate">
	<?php 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
			if($image==""){ ?>
			<section class="innerPageBanner" style="background-image: url('http://placehold.it/1920x200&amp;text=Not Found Image');)">
			<?php }	else{  ?>
			<section class="innerPageBanner" style="background-image: url('<?php echo $image[0]; ?>');">
			<?php } ?> 
		<div class="container">
			<div class="banneInner">
				<div class="banneInnerCon">
					<h1><?php the_title(); ?></h1>
					<div class="bradCrum">
						<ul>
							<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
							<li><span>Contact</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd contactContainer">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-6">
					<h2>Contact Form</h2>

					<div class="contactForm labelHide">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
						<p><a href="help.php">Help &amp; Support Center</a></p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="padleft60">
						<h2>Care to speak with a Live Human?</h2>
						<div class="contactDetails">
							<ul>
								<li><a href="tel:+18333279522"><i class="fa fa-phone"></i>+1 833-327-9522</a></li>
								<li><a href="mailto:care@easylabz.com"><i class="fa fa-envelope"></i>Care@EasyLabz.com</a></li>
								<li><!-- <a href="tel:18333279522"> --><i class="fa fa-fax"></i>1 833-327-9522<!-- </a> --></li>
							</ul>
						</div>
						<div class="socialDetails">
							<ul>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
						<h2>Follow us!</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php 
		$image = get_post_meta($post->ID,"footer_image",true);
		$thumb = wp_get_attachment_image_src($image, '');
		if($thumb==""){ ?>
        <section class="contactBottom" style="background-image: url('http://placehold.it/1920x342&amp;text=Not found image');)">              
		<?php }	else{  ?>
		<section class="contactBottom" style="background-image: url('<?php echo $thumb['0'];?>');">
		<?php } ?>
		<div class="container">
			<div class="contactBottomContainer">
				<div class="contactBottomWrapper">
					<div class="contactBottomContent text-center">
						<h2><?php the_field('image_content',$post->ID) ?></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php endwhile; wp_reset_query(); ?>   
<?php get_footer();?>