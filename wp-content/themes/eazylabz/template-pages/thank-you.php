<?php 
/* Template Name: Thank You 
*/ 
get_header();

?>
<div class="innerTemplate FAQTemplate">
	<section class="innerPageBanner" style="background-image: url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/aboutBanner.png');">
		<div class="container">
			<div class="banneInner">
				<div class="banneInnerCon">
					<h1>Thank You</h1>
					<!-- <div class="bradCrum">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><span>Thank You</span></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<section class="sectionPadd ThankYouContent">
		<div class="container">
			<h2 class="hide"> </h2>
			<div class="thankyou-cover contact-page text-center">
				<div class="container-fluid">
					<div class="tick"><i class="fa fa-check" aria-hidden="true"></i></div>
					<div class="thnkyou-message"><p>Thank you for getting in touch. We will get back to you shortly.</p></div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>