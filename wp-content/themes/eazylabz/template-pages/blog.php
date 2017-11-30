<?php 
/* Template Name: Blog 
*/ 
get_header();
?>


<div class="innerTemplate FAQTemplate">
	<?php
	/*Getting  Blog Banner Image */
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

	<section class="sectionPadd BlogInnerContant">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="BlogList">
						<ul>
						<?php 
							query_posts( array ( 'post_type' =>'post', 'posts_per_page' => 10,'order' => 'DESC')  ); 

							while ( have_posts() ) : the_post();?>
						
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
							
						<?php  
							endwhile; 
							wp_reset_query();
						?>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="site-sidebar right-sidebar pl-30">
						<div class="search">
							<div class="search-box labelHide">
								<form>
									<div class="searchBox">
										<input type="search" name="search-query" id="search-query" placeholder="">
										<label for="search-query">Search..</label>
										<input type="submit" name="search">
									</div>
								</form>
							</div>
						</div>
						<div class="widget">
							<div class="about">
								<h4>Categories</h4>

								<ul class="bloglisting">
								<?php 
								$taxonomyName = "category";
								$parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'title', 'hide_empty' => false));
								foreach ($parent_terms as $pterm) {
								?> 
									<li><a href="<?php echo get_term_link($pterm->name, $taxonomyName)?>"><?php echo $pterm->name;?></a></li>
								<?php 
								}
								?>		
								</ul>
							</div>
						</div>
						<div class="widget">
							<div class="about">
								<h4>Archives</h4>
								<ul class="bloglisting">
								<?php 
									$args = array(
									    'type'            => 'monthly',
										'limit'           => '',
										'format'          => 'custom', 
										'before'          => '<li>',
										'after'           => '</li>',
										'echo'            => 1,
										'order'           => 'DESC'
									);
									wp_get_archives( $args );
									?>
								</ul>
							</div>
						</div>
						<div class="widget">
							<div class="about tags">
								<h4>Tags</h4>

								<ul class="tagList">
								<?php 
								$tagtaxonomyName = "post_tag";
								$post_tags = get_terms($tagtaxonomyName, array('parent' => 0, 'orderby' => 'title', 'hide_empty' => false));
								foreach ($post_tags as $post_tag) {
								?> 
									<li><a href="<?php echo get_term_link($post_tag->name, $tagtaxonomyName)?>"><?php echo $post_tag->name;?></a></li>
								<?php 
								}
								?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>