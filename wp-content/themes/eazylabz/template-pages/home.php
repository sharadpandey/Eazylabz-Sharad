<?php 
/* Template Name: Home 
*/ 
get_header();

?>
<div class="home index">
	<section class="banner">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php 
				$i=0;
				if( have_rows('banner_images_repeater', $post->ID) ):

					while ( have_rows('banner_images_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
				?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php if($i==0){ echo 'active';}?>"></li>			
							
				<?php 
					$i++;
					endwhile;
				wp_reset_query();
				endif;
				?>
				
				
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php
				$j=0;
				if( have_rows('banner_images_repeater', $post->ID) ):

					while ( have_rows('banner_images_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
				  
						$banner_repeater_image = get_sub_field('banner_repeater_image',$post->ID);
				   
						$banner_repeater_description = get_sub_field('banner_repeater_description',$post->ID);

						$banner_repeater_button_text = get_sub_field('banner_repeater_button_text',$post->ID);
						
						$banner_repeater_button_url = get_sub_field('banner_repeater_button_url',$post->ID);
				?>
							
							<div class="item <?php if($j==0){ echo 'active';}?>" style="background-image: url('<?php echo $banner_repeater_image;?>');">
								<div class="bannerContainer">
									<div class="bannerWrapper">
										<div class="container">
											<div class="row">
												<div class="col-md-offset-6 col-md-6">
													<div class="BannerContent">
														<?php echo $banner_repeater_description;?>

														<a href="<?php echo $banner_repeater_button_url;?>" class="bannerBtn"><?php echo $banner_repeater_button_text;?></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
				<?php 
					$j++;
					endwhile;
				wp_reset_query();
				endif;
				?>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/sliderImgRight.png" alt="Slider Arrow">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/sliderImgLeft.png" alt="Slider Arrow">
				<!-- <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/sliderImgLeft.png" alt="Slider Arrow"> -->
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<section class="findLab">
		<div class="container">
			<h2 class="hide"> </h2>
			<div class="formContainer">
				<form>
					<label>Fina A Lab</label>
					<input type="text" name="findLab" placeholder="Enter Your Zip Code">
					<input type="submit" name="findsub" value="Find">
				</form>
			</div>
		</div>
	</section>

	<section class="sectionPadd testSection">
		<div class="container">
			<div class="title center">
				<h2>Featured Tests</h2>
			</div>

			<div class="testContainer">
				<div id="testSlider" class="owl-carousel owl-theme">
					<div class="item">
						<div class="testWrapper">
							<div class="img" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/test1.png');"></div>
							<div class="testFooter">
								<div class="testFooterContainer">
									<div class="nameAndPrice">
										<div class="testName">Easy Labz Equipment</div>
										<div class="testPrice">$5</div>
									</div>
									<div class="AddToCart">
										<a href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testWrapper">
							<div class="img" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/test2.png');"></div>
							<div class="testFooter">
								<div class="testFooterContainer">
									<div class="nameAndPrice">
										<div class="testName">Easy Labz Equipment</div>
										<div class="testPrice">$5</div>
									</div>
									<div class="AddToCart">
										<a href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testWrapper">
							<div class="img" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/test3.png');"></div>
							<div class="testFooter">
								<div class="testFooterContainer">
									<div class="nameAndPrice">
										<div class="testName">Easy Labz Equipment</div>
										<div class="testPrice">$5</div>
									</div>
									<div class="AddToCart">
										<a href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testWrapper">
							<div class="img" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/test4.png');"></div>
							<div class="testFooter">
								<div class="testFooterContainer">
									<div class="nameAndPrice">
										<div class="testName">Easy Labz Equipment</div>
										<div class="testPrice">$5</div>
									</div>
									<div class="AddToCart">
										<a href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd bgGreen workSection op0" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/greenbg.png');background-repeat: repeat;background-size: auto;">
		<div class="container">
			<div class="title center">
				<h2><?php the_field('how_it_works_heading',$post->ID);?></h2>
			</div>
			<p class="text-center"><?php the_field('heading_description',$post->ID);?></p>

			<div class="padtop70">
				<div class="row">
					<?php
					if( have_rows('how_it_works_features_repeater', $post->ID) ):

						while ( have_rows('how_it_works_features_repeater', $post->ID) ) : the_row();
						//getting all field from repeater
					  
							$how_it_works_features_svg_image = get_sub_field('how_it_works_features_svg_image',$post->ID);
					   
							$how_it_works_features_title = get_sub_field('how_it_works_features_title',$post->ID);

							$how_it_works_features_description = get_sub_field('how_it_works_features_description',$post->ID);
					?>
								<div class="col-md-4">
									<div class="workContainer">
										<div class="workContainerWrapper">
											<span class="icon">
												<?php echo $how_it_works_features_svg_image;?>
											</span>
											<span class="workHeading"><a href="<?php the_permalink(58);?>"><?php echo $how_it_works_features_title;?></a></span>
											<span class="workContent"><?php echo $how_it_works_features_description;?></span>
										</div>
									</div>
								</div>
								
					<?php 
						
						endwhile;
					wp_reset_query();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd bgLightGray blogSection op0" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/graybg.png');background-repeat: repeat;background-size: 5px;">
		<div class="container">
			<div class="title center">
				<h2>Recent Blog</h2>
			</div>
				<div class="padtop30">
					<div id="blogSlider" class="owl-carousel owl-theme">
						
						<?php 
							query_posts( array ( 'post_type' =>'post', 'posts_per_page' => 6,'order' => 'DESC')  ); 

							while ( have_posts() ) : the_post();?>
								<div class="item">
									<div class="blogWrapper">
									<?php 
									if ( has_post_thumbnail() ) 
									{
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' );
									 ?>
										
										 <div class="img" style="background-image: url('<?php echo $image[0]; ?>');">
									<?php
									} 
									else 
									{
									?>
										<div class="img">
									<?php 
									} 
									?>
											<div class="postDate">
												<div class="day"><?php echo get_the_date("j",$post->ID); ?></div>
												<div class="month"><?php echo get_the_date("M",$post->ID); ?></div>
											</div>
										</div>
										<div class="blogCon">
											<div class="blogHeading"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
											<div class="blogContent"><?php the_excerpt()?></div>
											<a href="<?php the_permalink();?>" class="readmore">Read More</a>
										</div>
									</div>
								</div>
						<?php  
						endwhile; 
						wp_reset_query();
						?>
						
					</div>
				</div>
			
		</div>
	</section>

	<?php
	/*Getting  help_and_support_center_bg_image */
		$help_and_support_center_bg_image=get_post_meta($post->ID,"help_and_support_center_bg_image",true);
		$help_and_support_center_bg = wp_get_attachment_image_src($help_and_support_center_bg_image, 'full');	
	
		if(!empty($help_and_support_center_bg))
		{
	?>
		
		<section class="sectionPadd bgGreen helpSection op9" style="background-image: url('<?php echo $help_and_support_center_bg[0];?>');">
	<?php 
		}
		else
		{
	?>	
			<section class="sectionPadd bgGreen helpSection op9" style="background-image: url('http://placehold.it/1920x586&amp;text=No image found');">
	<?php	
		}
	?>
		<div class="container">
			<div class="title center">
				<h2><?php the_field('help_and_support_center_heading',$post->ID);?></h2>
			</div>

			<div class="padtop10">
				<div class="customRow">
					<?php 
					
					if( have_rows('help_and_support_center_feature_repeater', $post->ID) ):

						while ( have_rows('help_and_support_center_feature_repeater', $post->ID) ) : the_row();
						//getting all field from repeater
					  
							$help_and_support_center_feature_svg = get_sub_field('help_and_support_center_feature_svg',$post->ID);
					   
							$help_and_support_center_feature_title = get_sub_field('help_and_support_center_feature_title',$post->ID);

							$help_and_support_center_feature_short_description = get_sub_field('help_and_support_center_feature_short_description',$post->ID);
							
							$help_and_support_center_feature_link = get_sub_field('help_and_support_center_feature_link',$post->ID);
					?>
								<div class="CustomCol3">
									<div class="helpWrapper">
										<div class="helpIcon">
											<?php echo $help_and_support_center_feature_svg;?>
										</div>
										<div class="helpHeading"><a href="<?php echo $help_and_support_center_feature_link;?>"><?php echo $help_and_support_center_feature_title;?></a></div>
										<p><?php echo $help_and_support_center_feature_short_description;?></p>
									</div>
								</div>
					<?php 
						endwhile;
					wp_reset_query();
					endif;
					?>
				
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd bgLightGray LabSection">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="title">
						<h2><?php the_field('our_company_easy_labz_heading',$post->ID);?></h2>
					</div>
					<div class="padright60">
						<?php the_field('our_company_easy_labz_description',$post->ID);?>
					</div>
				</div>
				<div class="col-md-5">
				<?php
				/*Getting  our_company_easy_labz_image */
					$our_company_easy_labz_image=get_post_meta($post->ID,"our_company_easy_labz_image",true);
					$our_company_easy_img = wp_get_attachment_image_src($our_company_easy_labz_image, 'full');	
				
					if(!empty($our_company_easy_img))
					{
				?>
						<img src="<?php echo $our_company_easy_img[0];?>" alt="Lab">
				<?php 
					}
					else
					{
				?>	
						<img src="http://placehold.it/585x383&amp;text=No image found" alt="Lab">
				<?php	
					}
				?>
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd blogSection newsSection">
		<div class="container">
			<div class="title center">
				<h2>Newsroom</h2>
			</div>
			<p class="text-center">Lorem ipsum dolor sir, adipisicing elit sed do eiusmod.</p>

			<div class="padtop70">
				<div id="newsSlider" class="owl-carousel owl-theme">
				
					<div class="item">
						<div class="newsWrapper">
							<div class="newsCon">
								<figure style="background-image: url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/news1.png);"></figure>
								<div class="newsConWrapper">
									<div class="newsHead"><a href="#">Great Technology and Equipment</a></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididuntut labore et dolore magna aliqua.</p>
									<a href="#" class="newsdate">HELPFUL RESOURCES / 11.10.2017</a>
									<div class="emptyBox"></div>
								</div>
							</div>
							<div class="newsFooter">
								<div class="counter">01</div>
								<div class="link">
									<a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="newsWrapper">
							<div class="newsCon">
								<figure></figure>
								<div class="newsConWrapper">
									<div class="newsHead"><a href="#">Great Technology and Equipment</a></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididuntut labore et dolore magna aliqua.</p>
									<a href="#" class="newsdate">HELPFUL RESOURCES / 11.10.2017</a>
									<div class="emptyBox"></div>
								</div>
							</div>
							<div class="newsFooter">
								<div class="counter">02</div>
								<div class="link">
									<a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="newsWrapper">
							<div class="newsCon">
								<figure></figure>
								<div class="newsConWrapper">
									<div class="newsHead"><a href="#">Great Technology and Equipment</a></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididuntut labore et dolore magna aliqua.</p>
									<a href="#" class="newsdate">HELPFUL RESOURCES / 11.10.2017</a>
									<div class="emptyBox"></div>
								</div>
							</div>
							<div class="newsFooter">
								<div class="counter">03</div>
								<div class="link">
									<a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>