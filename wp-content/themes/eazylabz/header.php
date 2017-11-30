<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta name="viewport" content="width=device-width, initial-scale=0">
		
		<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/favicon-32x32.png" sizes="32x32"/>
		<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/favicon-16x16.png" sizes="16x16"/>
		
		<?php wp_head();?>
		
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<div class="headerContainer">
					<div class="logoContainer">
						<a href="<?php echo site_url();?>">
							<img src="<?php $logo=the_field('header_logo','options'); echo $logo['url'];?>" alt="Eazy Labz">
						</a>
					</div>
					<div class="navContainer">
						<div class="topNav">
							<ul>
								<li>
									<a href="tel:<?php $string=get_field('header_phone_number','options'); echo $string = str_replace(['(', '+', ' ',')'], '', $string);?>">
									<i class="fa fa-phone"></i><?php the_field('header_phone_number','options');?></a>
								</li>
								<li>
									<a href="mailto:<?php the_field('header_email','options');?>"><i class="fa fa-envelope-o"></i> <?php the_field('header_email','options');?></a>
								</li>
								<li>
									<ul>
										<li><a href="<?php the_field('facebook','options');?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php the_field('twitter','options');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="<?php the_field('google-plus','options');?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="<?php the_field('linkedin','options');?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="<?php the_field('youtube','options');?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<li><a href="<?php the_field('pinterest','options');?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="<?php the_field('instagram','options');?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<li><a href="<?php the_field('tumblr','options');?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="mainNav">
							<nav>
								<ul>
									<?php /* <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
									<li class="menu-item"><a href="about.php">About</a></li>
									<li class="menu-item"><a href="how-it-works.php">How it Works</a></li>
									<li class="menu-item">
										<a href="test.php">Tests</a>
										<span class="caret" data-toggle="dropdown"></span>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#" title="Tests 1">Tests 1</a></li>
											<li><a href="#" title="Tests 2">Tests 2</a></li>
											<li><a href="#" title="Tests 3">Tests 3</a></li>
											<li><a href="#" title="Tests 4">Tests 4</a></li>
											<li><a href="#" title="Tests 5">Tests 5</a></li>
										</ul>
									</li>
									<li class="menu-item"><a href="newsroom.php">Newsroom</a></li>
									<li class="menu-item"><a href="blog.php">Blog</a></li>
									<li class="menu-item">
										<a href="help.php">Help</a>
										<span class="caret" data-toggle="dropdown"></span>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#" title="Help 1">Help 1</a></li>
											<li><a href="#" title="Help 2">Help 2</a></li>
											<li><a href="#" title="Help 3">Help 3</a></li>
											<li><a href="#" title="Help 4">Help 4</a></li>
											<li><a href="#" title="Help 5">Help 5</a></li>
										</ul>
									</li>
									<li class="menu-item"><a href="forum.php">Forum</a></li>
									<li class="menu-item"><a href="contact.php">Contact</a></li> */ 
									
									//*****************START CODE USE FOR GETTING HEADER_MENU******************//
									

										$defaults = array(
										'theme_location'  => '',
										'menu'            => 'Header_menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
										);

										wp_nav_menu( $defaults );
									
									//*****************END CODE USE FOR GETTING HEADER_MENU******************//
									?>
									<li>
										<form>
											<div class="searchWrapper labelHide">
												<input type="text" name="seaech" id="seaech">
												<label for="seaech">Enter keyword or test</label>
												<button type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</li>
									<li>
										<div class="userAvater">
											<a class="" href="#">
												<i class="fa fa-user"></i>
											</a>
										</div>
									</li>
									<li>
										<a href="#">Login</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>