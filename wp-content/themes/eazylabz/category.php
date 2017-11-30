<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
$term_id=get_queried_object()->term_id;
?>
<div class="innerTemplate FAQTemplate">
	<?php
	/*Getting  Blog Banner Image */
	$Banner_image=get_post_meta(61,"banner_image",true);
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
					<h1><?php single_cat_title(); ?></h1>
					<div class="bradCrum">
						<ul>
							<li><a href="<?php echo site_url();?>">Home</a></li>
							<li><span><?php single_cat_title(); ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd BlogInnerContant">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="BlogList">
						<ul>
						<?php 
						$query_args = array (
						'post_type' => 'post',
						'posts_per_page' => -1,
						'paged' => $paged,
						'tax_query' => array(
											array(
												'taxonomy' => 'category',
												'order' =>  'DESC',
												'field'     => 'id',
												'terms'     => $term_id,
												)
											)
						);
						$the_query = new WP_Query( $query_args );
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>

							<li>
								<div class="blogWrapper">
									<div class="blogImg">
										<a href="<?php the_permalink();?>">
										<?php 
										if ( has_post_thumbnail() ) 
										{
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' );
										?>
											<figure style="background-image: url('<?php echo $image[0]; ?>');"></figure>
										<?php
										} 
										else 
										{
										?>	
											<figure style="background-image: url('http://placehold.it/409x225&amp;text=No image found');"></figure>
										<?php 
										} 
										?>
										</a>
									</div>
									<div class="blogConWrapper">
										<div class="blogHeader">
											<div class="blogHeaderContainer">
												<div class="dateCon">
													<div class="DateWrapper">
														<div class="headerDay"><?php echo get_the_date("j",$post->ID); ?></div>
														<div class="headerMonth"><?php echo get_the_date("M",$post->ID); ?></div>
													</div>
												</div>
												<div class="titleCon">
													<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
													<ul class="metaList">
														<li><i class="fa fa-user"></i> <?php the_author();?></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="blogContainerCon">
											<p><?php the_excerpt()?></p>
											<a class="readMore" href="<?php the_permalink();?>">Read More</a>
										</div>
									</div>
								</div>
							</li>
						<?php endwhile; wp_reset_query();?>	
						</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php
get_footer();
?>